<?php
class Model_cetak extends CI_Model {

    function getALL($data){
	return $this->db->query( "SELECT *From bimbingan")
	->result();
	}
	 function getALL1($data1){
	$query = $this->db->query("Select * from mahasiswa "); 
	return $query->result();
	}
}

   
?>
