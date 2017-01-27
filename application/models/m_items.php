<?php
class M_items extends CI_Model {

	function __construct(){
        parent::__construct();
    }

	
	function getItems(){	
		$this->db->select("*");
		$this->db->from('bimbingan');				
		$query = $this->db->get();		
		return $query->result();			
	}
	function getItems1(){	
		$this->db->select("*");
		$this->db->from('proposal');				
		$query = $this->db->get();		
		return $query->result();			
	}	
}
?>