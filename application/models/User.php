<?php
class User extends CI_Model{
	
	function check_account($gmail, $password){
		
		$this->db->where('gmail', $gmail);
		$this->db->where('password', $password);
		return $this->db->get('users');
		
	}
	
	function get_current_user($id){
		
		$this->db->where('user_id', $id);
		return $this->db->get('users')->row();
		
	}
	
	function adduser($array){
		
		return $this->db->insert('users', $array);
		
	}
}






