<?php
session_start();
class C_mahasiswa extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('mahasiswa/index', $data);
	}
	function formtolak(){
	
        $this->load->view('mahasiswa/form_ditolak');
    }
	function formrevisi(){
	
        $this->load->view('mahasiswa/form_revisi');
    }
	function formditerima(){
	
        $this->load->view('mahasiswa/form_diterima');
    }
	function form(){
	
        $this->load->view('mahasiswa/form_');
    }

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth ','index');
	}

	function status($params = null) {
		$status_proposal = $this->session->userdata('status_proposal');
		
		if ($status_proposal == $params) {
			$this->load->view('mahasiswa/form_'.$params);
		} else {
			$this->load->view('mahasiswa/index');
		}
	}
	
}
?>