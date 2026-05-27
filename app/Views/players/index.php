<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<title>Hráči</title>
<h1 class="fw-bold mb-4">Hráči</h1>
<div class="row g-4">
<?php foreach($hraci as $hrac): ?>
    <div class="col-md-4">
        <div class="card bg-dark text-light border-secondary h-100">
            <div class="card-body">
                <a href="<?= site_url('players/games/'.$hrac['id_player']) ?>"><h5 class="fw-bold mb-2"><?= $hrac['nickname'] ?></h5></a>
                <p class="small text-secondary mb-2">Jméno: <?= $hrac['name'] ?></p>
                <p class="small text-secondary mb-2">Datum registrace: <?= $hrac['registration_day'] ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
<div class="mt-4">
    <?= $strankovani->links('default', 'bootstrap_full') ?>
</div>
<?= $this->endSection() ?>