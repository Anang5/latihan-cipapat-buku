<?= $this->extend('layout/template'); ?>
<?= $this->section('halaman'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/Buku/create" class="btn btn-info mt-4">Tambah Data Novel</a>
            <h1 class="my-3">Daftar Novel Perpustakaan</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sampul Buku</th>
                        <th scope="col">judul Buku</th>
                        <th scope="col">Aksi</th>
                    </tr>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($daftarbuku as $b) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $b['sampul']; ?>" class="sampul"></td>
                            <td><?= $b['judul']; ?></td>
                            <td><a href="/buku/<?= $b['slug']; ?>" class="btn btn-warning">Detail Novel</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </thead>
                </tbody>
            </table>

        </div>
    </div>



    <?= $this->endSection(); ?>