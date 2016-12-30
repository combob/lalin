<?php 
	class Items extends CI_Controller{
		
		function index(){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$data['result'] = $this->Item->get_item();
			$this->load->view('item/viewitem', $data);
		}
		
		function additem(){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$this->load->view('item/insertitem');
		}
		
		function insert(){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$data['item_name'] = $this->input->post('item_name');
			$data['price'] = $this->input->post('price');
			$data['category'] = $this->input->post('category');
			$data['user_id'] = $this->session->userdata('user_id');
			
			if($this->Item->insert_item($data)){
					redirect('Items/index');	
				}else{
					redirect('Items/additem');
					echo 'no';
				}
		}
		
		function delete($id){
			if($this->Item->delete_item($id)){
				redirect('Items/index');
			}
		}
		
		function edit($id){
			if(!$this->session->userdata('user_id')){
				redirect('logins/index');
			}
			
			$data['result'] = $this->Item->item_edit($id);
			$this->load->view('item/update_item', $data);
			
		}
		
		function do_edit(){
			$data['item_name'] = $this->input->post('item_name');
			$data['price'] = $this->input->post('price');
			$data['category'] = $this->input->post('category');
			$data['user_id'] = $this->session->userdata('user_id');
			$itemId = $this->input->post('item_id');
			
			if($this->Item->item_update($itemId, $data)){
				redirect('items/index');
			}else{
				echo 'No';
			}
		}
	}