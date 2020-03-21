<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

    function __construct(){
        parent::__construct();	
        // ini adalah function untuk memuat model bernama m_data
        $this->load->model('m_data');
        $this->load->helper('url');
        }
        // method yang akan diakses saat controller ini diakses
        function index(){
        // ini adalah variabel array $data yang memiliki index admin, berguna untuk menyimpan data 
        $data['admin'] = $this->m_data->tampil_data2()->result();
            // ini adalah baris kode yang berfungsi menampilkan v_admin dan membawa data dari tabel admin
            $this->load->view('header');
		    $this->load->view('sidebar');
		    $this->load->view('v_admin', $data);
		    $this->load->view('footer');
        }

        //ini adalah function untuk tambah yang menampilkan view input admin
        function tambah(){
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('v_inputadmin');
            $this->load->view('footer');
        }

        // ini berfungsi sebagai aksi dari input data admin
        function tambah_admin(){
            // ini adalah baris kode yang berfungsi merekam data yang diinput oleh admin
            $nama_admin = $this->input->post('nama_admin');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
              
            // array yang berguna untuk menjadikannya variabel diatas menjadi 1 variabel yang nantinya akan di sertakan dalam query insert
            $data = array(
                'nama_admin' => $nama_admin,
                'username' => $username,
                'password' => $password,
                
            );
            // method yang berfungsi melakukan insert ke dalam database yang mengirim 2 parameter yaitu sebuah array data dan nama tabel yang dimaksud
            $this->m_data->input_data($data,'admin');
          // kode yang berfungsi mengarahkan pengguna ke link base_url()C_admin/index/ 
          redirect('C_admin/index');
          }

          //function yang berfungsi sebagai method menghapus data berdasarkan id
          function hapus($id){
            // baris kode ini berisi fungsi untuk menyimpan id admin kedalam array $where pada index array bernama 'id'
            $where = array('id_admin' => $id);
            // kode di bawah ini untuk menjalankan query hapus yang berasal dari method hapus_data() pada model m_data
            $this->m_data->hapus_data($where,'admin');
          // kode yang berfungsi mengarahkan pengguna ke link base_url()C_admin/index/
          redirect('C_admin/index');
          }

          //function yang berfungsi sebagai method untuk mengedit data berdasarkan id
          function edit($id){
            // kode yang berfungsi untuk menyimpan id admin ke dalam array $where pada index array benama id
            $where = array('id_admin' => $id);
            // kode di bawah ini adalah kode yang mengambil data admin berdasarkan id dan disimpan kedalam array $data dengan index bernama admin
            $data['admin'] = $this->m_data->edit_data($where,'admin')->result();
            // kode ini berguna untuk memuat v_editadmin dan membawa data hasil query diatas
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('v_editadmin', $data);
            $this->load->view('footer');
           
        }
    
        // baris kode function update adalah method yang dijalankan ketika tombol submit pada form v_editadmin ditekan, atau ketika data telah diupdate
        // method ini berfungsi untuk merekam data, memperbarui baris database yang dimaksud, lalu mengarahkan pengguna ke controller C_admin method index
        function update(){
            // keempat baris kode ini berfungsi untuk merekam data yang dikirim melalui method post
            $id         = $this->input->post('id_admin');
            $nama_admin = $this->input->post('nama_admin');
            $username   = $this->input->post('username');
            $password   = $this->input->post('password');            
         
            // berikut ini adalah array yang berguna untuk menjadikan variabel diatas menjadi 1 variabel yang nantinya akan disertakan ke dalam query update pada model
            $data = array(
                'nama_admin' => $nama_admin,
                'username' => $username,
                'password' => $password              
            );
         
            // kode yang berfungsi menyimpan id admin ke dalam array $where pada index array bernama id
            $where = array(
                'id_admin' => $id
            );
         
            // kode untuk melakukan query update dengan menjalankan method update_data() 
            $this->m_data->update_data($where, $data, 'admin');
            // baris kode yang mengerahkan pengguna ke link base_url()C_admin/index/
            redirect('C_admin/index');
        }
}
