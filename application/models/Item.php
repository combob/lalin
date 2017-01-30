<?php
	class Item extends CI_Model{
		
		function insert_item($array){
			return $this->db->insert('items', $array);
		}
		
		function get_item(){
			$this->db->from('items');
			$this->db->join('users', 'items.user_id = users.user_id');
			$this->db->join('item_images', 'item_images.item_id = items.item_id');
			$this->db->order_by('items.item_id', 'DESC');
			return $this->db->get();
		}
		
		function delete_item($id){
			$this->db->where('item_id', $id);
			return $this->db->delete('items');
		}
		
		function item_edit($id){
			
			$this->db->from('items');
			$this->db->join('users', 'items.user_id = users.user_id');
			$this->db->join('item_images', 'item_images.item_id = items.item_id');
			$this->db->where('items.item_id', $id);
			return $this->db->get()->row();
		}
		
		function item_update($id, $data){
			
			$this->db->where('item_id', $id);
			return $this->db->update('items', $data); 
		}
		
		function item_img_update($image_id, $data1){
			$this->db->where('item_id', $image_id);
			return $this->db->update('item_images', $data1);
		}
		
		function get_brands(){
			//$this->db->select('brand');
			$this->db->from('brand');
			$this->db->where('brand.status', 1);
			return $this->db->get();
			
		}
		
		function get_categories(){
			
			$this->db->from('categories');
			$this->db->where('categories.status', 1);
			return $this->db->get();
		}
		
		function get_shop(){
			$this->db->from('shops');
			$this->db->where('shops.status', 1);
			return $this->db->get();
		}
		
		public function insert_image($data1 = array()){
		$insert = $this->db->insert_batch('images_item',$data1);
		return $insert?true:false;
		}
		
		function img_insert($array){
			return $this->db->insert('item_images', $array);
		}
		
		function get_itemId(){
			$this->db->from('items');
			$this->db->order_by('item_id', 'DESC');
			$this->db->limit(1);
			return $this->db->get()->result_array();
		}
		
		// use for interface
		
		//get item in category shose
		function get_item_shoes(){
			$this->db->from('items');
			$this->db->join('item_images', 'item_images.item_id = items.item_id');
			$this->db->where('items.status', 1);
			$this->db->where('items.category', 'shoes');
			return $this->db->get();
		}
		
		//get item in category bage
		function get_item_bag(){
			$this->db->from('items');
			$this->db->join('item_images', 'item_images.item_id = items.item_id');
			$this->db->where('items.category', 'bags');
			$this->db->where('items.status', 1);
			return $this->db->get();
		}
		
		//get best seller
		function get_item_bestSeller(){
			$this->db->from('items');
			$this->db->join('item_images', 'item_images.item_id = items.item_id');
			$this->db->where('items.best_seller', '1');
			$this->db->where('items.status', 1);
			return $this->db->get();
		}
		
		//detail
		function detail($id){
			
			$this->db->from('items');
			$this->db->join('item_images', 'item_images.item_id = items.item_id');
			$this->db->where('items.item_id', $id);
			$data = $this->db->get();
			return $data->result();
		}
		
	}