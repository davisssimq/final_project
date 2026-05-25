<!doctype html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
    <style>
    body {
        background: #050505;
        color: #f1f1f1
    }

    .navbar-custom {
        background: rgba(10, 10, 10, .95);
        border-bottom: 1px solid #222
    }

    .navbar-brand {
        letter-spacing: .5px
    }

    .nav-link {
        color: #aaa !important;
        margin-left: 12px
    }

    .nav-link:hover {
        color: #fff !important
    }

    .page-wrapper {
        min-height: 100vh;
        background: radial-gradient(circle at top left, rgba(13, 110, 253, .15), transparent 35%), radial-gradient(circle at bottom right, rgba(108, 117, 125, .10), transparent 35%), #050505
    }

    .content-box {
        padding-top: 40px;
        padding-bottom: 50px
    }

    .btn-primary,
    .btn-outline-light {
        border-radius: 999px;
        padding-left: 22px;
        padding-right: 22px
    }

    .card,
    .bg-dark {
        background-color: #111 !important
    }

    .border-secondary {
        border-color: #2b2b2b !important
    }

    .game-card {
        background: #111;
        border: 1px solid #2b2b2b;
        border-radius: 14px;
        overflow: hidden;
        transition: .2s
    }

    .game-card:hover {
        transform: translateY(-3px);
        border-color: #555
    }

    .game-img-wrap {
        height: 220px;
        background: #0b0b0b;
        display: flex;
        align-items: center;
        justify-content: center;
        border-bottom: 1px solid #222;
    }

    .game-img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .game-genre {
        color: #9ca3af;
        font-size: .82rem;
        min-height: 38px
    }

    .game-description {
        color: #9ca3af;
        font-size: .85rem;
        line-height: 1.45;
        min-height: 55px;
    }

    .game-date {
        color: #8b949e;
        font-size: .82rem
    }

    .pagination {
        justify-content: center
    }

    .pagination .page-link {
        background: #111;
        border-color: #333;
        color: #ccc
    }

    .pagination .page-link:hover {
        background: #1a1a1a;
        color: #fff
    }

    .pagination .active .page-link {
        background: #6f42c1;
        border-color: #6f42c1;
        color: #fff
    }

    .ck-editor__editable{
    min-height:180px;
    background:#fff!important;
    color:#111!important;
}

.ck-editor__editable p{
    color:#111!important;
}

.ck-toolbar{
    background:#f8f9fa!important;
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
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link me-5" href="<?= site_url('/') ?>">Úvod</a>
                        <a class="nav-link me-5" href="<?= site_url('games') ?>">Hry</a>
                        <a class="nav-link" href="<?= site_url('operating_systems') ?>">Operační systémy</a>
                        <a class="nav-link" href="">Žánry her</a>
                        <a class="nav-link" href="">Vývojáři</a>
                        <a class="nav-link me-5" href="">Hráči</a>
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
