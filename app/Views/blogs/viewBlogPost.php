<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container pt-5">
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
    <h1 class="text-xlarge my-5 text-center fw-bold"><?= $blog['title'] ?></h1>
    <div class="card glass-card h-100 m-2">
        <div class="card-body">
            <p class="card-text"><?= $blog['content'] ?></p>
        </div>
        <div class="card-footer d-flex">
            <small class="text-muted"><?= $blog['author_date'] ?></small>
            <div class="ms-auto">
                <a href="<?= base_url('blogs/edit/' . $blog['id']) ?>" class="px-2"><i class="bi bi-pen-fill "></i></a>
                <a href="<?= base_url('blogs/delete/' . $blog['id']) ?>" class=""
                    onclick="return confirm('Are you sure you want to delete this blog post?');" class="px-2"><i
                        class="bi bi-trash3-fill"></i></a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>