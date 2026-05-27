<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<title>Domovská stránka</title>

<section class="py-4">
    <div class="p-5 rounded-4 border border-secondary bg-dark text-light hero-bg">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <p class="text-primary fw-semibold mb-2">Školní databázový projekt</p>
                <h1 class="display-4 fw-bold mb-3">Herní databáze</h1>
                <p class="lead text-secondary mb-4">
                    Jednoduchý web pro evidenci her, hráčů, vývojářů, žánrů a podporovaných operačních systémů.
                </p>
                <div class="d-flex gap-2 flex-wrap">
                    <a href="<?= site_url('games') ?>" class="btn btn-primary btn-lg">Hry</a>
                    <a href="<?= site_url('players') ?>" class="btn btn-outline-light btn-lg">Hráči</a>
                    <a href="<?= site_url('developers') ?>" class="btn btn-outline-light btn-lg">Vývojáři</a>
                    <a href="<?= site_url('game_genres') ?>" class="btn btn-outline-light btn-lg">Žánry</a>
                    <a href="<?= site_url('operating_systems') ?>" class="btn btn-outline-light btn-lg">Systémy</a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card bg-black text-light border-secondary">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Co databáze obsahuje</h5>
                        <p class="text-secondary mb-0">
                            Hry s obrázky a datem vydání, achievementy, hráče,
                            herní žánry, vývojáře a vazby mezi tabulkami.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-5">
    <div class="row g-3">
        <div class="col-md-6 col-lg">
            <a href="<?= site_url('games') ?>" class="text-decoration-none">
                <div class="card h-100 bg-dark text-light border-secondary menu-card">
                    <div class="card-body p-4">
                        <span class="badge text-bg-primary mb-3">Hry</span>
                        <h5 class="fw-bold">Přehled her</h5>
                        <p class="text-secondary mb-0">Seznam her s obrázky, popisem, datem vydání a dalšími údaji.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-lg">
            <a href="<?= site_url('operating_systems') ?>" class="text-decoration-none">
                <div class="card h-100 bg-dark text-light border-secondary menu-card">
                    <div class="card-body p-4">
                        <span class="badge text-bg-primary mb-3">Systémy</span>
                        <h5 class="fw-bold">Operační systémy</h5>
                        <p class="text-secondary mb-0">Platformy, na kterých jsou jednotlivé hry dostupné.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-lg">
            <a href="<?= site_url('game_genres') ?>" class="text-decoration-none">
                <div class="card h-100 bg-dark text-light border-secondary menu-card">
                    <div class="card-body p-4">
                        <span class="badge text-bg-primary mb-3">Žánry</span>
                        <h5 class="fw-bold">Žánry her</h5>
                        <p class="text-secondary mb-0">Rozdělení her podle typu, například RPG, akční nebo strategie.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-lg">
            <a href="<?= site_url('developers') ?>" class="text-decoration-none">
                <div class="card h-100 bg-dark text-light border-secondary menu-card">
                    <div class="card-body p-4">
                        <span class="badge text-bg-primary mb-3">Vývojáři</span>
                        <h5 class="fw-bold">Vývojáři</h5>
                        <p class="text-secondary mb-0">Přehled studií a firem, které hry vytvořily.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-lg">
            <a href="<?= site_url('players') ?>" class="text-decoration-none">
                <div class="card h-100 bg-dark text-light border-secondary menu-card">
                    <div class="card-body p-4">
                        <span class="badge text-bg-primary mb-3">Hráči</span>
                        <h5 class="fw-bold">Hráči</h5>
                        <p class="text-secondary mb-0">Evidence hráčů a her, které jsou s nimi propojené.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<style>
.hero-bg{background:linear-gradient(135deg,#151515,#050505)!important}

</style>

<?= $this->endSection() ?>