<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<title>Úprava hry</title>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">Úvod</a></li>
        <li class="breadcrumb-item"><a href="<?= site_url('games') ?>">Hry</a></li>
        <li class="breadcrumb-item active">Upravit hru</li>
    </ol>
</nav>

<h1 class="fw-bold mb-4">Upravit hru</h1>

<form action="<?= site_url('games/update/'.$game['id_game']) ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label class="form-label">Název</label>
        <input type="text" name="name" class="form-control" value="<?= esc($game['name']) ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Žánr</label>
        <select name="genre_id" class="form-select" required>
            <option value="" disabled>Vyber žánr</option>
            <?php foreach($genres as $genre): ?>
            <option value="<?= $genre['id_game_genre'] ?>"><?= esc($genre['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Datum vydání</label>
        <input type="date" name="release_date" class="form-control" value="<?= esc($game['release_date']) ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Obrázek</label>
        <?php if(!empty($game['image'])): ?>
        <div>
            <img src="<?= base_url('Obrázky her/'.$game['image']) ?>"
                style="width:140px;height:90px;object-fit:contain;background:#111" class="rounded mb-2">
        </div>
        <?php endif; ?>
        <input type="file" name="image" class="form-control" accept="image/*">
    </div>

    <div class="mb-3">
        <label class="form-label">Popis</label>
        <textarea name="description" class="form-control wysiwyg" rows="8"><?= esc($game['description']) ?></textarea>
    </div>

    <button class="btn btn-primary">Uložit změny</button>
    <a href="<?= site_url('games') ?>" class="btn btn-outline-light">Zpět</a>
</form>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
ClassicEditor.create(document.querySelector('.wysiwyg'));
</script>

<?= $this->endSection() ?>