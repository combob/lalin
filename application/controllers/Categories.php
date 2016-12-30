<?php 
	class Categories extends CI_Controller{
		
		function index(){
			$data['result'] = $this->Category->get_category();
			$this->load->view('view_category', $data);
		}
		
		function add_category(){
			$error['errors'] = '';;
			$this->load->view('insert_category', $error);
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
			$data['result'] = $this->Category->category_edit($id);
			$this->load->view('update_category', $data);
			
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