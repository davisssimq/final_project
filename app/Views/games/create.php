<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<title>Přidání hry</title>
<nav aria-label="breadcrumb" class="breadcrumb-box">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">Úvod</a></li>
        <li class="breadcrumb-item"><a href="<?= site_url('games') ?>">Hry</a></li>
        <li class="breadcrumb-item active">Přidat hru</li>
    </ol>
</nav>

<h1 class="fw-bold mb-4">Přidat hru</h1>

<form action="<?= site_url('games/store') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label class="form-label">Název</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Datum vydání</label>
        <input type="date" name="release_date" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Obrázek</label>
        <input type="file" name="image" class="form-control" accept="image/*">
    </div>

    <div class="mb-3">
        <label class="form-label">Popis</label>
        <textarea name="description" class="form-control wysiwyg" rows="8"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Kolik místa hra zabírá</label>
        <br><input type="number" name="storage_space" min="1" class="form_control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Operační systém</label>
        <div class="row">
        <?php foreach($operacniSystemy as $operacniSystem): ?>
            <div class="col-md-2 mb-2">
                <div class="card h-100 text-light">
                    <input type="checkbox" name="operatingSystems[]" value="<?= $operacniSystem['id_operating_system'] ?>" class="checkbox-edit">
                    <label class="form-label text-center"><?= $operacniSystem['name'] ?></label>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Žánr</label>
        <div class="row">
        <?php foreach($zanryHer as $zanrHry): ?>
            <div class="col-md-2 mb-2">
                <div class="card h-100 text-light">
                    <input type="checkbox" name="gameGenres[]" value="<?= $zanrHry['id_game_genre'] ?>" class="checkbox-edit">
                    <label class="form-label text-center"><?= $zanrHry['name'] ?></label>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>

    <button class="btn btn-primary">Uložit</button>
    <a href="<?= site_url('games') ?>" class="btn btn-outline-light">Zpět</a>
</form>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
ClassicEditor.create(document.querySelector('.wysiwyg'));
</script>
<?= $this->endSection() ?>