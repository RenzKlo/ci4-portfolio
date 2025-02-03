<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container position-relative">
    <h1 class="text-xlarge my-5 text-center fw-bold">Projects</h1>
    <div class="d-flex flex-wrap mb-4 justify-content-center">

        <?php if (isset($projects) && !empty($projects)): ?>
            <?php foreach ($projects as $project): ?>
                <div class="card glass-card m-2 card-hover" style="width: 22rem;">
                    <img class="card-image-top rounded-top" src="<?= base_url($project['image']) ?>" alt="">
                    <div class="card-body position-relative mx-3 mb-2">
                        <div></div>
                        <h3 class="card-title fw-bold"><?= $project['name'] ?></h3>
                        <p class="card-text"><?= $project['description'] ?></p>
                        <p class="card-text"><?= $project['start_date'] ?> - <?= $project['end_date'] ?></p>
                        <div class=" flex-wrap">
                            <?php foreach ($project['technologies'] as $projectTech): ?>
                                <div class="badge ml-1 my-1 rounded-pill bg-white text-dark"><?= $projectTech['name'] ?></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No projects found.</p>
        <?php endif; ?>
    </div>

</div>





<?= $this->endSection() ?>

<!-- 
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
        </div> -->