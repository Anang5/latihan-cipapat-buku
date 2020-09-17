<?= $this->extend('layout/template'); ?>

<?= $this->section('halaman'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4"><u><i>Detail Novel</i></u></h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $daftarbuku['sampul']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title"><b><?= $daftarbuku['judul']; ?></b></h4>
                            <p class="card-text"> Penulis : <?= $daftarbuku['penulis']; ?></p>
                            <p class="card-text"><small class="text-muted"><b>Penerbit : <?= $daftarbuku['penerbit']; ?></b></small></p>

                            <a href="/Buku/edit/<?= $daftarbuku['slug']; ?>" class="btn btn-dark">Edit</a>
                            <a href="/Buku/hapus/<?= $daftarbuku['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin Menghapus Data ?');">Delete</a>
                            <br><br>
                            <a href="/buku" class="btn btn-outline-primary"><i>Kembali ke Daftar Novel</i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>