<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container position-relative">
    <h1 class="text-xlarge my-5 text-center fw-bold">Projects</h1>
    <div class="d-flex mb-4 justify-content-center">
        <div class="card glass-card m-2 card-hover" style="width: 25rem;">
            <img class="card-image-top rounded-top" src="assets/images/hinosa.png" alt="">
            <div class="card-body mx-3 mb-2">
                <h3 class="card-title fw-bold">Farmacia Hinosa</h3>
                <p class="card-text"> A patient management system (PMS) that stores and manages patient details and
                    appointments of a clinic.</p>
                <p class="card-text mb-2" style="font-size: 1.5em;"><i class="bi bi-pc-display"></i></p>
                <div class=" flex-wrap">
                    <div class="badge ml-1 my-1 rounded-pill bg-white text-dark">NextJS</div>
                    <div class="badge ml-1 my-1 rounded-pill bg-white text-dark">MongoDB</div>
                    <div class="badge ml-1 my-1 rounded-pill bg-white text-dark">NestJS</div>
                    <div class="badge ml-1 my-1 rounded-pill bg-white text-dark">TypeScript</div>
                    <div class="badge ml-1 my-1 rounded-pill bg-white text-dark">React</div>
                    <div class="badge ml-1 my-1 rounded-pill bg-white text-dark">NextAuth</div>
                </div>
            </div>
        </div>

        <div class="card glass-card m-2 card-hover" style="width: 25rem;">
            <img class="card-image-top rounded-top" src="assets/images/publink.png" alt="">
            <div class="card-body mx-3 mb-2">
                <h3 class="card-title fw-bold">Publink</h3>
                <p class="card-text"> A mobile application made for commuters to guide them navigate with bus and
                    jeepneys around Iloilo City.</p>
                <p class="card-text mb-2" style="font-size: 1.5em;"><i class="bi bi-phone"> </i> <i
                        class="bi bi-pc-display"></i></p>
                <div class=" flex-wrap">

                    <div class="badge ml-1 my-1 rounded-pill bg-white text-dark">Flutter</div>
                    <div class="badge ml-1 my-1 rounded-pill bg-white text-dark">Flask</div>
                    <div class="badge ml-1 my-1 rounded-pill bg-white text-dark">MongoDB</div>
                    <div class="badge ml-1 my-1 rounded-pill bg-white text-dark">OpenStreetMap</div>
                    <div class="badge ml-1 my-1 rounded-pill bg-white text-dark">Digital Ocean</div>
                    <div class="badge ml-1 my-1 rounded-pill bg-white text-dark">Google OAuth 2.0</div>
                </div>
            </div>
        </div>
    </div>

</div>





<?= $this->endSection() ?>