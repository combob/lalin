<?php 
	class Items extends CI_Controller{
		
		function index(){
			// can't not access if don't login
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$this->load->view('master_page/header');
			$this->load->view('master_page/search');
			$this->load->view('master_page/menu');
			$data['result'] = $this->Item->get_item();
			$this->load->view('item/viewitem', $data);
			$this->load->view('master_page/footer');
		}
		
		function additem(){
			// can't not access if don't login
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			// get data from DB 
			$data['result'] = $this->Item->get_brands();
			$data['posts'] = $this->Item->get_categories();
			$data['shop'] = $this->Item->get_shop();
			
			$this->load->view('master_page/header');
			$this->load->view('master_page/search');
			$this->load->view('master_page/menu');
			$this->load->view('item/insertitem',$data);
			$this->load->view('master_page/footer');
		}
		
		function insert(){
			// can't not access if don't login
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			//form validaton 
			$this->form_validation->set_rules('item_name', 'Item Name', 'required');
			$this->form_validation->set_rules('price', 'Price', 'required');
			$this->form_validation->set_rules('category', 'Category', 'required');
			$this->form_validation->set_rule('brand', 'Brand', 'required');
			$this->form_validation->set_rule('shop', 'Shop', 'required');
			
			// check form validaton
			if($this->form_validation->run() == False){
				$data['result'] = $this->Item->get_brands();
				$data['posts'] = $this->Item->get_categories();
				$data['shop'] = $this->Item->get_shop();
				
				$this->load->view('master_page/header');
				$this->load->view('master_page/search');
				$this->load->view('master_page/menu');
				$this->load->view('item/insertitem',$data);
				$this->load->view('master_page/footer');
			}else{
				
				// get data form input
				$data['item_name'] = $this->input->post('item_name');
				$data['price'] = $this->input->post('price');
				$data['description'] = $this->input->post('description');
				$data['category'] = $this->input->post('category');
				$data['brand'] = $this->input->post('brand');
				$data['shop'] = $this->input->post('shop');
				$data['user_id'] = $this->session->userdata('user_id');
				
				// stored in folder uploads
				$config['upload_path'] = './uploads/thumbnail/';
				// allowed .git/.jpg/.png
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				//$this->upload->initialize($config);
				$this->load->library('upload', $config);
				
				// check img
				if($this->upload->do_upload('thumbnail')){
					$file_info = $this->upload->data();
					$data['thumbnail'] = $file_info['file_name'];
				}else{
					echo 'no';
				}
				
				// check data
				if($this->Item->insert_item($data)){
						redirect('Items/index');	
					}else{
						redirect('Items/additem');
						echo 'no';
					}
			}
			
		}
		
		function delete($id){
			if($this->Item->delete_item($id)){
				redirect('Items/index');
			}
		}
		
		function edit($id){
			// can't not access if don't login
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$this->load->view('master_page/header');
			$this->load->view('master_page/search');
			$this->load->view('master_page/menu');
			
			$data['brand'] = $this->Item->get_brands();
			$data['category'] = $this->Item->get_categories();
			$data['shop'] = $this->Item->get_shop();
			$data['result'] = $this->Item->item_edit($id);
			
			//var_dump($data['category']);
			//die();
			
			$this->load->view('item/update_item', $data);
			$this->load->view('master_page/footer');
			
		}
		
		function do_edit(){
			$data['item_name'] = $this->input->post('item_name');
			$data['price'] = $this->input->post('price');
			$data['category'] = $this->input->post('category');
			$data['shop'] = $this->input->post('shop');
			$data['brand'] = $this->input->post('brand');
			$data['user_id'] = $this->session->userdata('user_id');
			$itemId = $this->input->post('item_id');
			
			//var_dump($data['category']);
			//die();
			if($this->Item->item_update($itemId, $data)){
				redirect('items/index');
			}else{
				$data['item_name'] = $this->input->post('item_name');
				$data['price'] = $this->input->post('price');
				$data['category'] = $this->input->post('category');
				$data['user_id'] = $this->session->userdata('user_id');
				$itemId = $this->input->post('item_id');
			}
		}
		
	}