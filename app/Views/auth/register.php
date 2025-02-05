<?php $this->extend('layouts/main') ?>
<?php $this->section('content') ?>
<div class="d-flex justify-content-center align-items-center">
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

            <!-- Register Form -->
            <form action="<?= base_url('register/submit') ?>" method="POST">
                <h2>Register</h2>
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="register_name" class="form-label">Name</label>
                    <input type="text" name="name" id="register_name" placeholder="Name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="register_email" class="form-label">Email</label>
                    <input type="email" name="email" id="register_email" placeholder="Email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="register_password" class="form-label">Password</label>
                    <input type="password" name="password" id="register_password" placeholder="Password" class="form-control" required>
                </div>
                <div class="d-grid-right">
                    <button type="submit" class="btn btn-dlcv fw-bold px-4 glass-card rounded-pill">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->endSection() ?>