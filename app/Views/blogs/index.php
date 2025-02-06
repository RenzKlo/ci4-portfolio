<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="position-relative pt-5">
    <h1 class="text-xlarge my-5 text-center fw-bold">Blogs</h1>
    <div class="container d-flex flex-wrap  ">
        <?php foreach ($blogs as $blog): ?>
            <div class="col-md-4 mb-4">

                <a href="<?= base_url('blogs/viewBlog/' . $blog['id'])?>" class="text-decoration-none text-dark">
                    <div class="card glass-card h-100 m-2 card-hover">
                        <div class="card-body">
                            <h5 class="card-title fw-bold"><?= $blog['title'] ?></h5>
                            <p class="card-text"><?= $blog['content'] ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?= $blog['author_date'] ?></small>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?= $this->endSection() ?>