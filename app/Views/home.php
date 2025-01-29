<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="vh-100 position-relative d-flex justify-content-center align-items-center">
    <div class="container align-items-center justify-content-center">
        <div class="">
            <div class="pb-3 text-center">
                <h4 class="fs-4">
                    Hello there I'm Kent!
                </h4>
                <h1 class="fw-bold text-large">
                    A Full Stack Developer
                </h1>
                I build apps both for mobile and web.
            </div>
            <div class="justify-content-center d-flex flex-column align-items-center">
                <div class="d-flex mb-2">
                    <a class="btn icon-btn" href="https://github.com/RenzKlo" target="_blank"><i
                            class=" bi bi-instagram" style="font-size: 1.5rem;"></i></a>
                    <a class="btn icon-btn" target="_blank"><i class="bi bi-linkedin "
                            style="font-size: 1.5rem;"></i></a>
                    <a class="btn icon-btn" target="_blank"><i class="bi bi-envelope"
                            style="font-size: 1.5rem;"></i></a>
                    <a class="btn icon-btn" target="_blank"><i class="bi bi-github " style="font-size: 1.5rem;"></i></a>
                </div>
                <a class="btn btn-dlcv fw-bold px-4 glass-card rounded-pill  ">
                    <i class="bi bi-download "></i><span class="mx-2">Download CV</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="vh-80 d-flex justify-content-center align-items-center ">
    <div class="d-flex flex-wrap justify-content-center align-items-center">
        <div class="d-flex justify-content-center flex-wrap">
            <div class="card glass-card mx-2 my-3" style="width: 18rem;">
                <div class="card-body text-center pb-4">
                    <div class="container-fluid d-flex justify-content-center mb-3">
                        <i class="bi bi-code-slash" style="font-size: 3rem;"></i>
                    </div>
                    <h5 class="">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
        </div>

        <div class="card glass-card mx-2 my-3" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the card's content.</p>

            </div>
        </div>

        <div class="card mx-2 my-3" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the card's content.</p>

            </div>
        </div>
    </div>
    </div>
</section>
<section class="tech-stack position-relative my-5">
    <div class="container">
        <h1 class="text-center fw-bold mb-4">Tech Stack</h1>
        <div class="d-flex flex-wrap justify-content-center mb-4">
            <button class="btn mx-2 my-1 filter-btn" data-filter="frontend">Frontend</button>
            <button class="btn mx-2 my-1 filter-btn" data-filter="backend">Backend</button>
            <button class="btn mx-2 my-1 filter-btn" data-filter="mobile">Mobile</button>
            <button class="btn mx-2 my-1 filter-btn" data-filter="web">Web</button>
            <button class="btn mx-2 my-1 filter-btn" data-filter="design">Design</button>
            <button class="btn mx-0 my-1 reset-btn d-none"><i class="bi bi-x-circle m-2"></i><span class="">Reset</span></button>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 mb-4 tech-item" data-category="frontend">
                <div class="card glass-card ">
                    <img src="path/to/frontend-image.jpg" class="card-img-top" alt="Frontend">
                    <div class="card-body text-center">
                        <h5 class="card-title">Frontend</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 tech-item" data-category="backend">
                <div class="card h-100">
                    <img src="path/to/backend-image.jpg" class="card-img-top" alt="Backend">
                    <div class="card-body text-center">
                        <h5 class="card-title">Backend</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 tech-item" data-category="mobile">
                <div class="card h-100">
                    <img src="path/to/mobile-image.jpg" class="card-img-top" alt="Mobile">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mobile</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 tech-item" data-category="web">
                <div class="card h-100">
                    <img src="path/to/web-image.jpg" class="card-img-top" alt="Web">
                    <div class="card-body text-center">
                        <h5 class="card-title">Web</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 tech-item" data-category="design">
                <div class="card h-100">
                    <img src="path/to/design-image.jpg" class="card-img-top" alt="Design">
                    <div class="card-body text-center">
                        <h5 class="card-title">Design</h5>
                    </div>
                </div>
            </div>
            <!-- Repeat for other tech items -->
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const techItems = document.querySelectorAll('.tech-item');
    const resetButton = document.querySelector('.reset-btn');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

            // Remove 'active' class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));

            // Add 'active' class to the clicked button
            button.classList.add('active');

            // Show the reset button
            resetButton.classList.remove('d-none');

            techItems.forEach(item => {
                const categories = item.getAttribute('data-category').split(' ');
                if (categories.includes(filter)) {
                    item.classList.remove('grayed-out');
                } else {
                    item.classList.add('grayed-out');
                }
            });
        });
    });

    resetButton.addEventListener('click', () => {
        // Remove 'active' class from all buttons
        filterButtons.forEach(btn => btn.classList.remove('active'));

        // Hide the reset button
        resetButton.classList.add('d-none');

        // Show all tech items
        techItems.forEach(item => item.classList.remove('grayed-out'));
    });
});
</script>


<?= $this->endSection() ?>