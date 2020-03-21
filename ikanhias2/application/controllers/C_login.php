<?php 
	// Class login sebagai controller yang berfungsi untuk mengurus segala sesuatu terkait dengan Login, 
	//  mulai dari cek ketersediaan akun, session, logout dan lain-lain
class C_login extends CI_Controller{
 
	// fungsi yang akan dijalankan pertama kali dan dijalankan otomatis
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
    }

    function index(){
        // berikut adalah baris kode yang berfungsi untuk menampilkan v_login
        $this->load->view('header');
        $this->load->view('v_login');
        $this->load->view('footer');
    }
    
    function aksi_login(){
		// kode untuk merekam data yang dikirim melalui post
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// berfungsi untuk menyimpan data pada array untuk nantinya diproses ke dalam model
		$where = array(
			'username' => $username,
			'password' => $password
			);
		// berfungsi untuk menjalankan method cek_login pada model m_login
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			//  berfungsi untuk membuat session dengan index 'nama' yang berisi username dan 'status' berisi login
			$data_session = array(
				'username' => $username,
				'status' => "login"
				);
			// menambahkan sebuah session userdata berisi array diatas
			$this->session->set_userdata($data_session);
            
			redirect('C_dashboard');
 
		}else{
			// echo "Username dan password salah !"; (merupakan pesan kesalahan)
			$this->load->view('header');
			$this->load->view('v_gagallogin');
		}
    }
    
    function logout(){
		//  merupakan baris kode yang akan menghapus session yang ada
		$this->session->sess_destroy();
		//  merupakan baris kode yang mengarahkan untuk ke controller login
		redirect(base_url('C_login'));
	}
}