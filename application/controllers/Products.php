<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	function add_product()
	{
		$this->load->view('add_product');
	}
}