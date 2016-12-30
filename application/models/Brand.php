<?php
	class Brand extends CI_Model{
		
		function insert_brand($array){
			return $this->db->insert('brand', $array);
		}
		
		function get_brand(){
			$this->db->from('brand');
			$this->db->join('users', 'brand.user_id = users.user_id');
			$this->db->order_by('brand_id', 'DESC');
			return $this->db->get();
		}
		
		function delete_brand($id){
			$this->db->where('brand_id', $id);
			return $this->db->delete('brand');
		}
		
		function brand_edit($id){
			$this->db->from('brand');
			$this->db->join('users', 'brand.user_id = users.user_id');
			$this->db->where('brand_id', $id);
			return $this->db->get()->row();
		}
		
		function brand_update($id, $data){
			$this->db->where('brand_id', $id);
			return $this->db->update('brand', $data);
		}
	}