<?php 
	class Interfaces extends CI_Controller{
		
		function index(){
			$data['shoes'] = $this->Item->get_item_shoes();
			$data['bag'] = $this->Item->get_item_bag();
			$data['best_seller'] = $this->Item->get_item_bestSeller();
			$this->load->view('interface/index.html', $data);
		}
		
		function details($id){
			$data['details'] = $this->Item->detail($id);
			$this->load->view('interface/detail.html', $data);
		}
	}