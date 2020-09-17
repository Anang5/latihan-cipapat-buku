<?= $this->extend('layout/template'); ?>

<?= $this->section('halaman'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-4"><i>Form Ubah Data Novel</i></h2>
            <form action="/Buku/update/<?= $daftarbuku['id']; ?>" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul Novel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= $daftarbuku['judul']; ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $daftarbuku['penulis']; ?>">
                    </div>
                </div>
                <div class=" form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $daftarbuku['penerbit']; ?>">
                    </div>
                </div>
                <div class=" form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sampul" name="sampul" value="<?= $daftarbuku['sampul']; ?>">
                    </div>
                </div>

                <div class=" form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Ubah Data Novel</button>
                    </div>

                    <a href="/buku" class="btn btn-outline-dark mt-5"><i>Kembali ke Daftar Novel</i></a>


                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>