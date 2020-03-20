# dytashofia-CI.3.E41181255_P5
## Langkah – langkah pembuatan web daftar ikan hias

#### Persiapan yang diperlukan :
1.	Aplikasi server,  menggunakan xampp
2.	Text editor, bisa menggunakan visual studio code ataupun sublime
3.	File codeigniter, apabila belum mempunyai maka bisa download di https://codeigniter.com/download

#### Instalasi CodeIgniter
Setelah codeigniter terdownload, langkah selanjutnya melakukan instalasi dengan mengekstrak file codeigniter, kemudian copy file ke dalam htdocs dan ubah nama file sesuai dengan project yang akan kita buat, disini diberi nama ikanhias. Kemudian cek di browser dengan localhost/ikanhias/index. Apabila muncul welcome codeigniter berarti codeigniter sudah terinstall.

#### Penggunaan Template SB-Admin Bootstrap
Untuk penggunaan template, kita download dulu template SB-Admin Bootstrap pada https://startbootstrap.com/templates/sb-admin/ dan ekstrak file tersebut. Untuk menggunakannya copy file yang bernama vendor, css, js. Untuk file vendor ubah menjadi assets, copy file index.html sebagai templatenya(dashboard), kemudian sesuaikan script js dan css-nya, serta sesuaikan path gambarnya.

#### Pembuatan WEB
Karena kita menggunakan template, maka pisahkan masing-masing bagian header, footer, dan sidebar agar kita mudah dalam memanggilnya. Buat file pada view dengan nama header.php, footer.php, dan sidebar.php

Header.php
``` <!-- Ini adalah sebuah file view untuk header -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  
    <!-- Icon -->
    <!-- untuk mengakses gambar dari folder assets/img -->
  <link rel="shortcut icon" href="<?php echo base_url().'assets/img/nemo.png'; ?>" /> 

<!-- Tittle -->
  <title>Daftar Ikan Hias</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i');?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin-2.css" rel="stylesheet');?>">
  <link href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet');?>">

</head>
```

Sidebar.php
``` 
<!-- Ini adalah sebuah file view untuk sidebar -->
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() . 'C_dashboard'; ?>"> 
        <div class="sidebar-brand-icon">
          <i class="fas fa-ribbon"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ikan Hias</div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('C_dashboard')?>">
          <i class="fas fa-fw fa-h-square"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Data
      </div>
      <!-- Nav Item - Data Admin -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('C_admin')?>">
          <i class="fas fa-fw fa-address-card"></i>
          <span>Data Admin</span></a>
      </li>
      <!-- Nav Item - Data Ikan -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('C_ikanhias')?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data Ikan Hias</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">         
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <!-- class untuk sesi login username -->
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata("username"); ?></span>
                <i class="fas fa-user"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
              <!-- modal untuk logout -->
              <a class="dropdown-item" href="<?= base_url('C_login');?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar --> 
  ```
  
Footer.php
 ```
 <!-- Ini adalah sebuah file view untuk footer -->
 <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda yakin akan keluar dari halaman ini?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">Tekan tombol logout dibawah jika Anda ingin keluar!</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
          <a class="btn btn-danger" href="<?= base_url('C_login');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/js/sb-admin-2.min.js');?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js');?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js');?>"></script>
  <script src="<?php echo base_url('assets/js/demo/chart-pie-demo.js');?>"></script>
```

Ketika sudah dipisahkan, maka untuk memanggil dashboatd, maka buat controller dengan nama C_dashboard, kemudian isi dengan script berikut :
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_dashboard extends CI_Controller {
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
```
#### DATABASE
Dalam pembuatannya web ini memiliki database yang bernama fish yang terdiri dari 2 tabel yaitu admin dan ikan
Database kita panggil melalui config/database.php
```
'username' => 'root',
    'password' => '',
    'database' => 'fish', //merupakan nama database yang dipakai
    'dbdriver' => 'mysqli',
```
load database dalam library : config/autoload.php
```
$autoload['libraries'] = array('database’);
```
Lalu kita isikan url di config/config.php (disesuaikan dengan nama project yang kita buat)
```
$config['base_url'] = 'http://localhost/ikanhias/';
```
Load url ke dalam helper 
```
$autoload['helper'] = array('url');
```

#### LOGIN
Untuk membuat login maka kita memrlukan session yang diload dalam libraries, sehingga dalam libraries menjadi
```
$autoload['libraries'] = array('database', 'session');
```
Buat controller login dengan nama C_login
```
<?php 
class C_login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }
    function index(){
        $this->load->view('header');
        $this->load->view('v_login');
        $this->load->view('footer');
    }  
    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
            );
        $cek = $this->m_login->cek_login("admin",$where)->num_rows();
        if($cek > 0){
            $data_session = array(
                'username' => $username,
                'status' => "login"
                );
            $this->session->set_userdata($data_session);            
            redirect('C_dashboard');
        }else{
            $this->load->view('header');
            $this->load->view('v_gagallogin');
        }
    }  
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('C_login'));
    }
}
```
Lalu kita buat model dengan nama m_login yang berfungsi untuk memeriksa dan melanjutkan apakah terdapat data pada tabel admin sebagai login
``` 
<?php 
class M_login extends CI_Model{
        
    function cek_login($table,$where){      
        return $this->db->get_where($table,$where);
    }   
}
```
Untuk menampilkan loginnya maka kita perlu membuat view login pada view/v_login, didalamnya kita form untuk login denga script berikut :
```
<body class="bg-gradient-dark">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome To The Web!</h1>
                  </div>
                  <form action="<?php echo base_url('C_login/aksi_login'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" autocomplete="off">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
```
Selain view login kita juga buat view untu gagal login dengan nama v_gagallogin, view ini berfungsi untuk menampilkan pesan apabila salah menginputkan username dan password
```
<body class="bg-gradient-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                  </div>
                  <form action="<?php echo base_url('C_login/aksi_login'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" autocomplete="off">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                    <div class="text-center">
                    <h1 class="h4 text-danger">Username atau password salah!</h1>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
```

#### CRUD (CREATE, READ, UPDATE, DELETE)
Untuk crud maka kita membutuhkan sebuah model berfungsi untuk menuliskan semua code yang berhubungan dengan query
```
<?php 
//  berfungsi untuk menuliskan semua code yang berhubungan dengan query
class M_data extends CI_Model{

  // function untuk mengambil keseluruhan baris data dari tabel ikan
  public function tampil_data(){
    return $this->db->get('ikan');
    }
    
    public function tampil_data2(){
      return $this->db->get('admin');
      }
    // method untuk menambah data ke dalam database
    function input_data($data,$table){
      $this->db->insert($table,$data);
      }
    // method untuk menghapus data ke dalam database
    function hapus_data($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
    }
    // method untuk mengedit data ke dalam database
    function edit_data($where,$table){    
      return $this->db->get_where($table,$where);
  }
    // method untuk mengupdate data ke dalam database 
    function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
} 
}
```
Dalam web ini terdapat 2 CRUD, yaitu terletak pada admin dan data ikan
##### 1.	ADMIN
Untuk crud pada admin kita membutuhkan sebuah controller, sehingga dibuat controller dengan nama c_admin yang berisi fungsi untuk menampilkan, menambah, mengupdate, dan menghapus data. 
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
    function __construct(){
        parent::__construct();  
        $this->load->model('m_data');
        $this->load->helper('url');
        }
		
	  //funtion yang berfungsi untuk menampilkan data admin
        function index(){
        $data['admin'] = $this->m_data->tampil_data2()->result();
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
            $nama_admin = $this->input->post('nama_admin');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
              
            $data = array(
                'nama_admin' => $nama_admin,
                'username' => $username,
                'password' => $password,);
            $this->m_data->input_data($data,'admin');
          redirect('C_admin/index');
          }

	    // function yang berfungsi untuk menghapus data berdasarkan
          function hapus($id){
            $where = array('id_admin' => $id);
            $this->m_data->hapus_data($where,'admin');
          redirect('C_admin/index');
          }

          function edit($id){
            // kode yang berfungsi untuk menyimpan id admin ke dalam array $where pada index array benama id
            $where = array('id_admin' => $id);
            // kode di bawah ini adalah kode yang mengambil data admin berdasarkan id dan disimpan kedalam array $data dengan index bernama admin
            $data['admin'] = $this->m_data->edit_data($where,'admin')->result();
            // kode ini memuat v_editadmin dan membawa data hasil query diatas
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('v_editadmin', $data);
            $this->load->view('footer'); 
        }
    
        // baris kode function update adalah method yang diajalankan ketika tombol submit pada form v_editadmin ditekan, 
        function update(){
            $id         = $this->input->post('id_admin');
            $nama_admin = $this->input->post('nama_admin');
            $username   = $this->input->post('username');
            $password   = $this->input->post('password');            
         
            $data = array(
                'nama_admin' => $nama_admin,
                'username' => $username,
                'password' => $password              
            );
         
            $where = array(
                'id_admin' => $id
            );
            $this->m_data->update_data($where, $data, 'admin');
            redirect('C_admin/index');
        }
}
```
##### Menampilkan data admin
Untuk menampilkan data admin maka perlu membuat view dengan nama v_admin
```
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Data Admin</h1>
<a href="<?=base_url('C_admin/tambah')?>" class="btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
      <i class="fas fa-plus"></i>
    </span>
  <span class="text">Tambah Data Admin</span>
</a>
<br><br>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Admin</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama Admin</th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
          </tr>
        </thead>    
        <tbody>
        <?php 
        foreach ($admin as $ad ) { ?>
          <tr>
            <td><?=$ad->nama_admin?></td> 
            <td><?=$ad->username?></td>            
            <td><?=$ad->password?></td>
            <td>
              <a class="btn btn-primary" href="<?php echo base_url('C_admin/edit/'. $ad>id_admin); ?>">
<i class="fas fa-pencil-alt"></i>
       <a class="btn btn-danger" href="<?php echo base_url('C_admin/hapus/'. $ad->id_admin); ?>">
<i class="fas fa-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
          </tbody>
        </table>
        </div>
    </div>
    </div>
</div>
</div>
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Website 2019</span>
          </div>
        </div>
      </footer>
    </div>
  </div>
```
##### Insert Data Admin
Karena telah dibuat method untuk fungsi tambah data, maka untuk menampilkan kita buat view dengan nama v_inputadmin, yang berisi script :
```
<div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Admin</h1>
            </div>
            <div class="row">
            </div>
            <div class="col-lg-10">
 <form action="<?php echo base_url() . 'C_admin/tambah_admin'; ?>" method="post">
                    <div class="form-group">
                        <label for="nama_admin"> Nama Admin : </label>
               <input type="text" class="form-control form-control-user" id="nama_admin" name="nama_admin" placeholder="Masukan Nama Admin" title="Isikan data dengan benar" required autocomplete="off"">
                    </div>
                    <div class="form-group">
                        <label for="username"> Username : </label>
                        <input type="username" class="form-control form-control-user" id="username" name="username" placeholder="Masukan Username" title="Isikan data dengan benar" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="password"> Password : </label>
                        <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Masukkan Password" title="Isikn data dengan benar" required autocomplete="off">
                    </div>
                    <hr>
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Tambah</button>
                </form>
                <br>
                <div class="text-center">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                        </div>
                    </div>
                </div>
            </div>
```
##### Update data admin
Dalam controller admin terdapat dua fungsi yaitu edit dan update.  Fungsi edit berguna untuk mengedit data, dan untuk menampilkannya membutuhkan sebuah view untuk menampilkan formnya, maka dibuat view dengan nama v_editadmin
```
<div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Data Admin</h1>
            </div>
            <div class="row">
            </div>
            <div class="col-lg-10">
            <?php 
            foreach ($admin as $tb) { ?>
       <form action="<?php echo base_url() . 'C_admin/update'; ?>" method="post">

                    <div class="form-group">
                        <label for="nama_admin"> Nama Admin : </label>
                        <input type="hidden" class="form-control form-control-user"  id="id_admin" name="id_admin" value="<?php echo $tb->id_admin ?>">
                        <input type="text" class="form-control form-control-user" id="nama_admin" name="nama_admin" 
                        placeholder="Masukan nama admin yang akan diubah"value="<?php echo $tb->nama_admin ?>">
                    </div>
                    <div class="form-group">
                        <label for="username"> Username : </label>
                        <input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan username yang akan diubah" 
                        value="<?php echo $tb->username ?>">
                    </div>
                    <div class="form-group">
                        <label for="password"> Password : </label>
                        <input type="password" name="password" class="form-control form-control-user" placeholder="Masukkan password yang akan diubah" 
                        value="<?php echo $tb->password ?>">
                    </div>
                    <hr>
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Simpan</button>
                </form>
                <?php } ?>
                <br>
                <div class="text-center">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                        </div>
                    </div>
                </div>
            </div>
```
Untuk fungsi update tidak memerlukan form, karena redirect (dikembalikan ke fungsi index)


##### Delete data admin
Berdasarkan controller yang dibuat, fungsi hapus dilakukan untuk menghapus berdasarkan id dan tidak memerlukan form, karena redirect (dikembalikan ke fungsi index)

2.	DATA IKAN
Untuk crud data kita membutuhkan sebuah controller, sehingga dibuat controller dengan nama C_ikanhias yang berisi fungsi untuk menampilkan, menambah, mengupdate, dan menghapus data ikan. 
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_ikanhias extends CI_Controller {

    function __construct(){
        parent::__construct();  
        $this->load->model('m_data');
        $this->load->helper('url');
        }
        // method yang akan diakses pertama kali saat controller ini diakses
        function index(){
        $data['ikan'] = $this->m_data->tampil_data()->result();
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
            $nama = $this->input->post('nama_ikan');
            $habitat = $this->input->post('habitat');
            $deskripsi = $this->input->post('deskripsi');

            $data = array(
                  'nama_ikan' => $nama,
                  'habitat' => $habitat,
                  'deskripsi' => $deskripsi,
                  
            );
            $this->m_data->input_data($data,'ikan');
          // kode yang berfungsi mengarahkan pengguna ke link base_url()C_ikan/index/ 
          redirect('C_ikanhias/index');
          }

	   //berfugsi untuk menghapus data ikan
          function hapus($id){
            $where = array('id_ikan' => $id);
            $this->m_data->hapus_data($where,'ikan');
        redirect('C_ikanhias/index');
        }

	    //berfungsi untuk melakukan edit data
          function edit($id){
            $where = array('id_ikan' => $id);
            $data['ikan'] = $this->m_data->edit_data($where,'ikan')->result();
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('v_editikanhias', $data);
            $this->load->view('footer');
           
        }
    
               // memperbarui baris database yang dimaksud, lalu mengarahkan pengguna ke controller C_ikanhias method index
        function update(){
            // keempat baris kode ini berfungsi untuk merekam data yang dikirim melalui method post
            $id         = $this->input->post('id_ikan');
            $nama       = $this->input->post('nama_ikan');
            $habitat    = $this->input->post('habitat');
            $deskripsi  = $this->input->post('deskripsi');
                     
            $data = array(
                'nama_ikan' => $nama,
                'habitat' => $habitat,
                'deskripsi' => $deskripsi,
                
            );
            $where = array(
                'id_ikan' => $id
            );
         
     // kode untuk melakukan query update dengan menjalankan method update_data()
            $this->m_data->update_data($where, $data, 'ikan');
            redirect('C_ikanhias/index');
        }
}
```
##### Menampilkan data ikan
Berdasarkan controller yang telah dibuat terdapat fungsi index, fungsi index berguna untuk menampilkan data dari v_ikanhias, 
```
<!-- Ini adalah file view data tabel ikan -->
<!-- Begin -->
<div class="container-fluid">

<!-- Header -->
<h1 class="h3 mb-2 text-gray-800">Data Ikan Hias</h1>
<a href="<?=base_url('C_ikanhias/tambah')?>" class="btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
      <i class="fas fa-plus"></i>
    </span>
  <span class="text">Tambah Data Ikan Hias</span>
</a>
<br><br>

<!-- Tabel Data Ikan -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Ikan Hias</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama Ikan</th>
            <th>Habitat</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Nama Ikan</th>
            <th>Habitat</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
        <?php 
        foreach ($ikan as $tb ) { ?>
          <tr>
            <td><?=$tb->nama_ikan?></td>
            <td><?=$tb->habitat?></td>
            <td><?=$tb->deskripsi?></td>
            <td>
              <a class="btn btn-primary" href="<?php echo base_url('C_ikanhias/edit/'. $tb->id_ikan); ?>">
                <i class="fas fa-pencil-alt"></i></a>
              <a class="btn btn-danger" href="<?php echo base_url('C_ikanhias/hapus/'. $tb->id_ikan); ?>">
                <i class="fas fa-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
          </tbody>
        </table>
        </div>
    </div>
    </div>

</div>

</div>
      <!-- Batas konten terakhir -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
```


##### Insert data ikan
Berdasarkan controller yang sudah dibuat terdapat 2 method tambah, yaitu tambah() dan tambah_ikan_hias()
Metod tambah berfungsi untuk menampilkan form tambah data ikan, sehingga perlu membuat view, maka dibuat view dengan nama v_inputikanhias, yang berisi :
```
<div class="container-fluid">
            <!-- Page Heading -->
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Data Ikan Hias</h1>
            </div>
            <div class="row">
            </div>
            <div class="col-lg-10">
                <form action="<?php echo base_url() . 'C_ikanhias/tambah_ikan_hias'; ?>" method="post">
                    <div class="form-group">
                        <label for="nama_ikan"> Nama Ikan Hias : </label>
                        <input type="text" class="form-control form-control-user" id="nama_ikan" name="nama_ikan" placeholder="Masukan nama ikan hias" title="Isikan data dengan benar" required pattern="[a-zA-Z\s]+">
                    </div>
                    <div class="form-group">
                        <label for="habitat"> Habitat : </label>
                        <input type="text" name="habitat" class="form-control" id="habitat" cols="30" rows="6" placeholder="Masukkan habitat ikan hias" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi"> Deskripsi : </label>
                        <input type="text" name="deskripsi" class="form-control form-control-user" placeholder="Masukkan deskripsi ikan hias" title="Isikan angka"  required>
                    </div>
                    <hr>
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Tambah</button>
                </form>
                <br>
                <div class="text-center">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                        </div>
                    </div>
                </div>
            </div>
```

Untuk method tambah_ikan_hias tidak perlu view karena redirect(dikembalikan) ke fungsi index. 

##### Update data ikan
Berdasarkan controller yang dibuat terdapatd dua method untuk edit dan update, method edit berfungsi untuk menampilkan form edit sehingga diperlukan view untuk menampilkannya, sehingga dibuat view bernama v_editikanhias yang berisi :
```
<!-- Ini adalah file view form edit ikan hias -->
<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Data Ikan Hias</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Berfungsi sebagai tempat untuk membuat Edit Profil -->
            </div>
            <div class="col-lg-10">
            <?php 
            foreach ($ikan as $tb) { ?>
                <form action="<?php echo base_url() . 'C_ikanhias/update'; ?>" method="post">

                    <div class="form-group">
                        <label for="nama_ikan"> Nama Ikan : </label>
                        <input type="hidden" class="form-control form-control-user"  id="id_ikan" name="id_ikan" value="<?php echo $tb->id_ikan ?>">
                        <input type="text" class="form-control form-control-user" id="nama_ikan" name="nama_ikan" placeholder="Masukan nama ikan" 
                        title="Isikan data dengan benar" required pattern="[a-zA-Z\s]+" value="<?php echo $tb->nama_ikan ?>">

                    </div>

                    <div class="form-group">
                        <label for="habitat"> Habitat : </label>
                        <input type="text" name="habitat" class="form-control" id="habitat" cols="30" rows="6" 
                        placeholder="Masukkan Habitat Ikan Hias" required value="<?php echo $tb->habitat ?>">
                        
                    </div>

                    <div class="form-group">
                        <label for="deskripsi"> Deskripsi : </label>
                        <input type="text" name="deskripsi" class="form-control form-control-user" placeholder="Masukkan Deskripsi Ikan Hias" 
                        value="<?php echo $tb->deskripsi ?>" required>
                        
                    </div>
                    <hr>
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Simpan</button>
                </form>
                <?php } ?>
                <br>
                <div class="text-center">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                        </div>
                    </div>
                </div>
            </div>
```
Sedangkan update berfungsi sebagai aksi ketika data telah diinputkan, dan tidak memerlukan view karena redirect(dikembalikan) ke method index

##### Delete data ikan
Berdasarkan controller yang telah dibuat, controller hapus digunakan untuk menghapus berdasarkan id, namun tidak memerlukan view karena redirect(dikembalikan) ke method index
