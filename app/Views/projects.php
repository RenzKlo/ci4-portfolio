<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>
    projects
</h1>
<div class="d-flex flex-wrap  justify-content-center ">
    <?php foreach ($projects as $project): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100 m-2 card-hover">
                <div class="card-body">
                    <h5 class="card-title"><?= $project['title'] ?></h5>
                    <p class="card-text"><?= $project['content'] ?></p>
                    <p class="card-text"><?= $project['project_date'] ?></p>
                </div>
                <div class="card-footer d-flex">
                    <?php foreach ($project[''] as $key => $value): ?>
                        <small class=""><?= $project[''] ?></small>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>





<?= $this->endSection() ?>