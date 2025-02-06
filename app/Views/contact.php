<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container position-relative vh-100 pt-5 mx-auto align-items-center">
    <h1 class="text-large mb-5 fw-bold text-center">Contact</h1>
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
                <form action="<?= base_url('contact/submit') ?>" method="POST">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" placeholder="Name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message"
                            required></textarea>
                    </div>
                    <div class="d-grid-right">
                        <button type="submit" class="btn btn-dlcv fw-bold px-4 glass-card rounded-pill ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>