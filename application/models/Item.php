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
	}