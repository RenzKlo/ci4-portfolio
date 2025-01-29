<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url('styles.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- <script defer type='text/javasript' src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script> -->
</head>

<body class="postion-relative">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold text-warning" href="#">renzk.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-bold <?= is_active('about') ?>" aria-current="page" href="/">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold <?= is_active('blog') ?> " href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold <?= is_active('projects') ?>" href="#">Projects</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="">
        <div class="gradient-body position-fixed">
            <div class="gradient "></div>
        </div>
        <?= $this->renderSection('content') ?>
    </div>
</body>

</html>