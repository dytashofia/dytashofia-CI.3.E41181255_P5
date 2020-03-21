<!-- Ini adalah file view form input ikan hias -->
<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Data Ikan Hias</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
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
                    <!-- Batas edit profil -->
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>