<?php
	class Item extends CI_Model{
		
		function insert_item($array){
			return $this->db->insert('items', $array);
		}
		
		function get_item(){
			$this->db->from('items');
			$this->db->join('users', 'items.user_id = users.user_id');
			$this->db->order_by('item_id', 'DESC');
			return $this->db->get();
		}
		
		function delete_item($id){
			$this->db->where('item_id', $id);
			return $this->db->delete('items');
		}
		
		function item_edit($id){
			$this->db->from('items');
			$this->db->join('users', 'items.user_id = users.user_id');
			$this->db->where('item_id', $id);
			return $this->db->get()->row();
		}
		
		function item_update($id, $data){
			$this->db->where('item_id', $id);
			return $this->db->update('items', $data); 
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
	}