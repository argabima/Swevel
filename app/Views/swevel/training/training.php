<section id="training">
    <div class="container mt-5">
        <div class="most-popular mx-5 px-4">
            <h2 class="fw-bold">Most Popular</h2>
            <div class="slide-container swiper">
                <div class="slide-content text-center">
                    <div class="card-wrapper swiper-wrapper">
                        <?php for ($i = 1; $i < 10; $i++) : ?>
                            <div class="swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="/img/Frame 58.png" alt="" class="card-img">
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="training-list mx-lg-5 px-4 mt-5 pt-5">
            <h2 class="fw-bold mb-5">List For You</h2>
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <div class="card mb-3 border-0 mb-5 ps-4 py-3">
                    <div class="row g-0">
                        <div class="col-md-3 text-sm-center">
                            <img src="/img/image 9.png" class="img-fluid rounded-start" alt="..." style="max-width: 200px;">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title text-purple-100 fw-bold">Training Softskill</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut. </p>
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
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>