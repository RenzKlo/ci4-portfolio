<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="container pt-5 position-relative mx-auto align-items-center">
    <h1 class="text-large mb-5 fw-bold text-center">About</h1>

    <div class="row g-3">
        <div class="col-md-6  ">
            <div class="card glass-card mb-3" style="min-height: 150px;">
                <div class="card-body">
                    <div class="fw-bold">Kent Lorenz Daria</div>
                    <div class="fw-bold">Capiz, Philippines</div>
                </div>
            </div>
      
            <div class="card glass-card d-flex" style="min-height: 80px;">
                <div class=" card-body ">
                    <div class="card-title fw-bold text-md-start text-center fs-4 mb-2">
                        Education
                    </div>
                    <div class="d-md-flex overflow-hidden">
                        <div class="container align-items-center justify-content-center my-2" style=" width: 150px;"
                            ><img class="img-responsive"
                                src=" <?= base_url('assets/wvsu_logo.svg') ?>" alt="WVSU Logo"></div>
                        <div class=" w-100 flex-md-grow text-md-start text-center ">
                            <div class="fs-5 fw-bold">
                                West Visayas State University
                            </div>
                            <div>
                                Bachelor of Science in Computer Science
                            </div>
                            <div>
                                2021- Present
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card glass-card h-100">
                <div class="card-body">
                    <h1>hello</h1>
                </div>
            </div>
        </div>

    </div>
</section>
<?= $this->endSection() ?>