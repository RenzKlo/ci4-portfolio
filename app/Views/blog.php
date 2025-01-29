<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h1>
    Projects
</h1>
<div class="container">
    <div class="d-flex flex-wrap  justify-content-center ">
        <?php foreach ($blogs as $blog): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 m-2 card-hover">
                    <div class="card-body">
                        <h5 class="card-title"><?= $blog['title'] ?></h5>
                        <p class="card-text"><?= $blog['content'] ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?= $blog['author_date'] ?></small>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?= $this->endSection() ?>