<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h1 class="fw-bold mb-4">
    <?= esc($hrac['nickname']) ?> - <?= esc($hra['name']) ?>
</h1>

<div class="card bg-dark text-light border-secondary p-4">

    <div class="game-img-wrap mb-4">
        <img src="<?= base_url('Obrázky her/'.$hra['image']) ?>" class="game-img">
    </div>

    <h3><?= esc($hra['name']) ?></h3>

    <p class="text-secondary">
        <?= esc($hra['description']) ?>
    </p>

    <p>
        Datum vydání:
        <?= esc($hra['release_date']) ?>
    </p>

</div>

<?= $this->endSection() ?>