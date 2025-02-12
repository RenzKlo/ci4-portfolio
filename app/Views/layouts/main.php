<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <title>renzk. Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= base_url('assets/favicon/site.webmanifest') ?>">
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url('styles.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7911ebb4bc.js" crossorigin="anonymous"></script>
    <!-- <script defer type='text/javasript' src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script> -->
</head>

<body class="postion-relative">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold text-warning" href="">renzk.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ">
                            <a class="nav-link fw-bold  <?= is_active('home') ?>" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link fw-bold <?= is_active('about') ?>" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold <?= is_active('skills') ?>" href="/skills">Skills</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link fw-bold <?= is_active('projects') ?>" href="/projects">Projects</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link fw-bold <?= is_active('blogs') ?> " href="/blogs">Blogs</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link fw-bold <?= is_active('contact') ?> " href="/contact">Contact</a>
                        </li>
                        <?php if (session()->get('isLoggedIn')): ?>
                            <li class="nav-item ">
                                <a class="nav-link fw-bold <?= is_active('auth') ?>"
                                    href="<?= base_url('/logout') ?>">Logout</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link fw-bold <?= is_active('auth') ?>"
                                    href="<?= base_url('/login') ?>">Login</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="">
        <div class="gradient-body position-fixed">
            <div class="gradient "></div>
        </div>
        <div class="">
            <?= $this->renderSection('content') ?>
        </div>
    </div>


</body>
<script>
    window.addEventListener('beforeunload', function () {
        document.body.classList.add('fade-out');
    });
</script>

</html>