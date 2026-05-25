<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="row g-4">
<?php foreach($hry as $hra): ?>
    <div class="col-md-4">
        <div class="card bg-dark text-light border-secondary h-100">
            <?php if(!empty($hra['image'])): ?>
            <div class="game-img-wrap">
                <img src="<?= base_url('Obrázky her/'.$hra['image']) ?>" class="game-img" alt="<?= esc($hra['name']) ?>">
            </div>
            <?php endif; ?>
            <div class="card-body">
                <h5 class="fw-bold mb-2"><?= $hra['name'] ?></h5>
                <p class="small text-secondary mb-2"><?= $hra['description'] ?></p>
                <p class="small text-secondary mb-2">Vydáno: <?= $hra['release_date'] ?></p>
                <p class="small text-secondary mb-2">Velikost hry: <?= $hra['storage_space'] ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
<?= $this->endSection() ?>