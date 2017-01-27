<?php

class C_user extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}
	function deleteproposal($id_proposal){
	//delete data proposal
		$this->load->model('m_kelola');
        $this->m_kelola->deleteproposal($id_proposal);
		redirect('admin/c_user/kelolaproposal');
	}
	function deletebimbingan($id_bimbingan){
	//delete data bimbingan
		$this->load->model('m_kelola');
        $this->m_kelola->deletebimbingan($id_bimbingan);
		redirect('admin/c_user/kelolabimbingan');
	}
	function deletedata($id_user){
 //delete data user
        $this->m_user->deletedata($id_user);
		redirect('admin/c_user/tampil3');
	}
	//delete data mhs
		function deletedata1($npm){
 		
		$this->load->model('m_user_mhs');
        $this->m_user_mhs->deletedata($npm);
		redirect('admin/c_user/tampil4');
	}
	//delete data dosen
	function deletedata2($nik){
 
 		$this->load->model('m_user_dosen');
        $this->m_user_dosen->deletedata($nik);
		redirect('admin/c_user/tampil2');
	}
	//update data user
	function updatedata($id_user,$username){
        if($_POST==NULL){
            $this->load->model('m_user');
            $data['hasil'] = $this->m_user->filterdata($id_user,$username);
            $this->load->view('admin/v_edit_user',$data);
        }
        else{
            $this->load->model('m_user');
            $this->m_user->updatedata();
            redirect('admin/c_user/tampil');
        }
    }
	//update data mhs
 	function updatedata1($npm){
        if($_POST==NULL){
            $this->load->model('m_user_mhs');
            $data['hasil'] = $this->m_user_mhs->filterdata($npm);
            $this->load->view('admin/v_edit_user_mhs',$data);
        }
        else{
            $this->load->model('m_user_mhs');
            $this->m_user_mhs->updatedata();
            redirect('admin/c_user_mhs/tampil');
        }
    }
	//update data dosen
	function updatedata2($NIK){
        if($_POST==NULL){
            $this->load->model('m_user_dosen');
            $data['hasil'] = $this->m_user_dosen->filterdata($NIK);
            $this->load->view('admin/v_edit_user_dosen',$data);
        }
        else{
            $this->load->model('m_user_dosen');
            $this->m_user_dosen->updatedata();
            redirect('admin/c_user/tampil2');
        }
    }
	
	function tampil(){
        $this->load->model('m_user');
        $data['hasil'] = $this->m_user->bacadata();
        $this->load->view('admin/Untitled-1',$data);
    }
	function menukelolaproposal(){
        $this->load->model('m_kelola');
        $data['hasil'] = $this->m_kelola->bacaproposal();
        $this->load->view('admin/Untitled-2',$data);
    }
	function kelolaproposal(){
        $this->load->model('m_kelola');
        $data['hasil'] = $this->m_kelola->bacaproposal();
        $this->load->view('admin/v_kelola_proposal',$data);
    }
	function menukelolabimbingan(){
        $this->load->model('m_kelola');
        $data['hasil'] = $this->m_kelola->bacabimbingan();
        $this->load->view('admin/Untitled-3',$data);
    }
	function kelolabimbingan(){
        $this->load->model('m_kelola');
        $data['hasil'] = $this->m_kelola->bacabimbingan();
        $this->load->view('admin/v_kelola_bimbingan',$data);
    }
   function tampil3(){
        $this->load->model('m_user');
        $data['hasil'] = $this->m_user->bacadata();
        $this->load->view('admin/v_user2',$data);
    }
	 function tampil4(){
        $this->load->model('m_user_mhs');
        $data['hasil'] = $this->m_user_mhs->bacadata();
        $this->load->view('admin/v_mhs',$data);
    }
	 function tampil6(){
        $this->load->model('m_user');
        $data['hasil'] = $this->m_user->baca();
        $this->load->view('kordinator/v_koor',$data);
    }
	function tampil2(){
        $this->load->model('m_user_dosen');
        $data['hasil'] = $this->m_user_dosen->bacadata();
        $this->load->view('admin/v_dosen',$data);
    }
    function tambahdata(){
 
        if($this->input->post('submit')){
            $this->load->model('m_user');
            $this->m_user->tambah();
            redirect('admin/c_user/tampil3');
        }
              $this->load->view('admin/v_add_user');
    }
	 function tambahdata1(){
 
        if($this->input->post('submit')){
            $this->load->model('m_user_mhs');
            $this->m_user_mhs->tambah();
            redirect('admin/c_user_mhs/tampil');
        }
        $this->load->view('admin/v_add_user_mhs');
    }
	 function tambahdata2(){
 
        if($this->input->post('submit')){
            $this->load->model('m_user_dosen');
            $this->m_user_dosen->tambah();
            redirect('admin/c_user_dosen/tampil');
        }
        $this->load->view('admin/v_add_user_dosen');
    }
}


?>