<?php 
	class Shops extends CI_Controller{
		
		function index(){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$data['result'] = $this->Shop->get_shop();
			$this->load->view('viewshop', $data);
		}
		
		function addshop(){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$error['errors'] = '';;
			$this->load->view('insertshop', $error);
		}
		
		function insert(){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$data['shop_name'] = $this->input->post('shop_name');
			$data['category'] = $this->input->post('category');
			$data['user_id'] = $this->session->userdata('user_id');
			
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|png|jpg';
			//$this->upload->initialize($config);
			$this->load->library('upload', $config);
			
			if($this->upload->do_upload('pro_img')){
				var_dump($this->upload->data());
			}else{
				echo 'Can not upload img';
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
			
			$data['result'] = $this->Shop->shop_edit($id);
			$this->load->view('update_shop', $data);
			
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