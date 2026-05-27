<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<title>Hry</title>
<h1 class="fw-bold mb-4">Hry, které má <?= $hrac['nickname'] ?></h1>
<div class="row g-4">
    <?php foreach($hry as $hra): ?>
    <div class="col-md-4">
        <div class="card bg-dark text-light border-secondary h-100">
            <?php if(!empty($hra['image'])): ?>
            <div class="game-img-wrap">
                <img src="<?= base_url('Obrázky her/'.$hra['image']) ?>" class="game-img"
                    alt="<?= esc($hra['name']) ?>">
            </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="d-flex gap-2 mb-3">
                    <a href="<?= site_url('players/'.$hrac['id_player'].'/games/'.$hra['id_game']) ?>"
                        class="btn btn-primary btn-sm">
                        Detail
                    </a>
                </div>
                <h5 class="fw-bold mb-2"><?= $hra['name'] ?></h5>
                <p class="small text-secondary mb-2"><?= $hra['description'] ?></p>
                <p class="small text-secondary mb-2">Vydáno: <?= $hra['release_date'] ?></p>
                <p class="small text-secondary mb-2">Velikost hry: <?= $hra['storage_space'] ?></p>
            </div>
            <?php foreach($achievementy as $achievement):
                if ($achievement['game_id'] == $hra['id_game'])
                {
                    ?>
            <button class="fw-bold mb-2 btn btn-sm" data-bs-toggle="modal"
                data-bs-target="#achievement<?= $achievement['id_achievement'] ?>">
                <?= $achievement['name']; ?>
            </button>
            <div class="modal" tabindex="-1" id="achievement<?= $achievement['id_achievement'] ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header"><?= $achievement['name'] ?></div>
                        <div class="modal-body">
                            Kolik hráčů má tento achievement: <?= $achievement['number_of_people'] ?>
                            <br><?= $achievement['description'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            endforeach; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<div class="mt-4">
    <?= $strankovani->links('default', 'bootstrap_full') ?>
</div>
<?= $this->endSection() ?>