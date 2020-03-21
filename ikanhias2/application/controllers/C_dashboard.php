<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	// Class dashboard adalah controller untuk menampilkan isi halaman utama 
class C_dashboard extends CI_Controller {
	// method ini adalah method yang berjalan pertama kali
	public function __construct()
	{
		parent::__construct();
	}
	// method yang digunakan untuk memuat halaman utama yaitu dashboard
	public function index()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('v_dashboard', $data);
		$this->load->view('footer');		
	}
}
