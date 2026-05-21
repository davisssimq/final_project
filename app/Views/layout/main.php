<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title ?? 'GameHub') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">

    <style>
        body {
            background: #050505;
            color: #f1f1f1;
        }

        .navbar-custom {
            background: rgba(10, 10, 10, 0.95);
            border-bottom: 1px solid #222;
        }

        .navbar-brand {
            letter-spacing: 0.5px;
        }

        .nav-link {
            color: #aaa !important;
            margin-left: 12px;
        }

        .nav-link:hover {
            color: #fff !important;
        }

        .page-wrapper {
            min-height: 100vh;
            background:
                radial-gradient(circle at top left, rgba(13, 110, 253, 0.18), transparent 35%),
                radial-gradient(circle at bottom right, rgba(108, 117, 125, 0.12), transparent 35%),
                #050505;
        }

        .content-box {
            padding-top: 40px;
        }

        .btn-primary {
            border-radius: 999px;
            padding-left: 24px;
            padding-right: 24px;
        }

        .btn-outline-light {
            border-radius: 999px;
            padding-left: 24px;
            padding-right: 24px;
        }

        .card,
        .bg-dark {
            background-color: #111 !important;
        }

        .border-secondary {
            border-color: #2b2b2b !important;
        }
    </style>
</head>

<body>

<div class="page-wrapper">

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?= base_url('/') ?>">
                GameHub
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="<?= base_url('/') ?>">Úvod</a>
                    <a class="nav-link" href="<?= base_url('/games') ?>">Hry</a>
                    <a class="nav-link" href="<?= base_url('/achievements') ?>">Achievementy</a>
                    <a class="nav-link" href="<?= base_url('/players') ?>">Hráči</a>
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