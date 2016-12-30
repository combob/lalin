<?php 
	class Brands extends CI_Controller{
		
		function index(){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$data['result'] = $this->Brand->get_brand();
			$this->load->view('brand/viewbrand', $data);
		}
		
		function add_brand(){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$this->load->view('brand/insertbrand');
		}
		
		function insert(){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$data['brand_name'] = $this->input->post('brand_name');
			$data['alias'] = $this->input->post('alias');
			$data['description'] = $this->input->post('description');
			$data['user_id'] = $this->session->userdata('user_id');
			
			
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
			
			$data['result'] = $this->Brand->brand_edit($id);
			$this->load->view('brand/update_brand', $data);
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
			
			if($this->Brand->brand_update($brandId, $data)){
				redirect('brands/index');
			}else{
				echo 'No';
			}
		}
	}