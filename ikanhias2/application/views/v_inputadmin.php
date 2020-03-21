<!-- Ini adalah file view form input admin -->
<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Admin</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Berfungsi sebagai tempat unuk membuat Edit Profil -->
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