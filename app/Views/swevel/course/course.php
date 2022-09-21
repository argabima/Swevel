<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<?= $this->include('swevel/training/page_first'); ?>

<main>
    <section>
        <div class="container">
            <div class="row text-center">
                <div class="col-category col-4 text-end">
                    <a class="btn btn-category" href="#" role="button">
                        <h2>Course.</h2>
                    </a>
                </div>
                <div class="col-category col-4">
                    <a class="btn btn-category" href="#" role="button">
                        <h2>Event.</h2>
                    </a>
                </div>
                <div class="col-category col-4 text-start">
                    <a class="btn btn-category" href="#" role="button">
                        <h2>Training.</h2>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="course-section">
        <div class="container mt-5 pt-4">
            <div class="row text-center">
                <h1><strong>COURSE</strong></h1>
            </div>

            <div class="row justify-content-center">
                <div class="row mt-4 w-50 justify-content-center">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search more event here">
                        <button class="btn btn-purple" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="mt-5 d-flex justify-content-center">
                <div class="mx-3">
                    <button type="button" class="btn btn-light active">Webinar</button>
                </div>
                <div class="mx-3">
                    <button type="button" class="btn btn-light">Bootcamp</button>
                </div>
                <div class="mx-3">
                    <button type="button" class="btn btn-light">Technology</button>
                </div>
                <div class="mx-3">
                    <button type="button" class="btn btn-light">Bootcamp</button>
                </div>
                <div class="mx-3">
                    <button type="button" class="btn btn-light">Bootcamp</button>
                </div>
            </div>
            <div class="row text-center mt-3">
                <p><a href="#" style="color: #5423a1;" class="text-decoration-none">more</a></p>
            </div>
            <div class="row justify-content-start">
                <h1><strong>My <span style="color: #5423a1;">Course</span></strong></h1>
            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-md-4">
                    <div class="card card-course p-3 mb-2 overflow-hidden shadow border-0 shadow">
                        <div class="card-body">
                            <div class="mt-3">
                                <h3 class="heading"><strong>How to Start being a Software Developer</strong>
                                </h3>
                                <div class="mt-4">
                                    <div class="detail">
                                        <button type="button" class="btn btn11">See my course</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-done">
                        <button type="button" class="btn btn12">DONE</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-course p-3 mb-2  overflow-hidden shadow border-0 shadow">
                        <div class="card-body">
                            <div class="mt-3">
                                <h3 class="heading"><strong>How to Start being a Software Developer</strong>
                                </h3>
                                <div class="mt-4">
                                    <div class="detail">
                                        <button type="button" class="btn btn11">See my course</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="button-done">
                        <button type="button" class="btn btn12">DONE</button>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<section id="course">
    <div class="container mt-5">
        <div class="h1 mt-4 fw-bold">Popular <span class="text-purple-100">Course</span></div>
        <div class="slide-container swiper">
            <div class="slide-content slide-content-course">
                <div class="card-wrapper swiper-wrapper">
                    <?php for ($i = 1; $i < 10; $i++) : ?>
                        <div class="card card-course swiper-slide shadow border-0">
                            <div class="course-circle-time fw-bold">3 Weeks</div>
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image.">
                                    <div class="course-img-polygon">
                                        <img src="https://img.freepik.com/premium-photo/astronaut-outer-open-space-planet-earth-stars-provide-background-erforming-space-planet-earth-sunrise-sunset-our-home-iss-elements-this-image-furnished-by-nasa_150455-16829.jpg?w=2000" alt="" class="card-img">
                                    </div>
                                </div>
                            </div>
                            <div class="card-content ps-4 py-4">
                                <h5 class="card-title fw-bold lh-base">How to start being a Software Developer </h5>
                                <div class="row">
                                    <div class="col-sm-8 col-md-6 col-lg-12">
                                        <p class="card-text h6 text-decoration-line-through text-secondary">Rp 500.000</p>
                                        <p class="card-text h5 fw-bold text-danger">Rp 325.000</p>
                                    </div>
                                    <div class="col-sm-4 col-md-6 col-lg-12 text-sm-end  text-lg-start">
                                        <button class="btn btn-sm btn-purple-100 mt-2">Join Now</button>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="text-decoration-none btn btn-sm btn-light fw-bold course-btn-read-more">Read More</a>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="h1 mt-5 fw-bold">Sale <span class="text-purple-100">Course</span></div>
        <div class="slide-container swiper">
            <div class="slide-content slide-content-course">
                <div class="card-wrapper swiper-wrapper">
                    <?php for ($i = 1; $i < 10; $i++) : ?>
                        <div class="card card-course swiper-slide shadow border-0 pb-3">
                            <div class="course-circle-time fw-bold">3 Weeks</div>
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image.">
                                    <div class="course-img-polygon">
                                        <img src="https://img.freepik.com/premium-photo/astronaut-outer-open-space-planet-earth-stars-provide-background-erforming-space-planet-earth-sunrise-sunset-our-home-iss-elements-this-image-furnished-by-nasa_150455-16829.jpg?w=2000" alt="" class="card-img">
                                    </div>
                                </div>
                            </div>
                            <div class="card-content ps-4 py-4">
                                <h5 class="card-title fw-bold lh-base">How to start being a Software Developer </h5>
                                <div class="row">
                                    <div class="col-sm-8 col-md-6 col-lg-12">
                                        <p class="card-text h6 text-decoration-line-through text-secondary">Rp 500.000</p>
                                        <p class="card-text h5 fw-bold text-danger">Rp 325.000</p>
                                    </div>
                                    <div class="col-sm-4 col-md-6 col-lg-12 text-sm-end  text-lg-start">
                                        <button class="btn btn-sm btn-purple-100 mt-2">Join Now</button>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="text-decoration-none btn btn-sm btn-light fw-bold course-btn-read-more">Read More</a>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->include('swevel/training/footer'); ?>
<?= $this->endSection(); ?>