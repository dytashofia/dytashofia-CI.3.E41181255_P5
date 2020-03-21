<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ikanhias extends CI_Controller {

    function __construct(){
        parent::__construct();	
        // ini adalah function untuk memuat model bernama m_data
        $this->load->model('m_data');
        $this->load->helper('url');
        }
        // method yang akan diakses pertama kali saat controller ini diakses
        function index(){
        // ini adalah variabel array $data yang memiliki index data ikan hias, berguna untuk menyimpan data dari tabel ikan 
        $data['ikan'] = $this->m_data->tampil_data()->result();
        // ini adalah baris kode yang berfungsi menampilkan v_ikanhias dan membawa data dari tabel ikan
        $this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_ikanhias', $data);
		$this->load->view('footer');
        }
        // method yang berfungsi untuk menampilkan form input data ikan
        function tambah(){
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('v_inputikanhias');
            $this->load->view('footer');
        }
        // method yang berfungsi untuk menambah data pada tabel ikan
        function tambah_ikan_hias(){
            // ini adalah baris kode yang berfungsi merekam data yang diinput oleh pengguna
            $nama = $this->input->post('nama_ikan');
            $habitat = $this->input->post('habitat');
            $deskripsi = $this->input->post('deskripsi');

            // array yang berguna untuk menjadikan variabel diatas menjadi 1 variabel yang nantinya akan di sertakan dalam query insert
            $data = array(
                  'nama_ikan' => $nama,
                  'habitat' => $habitat,
                  'deskripsi' => $deskripsi,
                  
            );
            // method yang berfungsi melakukan input data ke dalam database yang mengirim 2 parameter yaitu sebuah array data dan nama tabel yang dimaksud
            $this->m_data->input_data($data,'ikan');
          // kode yang berfungsi mengarahkan pengguna ke link base_url()C_ikan/index/ 
          redirect('C_ikanhias/index');
          }

          //merupakan method untuk hapus data berdasarkan id
          function hapus($id){
            // baris kode ini berisi fungsi untuk menyimpan id ikan kedalam array $where pada index array bernama 'id'
            $where = array('id_ikan' => $id);
            // kode di bawah ini untuk menjalankan query hapus yang berasal dari method hapus_data() pada model m_data
            $this->m_data->hapus_data($where,'ikan');
        // kode yang berfungsi mengarakan pengguna ke link base_url()C_ikanhias/index/
        redirect('C_ikanhias/index');
        }

        //merupakan method yang berfungsi untuk mengedit data berdasarkan id  
        function edit($id){
            // kode yang berfungsi untuk menyimpan id ikan ke dalam array $where pada index array benama id
            $where = array('id_ikan' => $id);
            // kode di bawah ini adalah kode yang mengambil data ikan hias berdasarkan id dan disimpan kedalam array $data dengan index bernama ikanhias
            $data['ikan'] = $this->m_data->edit_data($where,'ikan')->result();
            // kode ini memuat view edit dan membawa data hasil query diatas
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('v_editikanhias', $data);
            $this->load->view('footer');
           
        }
    
        // baris kode function update adalah method yang diajalankan ketika tombol submit pada form v_editikanhias ditekan, method ini berfungsi untuk merekam data, 
        // memperbarui baris database yang dimaksud, lalu mengarahkan pengguna ke controller C_ikanhias method index
        function update(){
            // keempat baris kode ini berfungsi untuk merekam data yang dikirim melalui method post
            $id         = $this->input->post('id_ikan');
            $nama       = $this->input->post('nama_ikan');
            $habitat    = $this->input->post('habitat');
            $deskripsi  = $this->input->post('deskripsi');
            
         
            // berikut ini adalah array yang berguna untuk menjadikan variabel diatas menjadi 1 variabel yang nantinya akan disertakan ke dalam query update pada model
            $data = array(
                'nama_ikan' => $nama,
                'habitat' => $habitat,
                'deskripsi' => $deskripsi,
                
            );
         
            // kode yang berfungsi menyimpan id ikan ke dalam array $where pada index array bernama id
            $where = array(
                'id_ikan' => $id
            );
         
            // kode untuk melakukan query update dengan menjalankan method update_data() 
            $this->m_data->update_data($where, $data, 'ikan');
            // baris kode yang mengerahkan pengguna ke link base_url()C_ikanhias/index/
            redirect('C_ikanhias/index');
        }
}