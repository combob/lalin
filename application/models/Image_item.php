<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Image_item extends CI_Model{
	
	public function insert_image($data = array()){
		$insert = $this->db->insert_batch('images_item',$data);
		return $insert?true:false;
	}
	
}
