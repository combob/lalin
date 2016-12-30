<?php
	class Category extends CI_Model{
		
		function insert_category($array){	
			return $this->db->insert('categories', $array);
		}
		
		function get_category(){
			$this->db->from('categories');
			$this->db->join('users', 'categories.user_id = users.user_id');
			$this->db->order_by('cate_id', 'DESC');
			return $this->db->get();
		}
		
		function delete_category($id){
			$this->db->where('cate_id', $id);
			return $this->db->delete('categories');
		}
		
		function category_edit($id){
			$this->db->from('categories');
			$this->db->join('users', 'categories.user_id = users.user_id');
			$this->db->where('cate_id', $id);
			return $this->db->get()->row();
		}
		
		function category_update($id, $data){
			$this->db->where('cate_id', $id);
			return $this->db->update('categories', $data);
		}
	}