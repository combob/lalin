<?php 
	class Brands extends CI_Controller{
		
		function index(){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$this->load->view('master_page/header');
			$this->load->view('master_page/search');
			$this->load->view('master_page/menu');
			$data['result'] = $this->Brand->get_brand();
			$this->load->view('brand/viewbrand', $data);
			$this->load->view('master_page/footer');
		}
		
		function add_brand(){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$this->load->view('master_page/header');
			$this->load->view('master_page/search');
			$this->load->view('master_page/menu');
			$this->load->view('brand/insertbrand');
			$this->load->view('master_page/footer');
		}
		
		function insert(){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$data['brand_name'] = $this->input->post('brand_name');
			$data['alias'] = $this->input->post('alias');
			$data['description'] = $this->input->post('description');
			$data['user_id'] = $this->session->userdata('user_id');
			
			// stored in folder uploads
			$config['upload_path'] = './uploads/logo/';
			// allowed .git/.jpg/.png/.jpeg
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			//$this->upload->initialize($config);
			$this->load->library('upload', $config);
			// check img
			
			if($this->upload->do_upload('logo')){
				//var_dump($this->upload->data());
				$file_info = $this->upload->data();
				$data['logo'] = $file_info['file_name'];
			}else{
				echo 'no';
			}
			
			if($this->Brand->insert_brand($data)){
				redirect('Brands/index');
				echo 'yes';
			}else{
				redirect('Brands/add_brand');
				echo 'no';
			}
			
			if($this->Brand->insert_brand($data)){
				redirect('Brands/index');
				echo 'yes';
			}else{
				redirect('Brands/add_brand');
				echo 'no';
			}
		}
		
		function delete($id){
			if($this->Brand->delete_brand($id)){
				redirect('Brands/index');
			}else{
				echo 'no';
			}
		}
		
		function edit($id){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$this->load->view('master_page/header');
			$this->load->view('master_page/search');
			$this->load->view('master_page/menu');
			$data['result'] = $this->Brand->brand_edit($id);
			$this->load->view('brand/update_brand', $data);
			$this->load->view('master_page/footer');
		}
		
		function do_edit(){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}

			$data['brand_name'] = $this->input->post('brand_name');
			$data['alias'] = $this->input->post('alias');
			$data['description'] = $this->input->post('description');
			$data['user_id'] = $this->session->userdata('user_id');
			$brandId = $this->input->post('brand_id');
			
			// stored in folder uploads
			$config['upload_path'] = './uploads/logo/';
			// allowed .git/.jpg/.png/.jpeg
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			//$this->upload->initialize($config);
			$this->load->library('upload', $config);
			// check img
			
			if($this->upload->do_upload('logo')){
				//var_dump($this->upload->data());
				$file_info = $this->upload->data();
				$data['logo'] = $file_info['file_name'];
			}else{
				echo 'no';
			}
			
			if($this->Brand->brand_update($brandId, $data)){
				redirect('brands/index');
			}else{
				echo 'No';
			}
		}
	}