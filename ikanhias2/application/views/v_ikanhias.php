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