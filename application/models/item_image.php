<?php
	class item_image extends CI_Model{
		
		function img_insert(){
			return $this->db->insert('item_images', $array);
		}
		
	}