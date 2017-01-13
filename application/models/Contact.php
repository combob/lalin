<?php
	class Contact extends CI_Model{
		
		function insert_contact($array){
			$this->db->insert('shop_contact', $array);
			return $this->db->insert_id();
		}
	}