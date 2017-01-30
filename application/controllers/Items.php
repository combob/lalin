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
			/*$this->form_validation->set_rules('item_name', 'Item Name', 'required');
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
			}else{*/
				
				// get data form input
				$data['item_name'] = $this->input->post('item_name');
				$data['price'] = $this->input->post('price');
				$data['description'] = $this->input->post('description');
				$data['category'] = $this->input->post('category');
				$data['brand'] = $this->input->post('brand');
				$data['shop'] = $this->input->post('shop');
				$data['best_seller'] = $this->input->post('best_seller');
				$data['user_id'] = $this->session->userdata('user_id');
				
				if($this->Item->insert_item($data)){
					$variable['result'] = $this->Item->get_itemId();
					foreach($variable as $key => $value){
						$item_id = $value[0]['item_id'];
					}
					
					$config['upload_path'] = './uploads/thumbnail';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					
					if($this->input->post('add_item')){
						
						if(!empty($_FILES['thumbnail1']['name'])){
							$this->load->library('upload', $config);
							$this->upload->do_upload('thumbnail1');
							$img_one = $this->upload->data();
							//var_dump($img_one = $this->upload->data());
							//echo '<br />';
						}
						
						if(!empty($_FILES['thumbnail2']['name'])){
							$this->load->library('upload', $config);
							$this->upload->do_upload('thumbnail2');
							$img_two = $this->upload->data();
							//var_dump($img_two = $this->upload->data());
							//echo '<br />';
						}
						
						if(!empty($_FILES['thumbnail3']['name'])){
							$this->load->library('upload', $config);
							$this->upload->do_upload('thumbnail3');
							$img_three = $this->upload->data();
							//var_dump($img_three = $this->upload->data());
							//echo '<br />';
						}
						
						if(!empty($_FILES['thumbnail4']['name'])){
							$this->load->library('upload', $config);
							$this->upload->do_upload('thumbnail4');
							$img_four = $this->upload->data();
							//var_dump($img_four = $this->upload->data());die();
						}
						
						$data1 = array(
								'img_one' => $img_one['file_name'],
								'img_two' => $img_two['file_name'],
								'img_three' => $img_three['file_name'],
								'img_four' => $img_four['file_name'],
								'item_id' => $item_id
							);
							
						if($this->Item->img_insert($data1)){
							redirect('Items/index');
						}else{
							echo 'no';
						};
						
						
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
			
			$config['upload_path'] = './uploads/thumbnail';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
				
				if($this->upload->do_upload('thumbnail1')){
					//var_dump($this->upload->data());
					$file_info = $this->upload->data();
					$data1['img_one'] = $file_info['file_name'];
				}
				
				if($this->upload->do_upload('thumbnail2')){
					//var_dump($this->upload->data());
					$file_info = $this->upload->data();
					$data1['img_two'] = $file_info['file_name'];
				}
				
				if($this->upload->do_upload('thumbnail3')){
					//var_dump($this->upload->data());
					$file_info = $this->upload->data();
					$data1['img_three'] = $file_info['file_name'];
				}
				
				if($this->upload->do_upload('thumbnail4')){
					//var_dump($this->upload->data());
					$file_info = $this->upload->data();
					$data1['img_four'] = $file_info['file_name'];
				}
				
				$data1['item_id'] = $itemId;
				$image_id = $itemId;
			
			//var_dump($data1);
			//die();
			
			if($data1 == null){
				echo 'null';
			}
			if($this->Item->item_update($itemId, $data)){
				if($this->Item->item_img_update($image_id, $data1)){
					redirect('items/index');
				}
				
			}else{
				echo 'No';
			}
		}
		
	}