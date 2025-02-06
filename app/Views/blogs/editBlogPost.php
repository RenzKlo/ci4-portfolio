<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container pt-5">

    <h1 class="text-xlarge my-5 text-center fw-bold">Edit Blog Post</h1>
    <div class="card glass-card h-100 m-2">
        <div class="card-body">
            <form action="<?= base_url('blogs/update/' . $blog['id']) ?>" method="post">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $blog['title'] ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5"
                        required><?= $blog['content'] ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>