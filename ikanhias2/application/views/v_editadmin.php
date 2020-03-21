<!-- Ini adalah file view form edit admin -->
<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Data Admin</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Berfungsi sebagai tempat untu membuat Edit Data Admin -->
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
                    <!-- Batas edit data admin -->
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>