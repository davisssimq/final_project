<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="row g-4">
<?php foreach($operacniSystemy as $operacniSystem): ?>
    <div class="col-md-4">
        <div class="card bg-dark text-light border-secondary h-100">
            <div class="card-body">
                <a href="<?= site_url('operating_systems/games/'.$operacniSystem['id_operating_system']) ?>"><h5 class="fw-bold mb-2"><?= $operacniSystem['name'] ?></h5></a>
                <p class="small text-secondary mb-2"><?= $operacniSystem['description'] ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
<?= $this->endSection() ?>