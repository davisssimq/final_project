<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<title>Hry</title>
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="fw-bold mb-1">Hry</h1>
        <p class="text-secondary mb-0">Seznam her uložených v databázi.</p>
    </div>
    <a href="<?= site_url('games/create') ?>" class="btn btn-primary">Přidat hru</a>
</div>

<?php if(session()->getFlashdata('success')): ?>
<div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<?php if(session()->getFlashdata('error')): ?>
<div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<div class="row g-4">
    <?php foreach($games as $game): ?>
    <div class="col-md-4">
        <div class="card bg-dark text-light border-secondary h-100">
            <?php if(!empty($game['image'])): ?>
            <div class="game-img-wrap">
                <img src="<?= base_url('Obrázky her/'.$game['image']) ?>" class="game-img"
                    alt="<?= esc($game['name']) ?>">
            </div>
            <?php endif; ?>

            <div class="card-body">
                <h5 class="fw-bold mb-2"><?= esc($game['name']) ?></h5>

                <p class="small text-secondary mb-2">
                    <?= esc($game['genre_name'] ?? 'Bez žánru') ?>
                </p>

                <p class="text-secondary small mb-2">
                    <?= esc(substr(strip_tags($game['description']), 0, 110)) ?>...
                </p>

                <p class="small text-secondary mb-2">
                    Vydáno: <?= esc($game['release_date']) ?>
                </p>

                <div class="d-flex gap-2">
                    <a href="<?= site_url('games/edit/'.$game['id_game']) ?>" class="btn btn-sm btn-outline-light">
                        Upravit
                    </a>

                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteModal<?= $game['id_game'] ?>">
                        Smazat
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal<?= $game['id_game'] ?>" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header border-secondary">
                    <h5 class="modal-title">Smazat hru</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    Opravdu chceš smazat hru <strong><?= esc($game['name']) ?></strong>?
                </div>

                <div class="modal-footer border-secondary">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Zrušit
                    </button>

                    <form action="<?= site_url('games/delete/'.$game['id_game']) ?>" method="post">
                        <?= csrf_field() ?>
                        <button class="btn btn-danger">Smazat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="mt-4">
    <?= $pager->links('default', 'bootstrap_full') ?>
</div>

<?= $this->endSection() ?>
