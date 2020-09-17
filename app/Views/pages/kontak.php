<?= $this->extend('layout/template'); ?>

<?= $this->section('halaman'); ?>
<div class="container">
    <div class="row">
        <div class="col mt-3">
            <h2>kontak Saya</h2>
            <?php foreach ($alamat as $a) : ?>
                <ul>
                    <li><?= $a['tipe']; ?></li>
                    <li><?= $a['alamat']; ?></li>
                    <li><?= $a['kota']; ?></li>
                </ul>

            <?php endforeach; ?>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>