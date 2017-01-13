<?php 
	class Logins extends CI_Controller{
		
		function index(){
			$this->load->view('master_page/header');
			$this->load->view('master_page/logo');
			$errors['error'] = '';
			$this->load->view('user/form_login', $errors);
			$this->load->view('master_page/footer');
		}
		
		function check_users(){
			//form validation 
			$this->form_validation->set_rules('u_email', 'Email', 'required');
			$this->form_validation->set_rules('u_password', 'Password', 'required');
			
			//check form validation
			if($this->form_validation->run() == False){
				$this->load->view('master_page/header');
				$this->load->view('master_page/logo');
				$errors['error'] = '';
				$this->load->view('user/form_login', $errors);
				$this->load->view('master_page/footer');
			}else{
				
				// get data from input
				$u_email = $this->input->post('u_email');
				$u_password = $this->input->post('u_password');
				$query = $this->User->check_account($u_email, $u_password);
				
				if($query->num_rows()>0){
					//set sesstion
					$userid = $query->row()->user_id;
					$this->session->set_userdata('user_id', $userid);
					redirect('Logins/profile');
				}else{
					$this->load->view('master_page/header');
					$this->load->view('master_page/logo');
					$errors['error'] = "Email and Password doesn't correct";
					$this->load->view('user/form_login', $errors);
					$this->load->view('master_page/footer');
				}
			}
		}
		
		function logout()
		{
			$this->session->unset_userdata('user_id');
			redirect('Logins/index');

		}
		
		function add(){
			// if user don't login can't not access this page
			if(!$this->session->userdata('user_id')){
				redirect('Logins/index');
			}
			
			// query get session user login 
			$query = $this->User->get_current_user($this->session->userdata('user_id'));
			
		}
		function signup(){
			$this->load->view('master_page/header');
			$this->load->view('master_page/logo');
			$this->load->view('user/signup');
			$this->load->view('master_page/footer');
			
		}
		function adduser(){
			// form validation
			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('repassword', 'Re-enter Password', 'required');
			$this->form_validation->set_rules('phone', 'Tel', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			
			//check form validation
			if($this->form_validation->run() == False){
				$this->load->view('master_page/header');
				$this->load->view('master_page/logo');
				$this->load->view('user/signup');
				$this->load->view('master_page/footer');
			}else{
			
				// get data form input
				$data['fname'] = $this->input->post('fname');
				$data['lname'] = $this->input->post('lname');
				$data['username'] = $this->input->post('username');
				$data['password'] = $this->input->post('password');
				$data['repassword'] = $this->input->post('repassword');
				$data['phone'] = $this->input->post('phone');
				$data['gmail'] = $this->input->post('email');
					
					// check data add in db
					if($this->User->adduser($data)){
						redirect('Logins/index');	
					}else{
						$this->load->view('master_page/header');
						$this->load->view('master_page/logo');
						$this->load->view('user/signup');
						$this->load->view('master_page/footer');
					}
			}	
		}
		
		function profile(){
			// if user don't login can't not access this page
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$data['result'] = $this->User->get_current_user($this->session->userdata('user_id'));
			$this->load->view('master_page/header');
			$this->load->view('master_page/logo');
			$this->load->view('user/profile', $data);
			$this->load->view('master_page/footer');
		}
	}
?>