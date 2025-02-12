<?php $this->extend('layouts/main') ?>
<?php $this->section('content') ?>
<div class="d-flex  mt-5 justify-content-center align-items-center">
    <div class="card glass-card w-100" style="max-width: 600px;">
        <div class="card-body">
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>
            <?php if (isset($validation)): ?>
                <div class="alert alert-danger">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>

            <!-- Login Form -->
            <form action="<?= base_url('login/submit') ?>" method="POST">
                <?= csrf_field() ?>
                <h2 class="fw-bold ">Login</h2>
                <div class="mb-3">
                    <label for="login_email" class="form-label">Email</label>
                    <input type="email" name="email" id="login_email" placeholder="Email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="login_password" class="form-label">Password</label>
                    <input type="password" name="password" id="login_password" placeholder="Password"
                        class="form-control" required>
                </div>
                <div class="d-grid-right">
                    <button type="submit" class="btn btn-dlcv fw-bold px-4 glass-card rounded-pill">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->endSection() ?>