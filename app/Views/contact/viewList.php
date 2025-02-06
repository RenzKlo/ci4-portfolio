<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class=" position-relative container mt-5">
    <h1 class="text-center fw-bold  mb-4">Contact Submissions</h1>
    <div class="container rounded bg-dark overflow-scroll py-5 
    ">
        <table class="table table-hover table-custom">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody class="table-striped">
                <?php foreach ($messages as $message): ?>
                    <tr>
                        <td><?= esc($message['name']) ?></td>
                        <td><?= esc($message['email']) ?></td>
                        <td><?= esc($message['message']) ?></td>
                        <td><?= esc($message['created_at']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>