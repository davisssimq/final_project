<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<title>Žánry her</title>
<h1 class="fw-bold mb-4">Žánry her</h1>
<div class="row g-4">
<?php foreach($zanryHer as $zanrHry): ?>
    <div class="col-md-4">
        <div class="card bg-dark text-light border-secondary h-100">
            <div class="card-body">
                <a href="<?= site_url('game_genres/games/'.$zanrHry['id_game_genre']) ?>"><h5 class="fw-bold mb-2"><?= $zanrHry['name'] ?></h5></a>
                <p class="small text-secondary mb-2"><?= $zanrHry['description'] ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
<?= $this->endSection() ?>