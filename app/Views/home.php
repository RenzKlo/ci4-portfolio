<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="vh-100 position-relative d-flex justify-content-center align-items-center">
    <div class="container align-items-center justify-content-center">
        <div class="">
            <div class="pb-3 text-center">
                <h4 class="fs-4">
                    Hello there I'm Kent!
                </h4>
                <h1 class="fw-bold text-xlarge">
                    A Full Stack Developer
                </h1>
                I build apps both for mobile and web.
            </div>
            <div class="justify-content-center d-flex flex-column align-items-center">
                <div class="d-flex mb-2">
                    <a class="btn icon-btn" href="https://github.com/RenzKlo" target="_blank"><i
                            class=" bi bi-instagram" style="font-size: 1.5rem;"></i></a>
                    <a class="btn icon-btn" target="_blank"><i class="bi bi-linkedin "
                            style="font-size: 1.5rem;"></i></a>
                    <a class="btn icon-btn" target="_blank"><i class="bi bi-envelope"
                            style="font-size: 1.5rem;"></i></a>
                    <a class="btn icon-btn" target="_blank"><i class="bi bi-github " style="font-size: 1.5rem;"></i></a>
                </div>
                <a class="btn btn-dlcv fw-bold px-4 glass-card rounded-pill " target="_blank" href="<?= base_url('resume-daria.pdf') ?>">
                    <i class="bi bi-download "></i><span class="mx-2">Download CV</span>
                </a>
            </div>
        </div>
    </div>
</section>



<?= $this->endSection() ?>