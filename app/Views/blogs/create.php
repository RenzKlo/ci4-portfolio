<?php $this->extend('layouts/main'); ?>
<?php $this->section('content'); ?>
<div class="container mt-5 d-flex justify-content-center align-items-center">
    <div class="card glass-card w-100" style="max-width: 600px;">
        <div class="card-body">

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>
            <?php if (isset($validation)): ?>
                <div class="alert alert-danger">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>

            <!-- Create Blog Form -->
            <form action="<?= base_url('blogs/store') ?>" method="POST">
                <h2>Create Blog</h2>
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" placeholder="Title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" id="content" cols="30" rows="5" class="form-control" placeholder="Content" required></textarea>
                </div>
                <div class="d-grid-right">
                    <button type="submit" class="btn btn-dlcv fw-bold px-4 glass-card rounded-pill">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>