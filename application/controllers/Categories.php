<?php 
	class Categories extends CI_Controller{
		
		function index(){
			$this->load->view('master_page/header');
			$this->load->view('master_page/search');
			$this->load->view('master_page/menu');
			$data['result'] = $this->Category->get_category();
			$this->load->view('category/view_category', $data);
			$this->load->view('master_page/footer');
		}
		
		function add_category(){
			$this->load->view('master_page/header');
			$this->load->view('master_page/search');
			$this->load->view('master_page/menu');
			$error['errors'] = '';
			$this->load->view('category/insert_category', $error);
			$this->load->view('master_page/footer');
		}
		
		function insert(){
			$data['category_name'] = $this->input->post('category_name');
			$data['alias'] = $this->input->post('alias');
			$data['description'] = $this->input->post('description');
			$data['user_id'] = $this->session->userdata('user_id');
			
			if($this->Category->insert_category($data)){
					redirect('Categories/index');	
				}else{
					redirect('Categories/add_category');
				}
		}
		
		function delete($id){
			if($this->Category->delete_category($id)){
				redirect('Categories/index');
			}
		}
		
		function edit($id){
			$this->load->view('master_page/header');
			$this->load->view('master_page/logo');
			$data['result'] = $this->Category->category_edit($id);
			$this->load->view('category/update_category', $data);
			$this->load->view('master_page/footer');
			
		}
		
		function do_edit(){
			$data['category_name'] = $this->input->post('category_name');
			$data['alias'] = $this->input->post('alias');
			$data['description'] = $this->input->post('description');
			$data['user_id'] = $this->session->userdata('user_id');
			$cateId = $this->input->post('cate_id');
			
			if($this->Category->category_update($cateId, $data)){
				redirect('categories/index');
			}else{
				echo 'No';
			}
		}
	}