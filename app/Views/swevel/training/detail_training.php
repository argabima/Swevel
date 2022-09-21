<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>

<style>
    .detail-img {
        max-width: 500px;
    }
</style>
<section id="detail-training">
    <div class="container">
        <div class="title text-center mt-5 mb-lg-5 pb-4 fw-bold h3">Training Softskill</div>
        <div class="row mb-5">
            <div class="col-lg-6 overflow-hidden">
                <img src="/img/Frame 69.png" alt="" class="detail-img">
            </div>
            <div class="col-lg-6 mt-sm-4">
                <!-- <div class="h5 fw-bold mb-3">Penjelasan Course</div> -->
                <div class="row mb-4">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-sm-9 d-block text-sm-end">
                                <div class="card-text text-decoration-line-through text-secondary"><small>Rp 500.000</small></div>
                                <div class="card-text h5 fw-bold text-danger">Rp 325.000</div>
                            </div>
                            <div class="col-lg-6 col-sm-3 text-sm-start">
                                <button class="btn btn-sm btn-purple-100">Join Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                </p>
                <div class="h5 fw-bold mb-3">Penjelasan Course</div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                </p>
                <div class="h5 fw-bold mb-3">Penjelasan Course</div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                </p>
            </div>
        </div>

        <div class="row mt-lg-5 pt-lg-5 mb-lg-5 pb-5">
            <div class="col-6 border-end">
                <div class="text-center fw-bold h5 mb-5">Timeline Course</div>
                <div class="text-purple fw-bold mb-3">23 September 2022 - 26 September 2022</div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati ex eaque, veniam omnis sapiente autem saepe in inventore iusto odio exercitationem quasi assumenda. Vero hic ipsa earum dolor, voluptas pariatur. Nesciunt dolorem ad, doloribus excepturi enim veniam maiores id hic quaerat dignissimos aliquam, ea ipsam labore unde a obcaecati et.</p>
                <div class="text-purple fw-bold mb-3">23 September 2022 - 26 September 2022</div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati ex eaque, veniam omnis sapiente autem saepe in inventore iusto odio exercitationem quasi assumenda. Vero hic ipsa earum dolor, voluptas pariatur. Nesciunt dolorem ad, doloribus excepturi enim veniam maiores id hic quaerat dignissimos aliquam, ea ipsam labore unde a obcaecati et.</p>
                <div class="text-purple fw-bold mb-3">23 September 2022 - 26 September 2022</div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati ex eaque, veniam omnis sapiente autem saepe in inventore iusto odio exercitationem quasi assumenda. Vero hic ipsa earum dolor, voluptas pariatur. Nesciunt dolorem ad, doloribus excepturi enim veniam maiores id hic quaerat dignissimos aliquam, ea ipsam labore unde a obcaecati et.</p>
            </div>
            <div class="col-6 border-start">
                <div class="text-center fw-bold h5 mb-5">Our Speakers</div>
                <!-- LOGIKA : buat angka dahulu. jika angka ganjil maka gambar berada di kiri, tetapi jika angkanya genap maka gambar berada di kanan.-->
                <?php for ($i = 1; $i <= 3; $i++) : ?>
                    <!-- jika angka ganjil maka gambar di kiri -->
                    <?php if ($i % 2 == 1) :  ?>
                        <div class="card mb-3 border-0 mb-5" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="card-img-circle">
                                        <img src="https://img.okezone.com/content/2022/05/04/33/2589370/manager-rizky-billar-sebut-rico-valentino-babak-belur-dipukuli-10-orang-TjvvVtjDZO.jpg" class=" img-circle" alt="...">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-purple fw-bold">Mr Albert Douge</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else :  ?>
                        <!-- jika angka genap maka gambar di kanan -->
                        <div class="card mb-3 border-0 mb-5" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-purple fw-bold">Mr Albert Douge</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-img-circle">
                                        <img src="https://img.okezone.com/content/2022/05/04/33/2589370/manager-rizky-billar-sebut-rico-valentino-babak-belur-dipukuli-10-orang-TjvvVtjDZO.jpg" class=" img-circle" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>

        <div class="text-center mb-5">
            <button class="btn btn-purple-100">Join Now</button>
        </div>

        <div class="similiar-event mb-5">
            <div class="h3 fw-bold">Similiar Event</div>
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <?php for ($i = 1; $i < 5; $i++) :  ?>
                            <div class="card-team swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="/img/Frame 58.png" alt="" class="card-img">
                                    </div>
                                </div>
                                <div class="card-content ps-4">
                                    <h2 class="name fw-bold text-purple-100">Training Softskill</h2>
                                    <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos alias itaque consequatur magni tenetur in quo molestias suscipit quibusdam et.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6  d-block">
                                            <div class="card-text text-decoration-line-through text-secondary"><small>Rp 500.000</small></div>
                                            <div class="card-text h5 fw-bold text-danger">Rp 325.000</div>
                                        </div>
                                        <div class="col-lg-6 col-md-6  my-sm-3">
                                            <button class="btn btn-sm btn-purple-100">Join Now</button>
                                        </div>
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
    </div>
</section>

<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->include('swevel/training/footer'); ?>
<?= $this->endSection(); ?>