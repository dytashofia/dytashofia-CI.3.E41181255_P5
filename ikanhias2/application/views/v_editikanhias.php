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
                    <!-- Batas edit data ikan hias -->
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>