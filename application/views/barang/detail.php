<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Detail Barang</h5>
                <div class="card-body">
                    <h5 class="card-title"><?= $barang['nama_barang']; ?></h5>
                    <p class="card-text"><?= $barang['id_jenis']; ?></p>
                    <p class="card-text"><?= $barang['id_satuan']; ?></p>
                    <p class="card-text"><?= $barang['stok']; ?></p>
                    <a href="http://localhost/inventaris/Barang" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>