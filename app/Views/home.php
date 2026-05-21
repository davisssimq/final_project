<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section class="py-5">
    <div class="p-5 rounded-4 border border-secondary bg-dark text-light hero-bg">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="badge text-bg-primary mb-3">nejaky projekt idk</span>
                <h1 class="display-4 fw-bold mb-4">Herní databáze</h1>
                <p class="lead text-secondary">
                    Webová aplikace zaměřená na evidenci her, hráčů, achievementů a herních žánrů.
                </p>
                <p class="text-secondary">
                    Projekt využívá MySQL databázi a framework CodeIgniter 4. Databáze obsahuje hry,
                    obrázky, datum vydání, achievementy a propojení mezi hráči a hrami.
                </p>
                <div class="d-flex gap-3 flex-wrap mt-4">
                    <a href="<?= base_url('/games') ?>" class="btn btn-primary btn-lg">Zobrazit hry</a>
                    <a href="<?= base_url('/achievements') ?>" class="btn btn-outline-light btn-lg">Achievementy</a>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card bg-black text-light border-secondary">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Obsah databáze</h5>
                        <ul class="list-unstyled text-secondary mb-0">
                            <li class="mb-2">Hry s obrázky, datem vydání a popisem</li>
                            <li class="mb-2">Achievementy propojené s hrami</li>
                            <li class="mb-2">Hráčské profily a jejich aktivita</li>
                            <li>Žánry a vztahy mezi tabulkami</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 bg-dark text-light border-secondary">
                <div class="card-body p-4">
                    <span class="badge text-bg-primary mb-3">Hry</span>
                    <h4 class="fw-bold">Přehled her</h4>
                    <p class="text-secondary mb-0">Seznam her s obrázky, popisy a datem vydání.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 bg-dark text-light border-secondary">
                <div class="card-body p-4">
                    <span class="badge text-bg-primary mb-3">Achievementy</span>
                    <h4 class="fw-bold">Herní achievementy</h4>
                    <p class="text-secondary mb-0">Achievementy propojené s konkrétními hrami a hráči.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 bg-dark text-light border-secondary">
                <div class="card-body p-4">
                    <span class="badge text-bg-primary mb-3">Hráči</span>
                    <h4 class="fw-bold">Hráčské profily</h4>
                    <p class="text-secondary mb-0">Evidence hráčů a jejich aktivity v databázi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.hero-bg {
    background: linear-gradient(135deg, #111, #050505) !important;
}
</style>

<?= $this->endSection() ?>