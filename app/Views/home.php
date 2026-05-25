<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<title>Domovská stránka</title>
<section class="py-5">
    <div class="p-5 rounded-4 border border-secondary bg-dark text-light hero-bg">
        <div class="row align-items-center g-5">
            <div class="col-lg-8">
                <span class="badge text-bg-primary mb-3">Školní databázový projekt</span>
                <h1 class="display-4 fw-bold mb-4">Herní databáze</h1>
                <p class="lead text-secondary">Webová aplikace zaměřená na evidenci her, hráčů, achievementů a herních
                    žánrů.</p>
                <p class="text-secondary">Projekt využívá MySQL databázi a framework CodeIgniter 4. Databáze obsahuje
                    hry, obrázky, datum vydání, achievementy a propojení mezi hráči a hrami.</p>
                <div class="d-flex gap-3 flex-wrap mt-4">
                    <a href="<?= site_url('games') ?>" class="btn btn-primary btn-lg">Zobrazit hry</a>
                    <a href="<?= site_url('operating_systems') ?>" class="btn btn-outline-light btn-lg">Operační systémy</a>
                    <a href="" class="btn btn-outline-light btn-lg">Žánry her</a>
                    <a href="" class="btn btn-outline-light btn-lg">Vývojáři</a>
                    <a href="" class="btn btn-outline-light btn-lg">Hráči</a>
                </div>
            </div>
            <div class="col-lg-4">
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
        <div class="col-md-2 offset-md-1">
            <div class="card h-100 bg-dark text-light border-secondary">
                <div class="card-body p-4">
                    <span class="badge text-bg-primary mb-3">Hry</span>
                    <h4 class="fw-bold">Přehled her</h4>
                    <p class="text-secondary mb-0">Prohlížejte a evidujte videohry v databázi. U každé hry lze zobrazit informace jako název, datum vydání, žánr, podporovaný operační systém, vývojář nebo související achievementy</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card h-100 bg-dark text-light border-secondary">
                <div class="card-body p-4">
                    <span class="badge text-bg-primary mb-3">Operační systémy</span>
                    <h4 class="fw-bold">Přehled operačních systémů</h4>
                    <p class="text-secondary mb-0">Přehled operačních systémů, na kterých jsou hry dostupné. Evidence umožňuje přiřazení her k platformám, například Windows, Linux, macOS nebo herním systémům</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card h-100 bg-dark text-light border-secondary">
                <div class="card-body p-4">
                    <span class="badge text-bg-primary mb-3">Žánry her</span>
                    <h4 class="fw-bold">Přehled herních žánrů</h4>
                    <p class="text-secondary mb-0">Seznam herních žánrů slouží k lepší organizaci databáze. Hry lze rozdělit například na RPG, akční, strategické, sportovní nebo simulátory</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card h-100 bg-dark text-light border-secondary">
                <div class="card-body p-4">
                    <span class="badge text-bg-primary mb-3">Vývojáři</span>
                    <h4 class="fw-bold">Přehled vývojářů</h4>
                    <p class="text-secondary mb-0">Databáze vývojářů obsahuje přehled studií a společností, které vytvořily evidované hry. U každého vývojáře lze zobrazit seznam vytvořených titulů</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card h-100 bg-dark text-light border-secondary">
                <div class="card-body p-4">
                    <span class="badge text-bg-primary mb-3">Hráči</span>
                    <h4 class="fw-bold">Přehled hráčů</h4>
                    <p class="text-secondary mb-0">Správa registrovaných hráčů a jejich herních statistik. Hráči mohou být propojeni s dosaženými achievementy a oblíbenými hrami</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.hero-bg {
    background: linear-gradient(135deg, #111, #050505) !important
}
</style>

<?= $this->endSection() ?>
