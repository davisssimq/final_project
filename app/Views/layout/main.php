<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title ?? 'GameHub') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
    <style>
        body{background:#070707;color:#f1f1f1}
        .page-wrapper{min-height:100vh;background:linear-gradient(180deg,#070707,#0b0b0b)}
        .navbar-custom{background:#0c0c0c;border-bottom:1px solid #1f1f1f}
        .navbar-brand{font-size:1.25rem;letter-spacing:.4px}
        .nav-link{color:#aaa!important;margin-left:14px;font-size:.95rem}
        .nav-link:hover,.nav-link.active{color:#fff!important}
        .content-box{padding-top:32px;padding-bottom:45px}
        .btn{border-radius:10px}
        .btn-primary{background:#0d6efd;border-color:#0d6efd}
        .btn-outline-light{border-color:#555;color:#eee}
        .btn-outline-light:hover{background:#eee;color:#111}
        .card,.bg-dark{background:#121212!important}
        .border-secondary{border-color:#2a2a2a!important}

        .game-card{background:#121212;border:1px solid #292929;border-radius:12px;overflow:hidden;transition:.15s}
        .game-card:hover{transform:translateY(-2px);border-color:#444}
        .game-img-wrap{height:210px;background:#090909;display:flex;align-items:center;justify-content:center;border-bottom:1px solid #202020}
        .game-img{width:100%;height:100%;object-fit:contain}
        .game-genre{color:#9ca3af;font-size:.82rem;min-height:34px}
        .game-description{color:#9ca3af;font-size:.86rem;line-height:1.45;min-height:52px}
        .game-date{color:#8b949e;font-size:.82rem}

        .pagination{justify-content:center;margin-top:10px}
        .pagination .page-link{background:#121212;border-color:#333;color:#ddd}
        .pagination .page-link:hover{background:#1c1c1c;color:#fff}
        .pagination .active .page-link{background:#0d6efd;border-color:#0d6efd;color:#fff}

        .ck-editor__editable{min-height:180px;background:#fff!important;color:#111!important}
        .ck-editor__editable p{color:#111!important}
        .ck-toolbar{background:#f8f9fa!important}

        @media(max-width:991px){
            .nav-link{margin-left:0;padding:.5rem 0}
        }
    </style>
</head>
<body>
<div class="page-wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?= site_url('/') ?>">GameHub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <div class="navbar-nav ms-auto align-items-lg-center">
                    <a class="nav-link" href="<?= site_url('/') ?>">Úvod</a>
                    <a class="nav-link" href="<?= site_url('games') ?>">Hry</a>
                    <a class="nav-link" href="<?= site_url('operating_systems') ?>">Operační Systémy</a>
                    <a class="nav-link" href="<?= site_url('game_genres') ?>">Žánry</a>
                    <a class="nav-link" href="<?= site_url('developers') ?>">Vývojáři</a>
                    <a class="nav-link" href="<?= site_url('players') ?>">Hráči</a>
                    <a class="nav-link" href="">👤</a>
                </div>
            </div>
        </div>
    </nav>
    <main class="container content-box">
        <?= $this->renderSection('content') ?>
    </main>
</div>
<script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>