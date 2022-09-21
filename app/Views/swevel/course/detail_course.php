<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>

<style>
    .detail-img {
        max-width: 700px;
    }

    .detail-img2 {
        max-width: 550px;
        margin-left: 27;
    }
</style>

<?php
// untuk membuat lingkaran 4x4
function circlecourse()
{
    $star = 4;
    for ($a = 0; $a < $star; $a++) {
        echo '<div class="d-flex">';
        for ($i = 1; $i <= $a; $i++) {
            echo '<div class="circlecourse"></div>';
        }
        for ($c = $star; $c > $a; $c -= 1) {
            echo '<div class="circlecourse"></div>';
        }
        echo '</div>';
        echo '<br>';
    }
}
?>

<section id="detail-course">
    <div class="container">
        <div class="row mt-5 mb-5 justify-content-center">
            <img src="/img/poster.png" class="detail-img">
        </div>
        <div class="row" id="section1" style="height: 200px; margin:auto;">
            <div class="col" style="margin: auto;">
                <div class="circle-4 d-sm-none d-lg-block">
                    <?= circlecourse(); ?>
                </div>
            </div>
            <div class="col" style="margin: auto;">
                <div class="kotak-text">
                    <div class="row" style="color: white;">
                        <h3>How to start being a Software Developer.</h3>
                    </div>
                </div>
                <div class="responsive">
                    <div class="row" id="hidden">
                        <h4><s>Rp. 500.000</s></h4>
                        <h4 style="color: red;">RP. 325.000</h4>
                        <button class="btn btn-sm btn-purple-100">Join Now</button>
                    </div>
                </div>
            </div>
            <div class="col" style="margin: auto;">
                <div class="borderkotak"></div>
            </div>
            <div class="col align-self-start" style="margin: auto;">
                <div class="row">
                    <h4><s>Rp. 500.000</s></h4>
                    <h4 style="color: red;">RP. 325.000</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-3 text-sm-start">
                        <button class="btn btn-sm btn-purple-100">Join Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5 pb-5" id="section2">
            <div class="row justify-content-start" style="height: 80px;">
                <div class="line"></div>
                <div class="col">
                    <div class="text2">
                        <h1 style="color: black;">Benefits you get when join our course</h1>
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-1">
                    <i class="bi-alarm-fill"></i>
                </div>

                <div class="col-3">
                    <div class="row pr-3" style="color: #45188B;">
                        <h6>Fleksibel</h6>
                    </div>
                    <div class="row pr-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-1">
                    <i class="bi-alarm-fill"></i>
                </div>

                <div class="col-3">
                    <div class="row pr-3" style="color: #45188B;">
                        <h6>Fleksibel</h6>
                    </div>
                    <div class="row pr-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>

                <div class="col-1">
                    <i class="bi-alarm-fill"></i>
                </div>
                <div class="col-3">
                    <div class="row pr-3" style="color: #45188B;">
                        <h6>Fleksibel</h6>
                    </div>
                    <div class="row pr-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2 mb-5 pb-5 justify-content-center" id="section3">
            <div class="col">
                <img src="/img/poster2.png" class="detail-img2">
            </div>
            <div class="col">
                <h4><strong>Penjelasan Course</strong></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.</p>
                <p>Tristique senectus et netus et. Sed cras ornare arcu dui vivamus. Molestie ac feugiat sed lectus. Cursus metus aliquam eleifend mi in nulla. Eget arcu dictum varius duis at. Tempor nec feugiat nisl pretium. Diam maecenas ultricies mi eget mauris pharetra et ultrices.</p>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut. </p>
            </div>
            <div class="circle-5 d-sm-none d-lg-block">
                <?= circlecourse(); ?>
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

        <div class="row mb-5 justify-content-start">
            <h1 style="color: black; letter-spacing:normal"><strong>Related Course</strong></h1>
        </div>

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
    </div>

</section>

<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->include('swevel/training/footer'); ?>
<?= $this->endSection(); ?>