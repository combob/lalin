$data1 = array();
					if($this->input->post('add_item') && !empty($_FILES['thumbnail']['name'])){
						$filesCount = count($_FILES['thumbnail']['name']);
						for($i = 0; $i < $filesCount; $i++){
							$_FILES['thumbnails']['name'] = $_FILES['thumbnail']['name'][$i];
							$_FILES['thumbnails']['type'] = $_FILES['thumbnail']['type'][$i];
							$_FILES['thumbnails']['tmp_name'] = $_FILES['thumbnail']['tmp_name'][$i];
							$_FILES['thumbnails']['error'] = $_FILES['thumbnail']['error'][$i];
							$_FILES['thumbnails']['size'] = $_FILES['thumbnail']['size'][$i];
							
							$config['upload_path'] = './uploads/thumbnail/';
							$config['allowed_types'] = 'gif|jpg|png|jpeg';
							
							$this->load->library('upload', $config);

							if($this->upload->do_upload('thumbnails')){
								$file_info = $this->upload->data();
								$uploadData[$i]['thumbnail'] = $file_info['file_name'];
								$uploadData[$i]['created'] = date("Y-m-d H:i:s");
								$uploadData[$i]['modified'] = date("Y-m-d H:i:s");
								$uploadData[$i]['item_id'] = $item_id;
								
							}
						}
						if(!empty($uploadData)){
							
							// insert files data into the database
							$insert = $this->Item->insert_image($uploadData);
							redirect('Items/index');
							$statusMsg = $insert?'File uploaded successfully.':'some pronlem occurred, Please try again.';
							$this->session->set_flashdata('statusMsg', $statusMsg);
							
						}

					}