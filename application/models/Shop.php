<?php
	class Shop extends CI_Model{
		
		function insert_shop($array){	
			return $this->db->insert('shops', $array);
		}
		
		function get_shop(){
			$this->db->from('shops');
			$this->db->join('users', 'shops.user_id = users.user_id');
			$this->db->order_by('shop_id', 'DESC');
			return $this->db->get();
			
		}
		
		function delete_shop($id){
			$this->db->where('shop_id', $id);
			return $this->db->delete('shops');
		}
		
		function shop_edit($id){
			$this->db->from('shops');
			$this->db->join('users', 'shops.user_id = users.user_id');
			$this->db->join('shop_contact', 'shops.shop_id = shop_contact.shop_id');
			$this->db->where('shops.shop_id', $id);
			return $this->db->get()->row();
		}
		
		function shop_update($id, $data){
			
			$this->db->where('shop_id', $id);
			return $this->db->update('shops', $data);
		}
		
		function shop_contact_update($con_id, $data1){
			$this->db->where('shop_id', $con_id);
			return $this->db->update('shop_contact', $data1);
		}
		
		function get_categories(){
			$this->db->from('categories');
			$this->db->where('categories.status', 1);
			return $this->db->get();
		}
		
		function get_shopid(){
			$this->db->from('shops');
			$this->db->order_by('shop_id', 'DESC');
			$this->db->limit(1);
			return $this->db->get()->result_array();
			
		}
	}