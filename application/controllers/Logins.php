<?php 
	class Logins extends CI_Controller{
		
		function index(){
			$errors['error'] = '';
			$this->load->view('form_login', $errors);
		}
		
		function check_users(){
			$this->form_validation->set_rules('u_email', 'Email', 'required');
			$this->form_validation->set_rules('u_password', 'Password', 'required');

			if($this->form_validation->run() == False){
				$errors['error'] = '';
				$this->load->view('form_login', $errors);
			}else{
				
				$u_email = $this->input->post('u_email');
				$u_password = $this->input->post('u_password');
				$query = $this->User->check_account($u_email, $u_password);
				
				if($query->num_rows()>0){
					//set sesstion
					$userid = $query->row()->user_id;
					$this->session->set_userdata('user_id', $userid);
					redirect('Logins/profile');
				}else{
					$errors['error'] = "Email and Password doesn't correct";
					$this->load->view('form_login', $errors);
					echo "no";
				}
			}
		}
		
		function logout()
		{
			$this->session->unset_userdata('user_id');
			redirect('Logins/index');

		}
		
		function add(){
			
			if(!$this->session->userdata('user_id')){
				redirect('Logins/index');
			}
			
			$query = $this->User->get_current_user($this->session->userdata('user_id'));
			echo $query->username;
			echo "<br />";
			echo "Hi";
			echo "<br />";
			echo anchor('Logins/logout', 'Logout');
		}
		function signup(){
			
			$this->load->view('signup');
			
		}
		function adduser(){
			
			$data['fname'] = $this->input->post('fname');
			$data['lname'] = $this->input->post('lname');
			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');
			$data['repassword'] = $this->input->post('repassword');
			$data['gmail'] = $this->input->post('phone');
			$data['gmail'] = $this->input->post('gmail');
				
				if($this->User->adduser($data)){
					redirect('Logins/index');	
				}else{
					echo "can't";
				}
				
		}
		
		function profile(){
			
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$data['result'] = $this->User->get_current_user($this->session->userdata('user_id'));
			$this->load->view('profile', $data);
		}
	}
?>