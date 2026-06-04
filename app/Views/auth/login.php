<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card bg-dark text-light border-secondary">
            <div class="card-body p-4">
                <h1 class="fw-bold mb-4">Přihlášení</h1>

                <?php if(session()->getFlashdata('success')): ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                <?php endif; ?>

                <?php if(session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>

                <form action="<?= site_url('login') ?>" method="post">
                    <?= csrf_field() ?>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Heslo</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button class="btn btn-primary w-100">Přihlásit se</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>