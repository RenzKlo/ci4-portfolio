<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="vh-100 d-flex justify-content-center align-items-center">
    <div class="container align-items-center">
        <div class="row">
            <div class="col pb-3">
                <span class="fs-4">
                    Hello there I'm Kent!
                </span>
                <h1 class="fw-bold text-large">
                    A Full Stack Developer
                </h1>
                I build apps both for mobile and web.
            </div>
            <div class=" ">
                <button class="btn btn-light fw-bold px-4 text-warning border rounded-pill border-warning bg-black resume-btn">
                    Resume
                </button>
                <button class="btn btn-dark"><i class="bi bi-instagram"></i></button>
                <button class="btn btn-dark"><i class="bi bi-linkedin"></i></button>
                <button class="btn btn-dark"><i class="bi bi-github"></i></button>
                <button class="btn btn-dark"><i class="bi bi-envelope"></i></button>
            </div>
        </div>
    </div>
</section>

<section class="vh-80 d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="d-flex justify-content-center flex-wrap">
            <div class="card mx-2 my-3" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <!-- Repeat card structure for other cards -->
        </div>
    </div>
</section>

<section class="tech-stack my-5">
    <div class="container">
        <h2 class="text-center mb-4">Tech Stack</h2>
        <div class="d-flex justify-content-center mb-4">
            <button class="btn btn-outline-primary mx-2 filter-btn" data-filter="all">All</button>
            <button class="btn btn-outline-primary mx-2 filter-btn" data-filter="frontend">Frontend</button>
            <button class="btn btn-outline-primary mx-2 filter-btn" data-filter="backend">Backend</button>
            <button class="btn btn-outline-primary mx-2 filter-btn" data-filter="mobile">Mobile</button>
            <button class="btn btn-outline-primary mx-2 filter-btn" data-filter="web">Web</button>
            <button class="btn btn-outline-primary mx-2 filter-btn" data-filter="design">Design</button>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 tech-item" data-category="frontend">
                <div class="card h-100">
                    <img src="path/to/frontend-image.jpg" class="card-img-top" alt="Frontend">
                    <div class="card-body text-center">
                        <h5 class="card-title">Frontend</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 tech-item" data-category="backend">
                <div class="card h-100">
                    <img src="path/to/backend-image.jpg" class="card-img-top" alt="Backend">
                    <div class="card-body text-center">
                        <h5 class="card-title">Backend</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 tech-item" data-category="mobile">
                <div class="card h-100">
                    <img src="path/to/mobile-image.jpg" class="card-img-top" alt="Mobile">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mobile</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 tech-item" data-category="web">
                <div class="card h-100">
                    <img src="path/to/web-image.jpg" class="card-img-top" alt="Web">
                    <div class="card-body text-center">
                        <h5 class="card-title">Web</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 tech-item" data-category="design">
                <div class="card h-100">
                    <img src="path/to/design-image.jpg" class="card-img-top" alt="Design">
                    <div class="card-body text-center">
                        <h5 class="card-title">Design</h5>
                    </div>
                </div>
            </div>
            <!-- Repeat for other tech items -->
        </div>
    </div>
</section>

<?= $this->endSection() ?>