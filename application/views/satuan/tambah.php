<div class="container">
    <div class="row mt-3">
        <div class="col=md-6">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-primary" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="id_satuan" class="form-label">Kode Satuan</label>
                    <input type="text" class="form-control" name="id_satuan" id="id_satuan">
                </div>
                <div class="mb-3">
                    <label for="nama_satuan" class="form-label">Nama Satuan</label>
                    <input type="text" class="form-control" name="nama_satuan" id="nama_satuan">
                </div>
                <button name="tambah" type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>