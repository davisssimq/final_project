<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<title>Vývojáři</title>
<h1 class="fw-bold mb-4">Vývojáři</h1>
<div class="row g-4">
<?php foreach($vyvojari as $vyvojar): ?>
    <div class="col-md-4">
        <div class="card bg-dark text-light border-secondary h-100">
            <div class="card-body">
                <a href="<?= site_url('developers/games/'.$vyvojar['id_developer']) ?>"><h5 class="fw-bold mb-2"><?= $vyvojar['name'] ?></h5></a>
                <p class="small text-secondary mb-2"><?= $vyvojar['description'] ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
<?= $this->endSection() ?>