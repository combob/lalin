<?php 
	class Shops extends CI_Controller{
		
		function index(){
			// can't not access if don't login
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$this->load->view('master_page/header');
			$this->load->view('master_page/logo');
			$data['result'] = $this->Shop->get_shop();
			$this->load->view('shop/viewshop', $data);
			$this->load->view('master_page/footer');
		}
		
		function addshop(){
			// can't not access if don't login
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			// get category form DB
			$data['posts'] = $this->Shop->get_categories();
			$data['errors'] = '';
			
			$this->load->view('master_page/header');
			$this->load->view('master_page/logo');
			$this->load->view('shop/insertshop', $data);
			$this->load->view('master_page/footer');
		}
		
		function insert(){
			// can't not access if don't login
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			// form validation
			$this->form_validation->set_rules('shop_name', 'Shop_name', 'required');
			$this->form_validation->set_rules('category', 'Category', 'required');
			
			// check form validation
			if($this->form_validation->run() == False){
				$this->load->view('master_page/header');
				$this->load->view('master_page/logo');
				$data['posts'] = $this->Shop->get_categories();
				$data['errors'] = '';
				$this->load->view('shop/insertshop', $data);
				$this->load->view('master_page/footer');
			}else{
				// get data from input
				$data['shop_name'] = $this->input->post('shop_name');
				$data['category'] = $this->input->post('category');
				$data['description'] = $this->input->post('description');
				$data['user_id'] = $this->session->userdata('user_id');
				
				$config['upload_path'] = './uploads/banner';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				//$this->upload->initialize($config);
				$this->load->library('upload', $config);
				
				if($this->upload->do_upload('pro_img')){
					//var_dump($this->upload->data());
					$file_info = $this->upload->data();
					$data['banner'] = $file_info['file_name'];
				}else{
					echo 'Can not upload img';
				}
				//if data insert into table shop
				if($this->Shop->insert_shop($data)){
					// get data from table shop
					$variable['result'] = $this->Shop->get_shopid();
					// foreach get the last id from table shop
					foreach($variable as $key => $value){
						$shop_id = $value[0]['shop_id'];
					}
					
					//get data from form cantact
					$data1['contact_name'] = $this->input->post('contact_name');
					$data1['contact_phone'] = $this->input->post('contact_phone');
					$data1['contact_email'] = $this->input->post('contact_email');
					$data1['contact_address'] = $this->input->post('contact_address');
					$data1['shop_id'] = $shop_id;
					
					if($this->Contact->insert_contact($data1)){
						redirect('shops/index');	
					}else{
						redirect('shops/addshop');
						echo 'no';
					}
				}
			}
			
		}
		
		function delete($id){
			if($this->Shop->delete_shop($id)){
				redirect('Shops/index');
			}
		}
		
		function edit($id){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$this->load->view('master_page/header');
			$this->load->view('master_page/logo');
			$data['result'] = $this->Shop->shop_edit($id);
			$this->load->view('shop/update_shop', $data);
			$this->load->view('master_page/footer');
			
		}
		
		function do_edit(){
			$data['shop_name'] = $this->input->post('shop_name');
			$data['category'] = $this->input->post('category');
			$data['user_id'] = $this->session->userdata('user_id');
			$shopId = $this->input->post('shop_id');
			
			if($this->Shop->shop_update($shopId, $data)){
				redirect('shops/index');
			}else{
				echo 'No';
			}
		}
	}