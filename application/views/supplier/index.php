                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Supplier</h1>
                            
  <?php if ($this->session->flashdata('flash')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Data Supplier</strong> <?= $this->session->flashdata('flash'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

  <?php endif; ?>

  <?php if (empty($supplier)) : ?>
    <div class="alert alert-danger" role="alert">
      Data Supplier Tidak ditemukan...
    </div>
  <?php endif; ?>

  <br>
  <div class="row-mt-3">
    <div class="colmd-6">
      <a href="http://localhost/invetaris/Supplier/tambah/" class="btn btn-primary">Tambah Data Supplier</a>
    </div>


  <br>
  <div class="row-mt-3">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="input-group">
          <input type="text" class="formcontrol" placeholder="Cari Data Supplier..." name="keyword">
          <button class="btn btn-primary" type="submit">Cari</button>
        </div>
      </form>
    </div>
  </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Supplier</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                          <th scope="col">No</th>
                                          <th scope="col">Kode Supplier</th>
                                          <th scope="col">Nama Supplier</th>
                                          <th scope="col">No Telepon Supplier</th>
                                          <th scope="col">Alamat Supplier</th>
                                          <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                          <?php foreach ($supplier as $sup) : ?>
                                            <td><?= ++$start ?></td>
                                                <td><?= $sup['id_supplier']; ?></td>
                                                <td><?= $sup['nama_supplier']; ?></td>
                                                <td><?= $sup['no_telp']; ?></td>
                                                <td><?= $sup['alamat']; ?></td>
                                                <td> <a href="http://localhost/inventaris/Supplier/detail/<?= $sup['id_supplier']; ?>" class="btn btn-primary">Detail</a>
                                                     <a href="http://localhost/inventaris/Supplier/ubah/<?= $sup['id_supplier']; ?>" class="btn btn-success">Ubah</a>
                                                     <a href="http://localhost/inventaris/Supplier/hapus/<?= $sup['id_supplier']; ?>" class="btn btn-danger" onclick="return confirm ('Apakah Yakin Akan Dihapus?')">Hapus</a></td>
                                            </tr>
                                          <?php endforeach ?>
                                        </tr>
                                    </tbody>
                                </table>
                                <?= $this->pagination->create_links(); ?>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
