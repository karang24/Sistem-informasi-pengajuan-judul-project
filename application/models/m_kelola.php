<?php
class M_kelola extends CI_Model {
	function deleteproposal($id_proposal){
		
		$this->db->where('id_proposal', $id_proposal);
		$this->db->delete('proposal'); 
	}
	
	function bacaproposal(){
        $baca = $this->db->get('proposal');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function deletebimbingan($id_bimbingan){
		$this->db->where('id_bimbingan', $id_bimbingan);
		$this->db->delete('bimbingan'); 
	}
	
	function bacabimbingan(){
        $baca = $this->db->get('bimbingan');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}
?>