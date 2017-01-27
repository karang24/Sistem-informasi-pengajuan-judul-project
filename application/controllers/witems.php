<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Witems extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_items');		
	}

	public function index(){
		$requesklien = json_decode(file_get_contents ("php://input"));
		header('Content-type: application/json');
		$query = $this->m_items->getItems();
		$json =  json_encode ($query);	
	
		echo $json;
	
	}
		public function index1(){
		$requesklien = json_decode(file_get_contents ("php://input"));
		header('Content-type: application/json');
		$query = $this->m_items->getItems1();
		$json =  json_encode ($query);	
	
		echo $json;
	
	}
	

}
?>