<?php
// untuk membuat lingkaran 4x4
function circle()
{
    $star = 4;
    for ($a = 0; $a < $star; $a++) {
        echo '<div class="d-flex">';
        for ($i = 1; $i <= $a; $i++) {
            echo '<div class="circle"></div>';
        }
        for ($c = $star; $c > $a; $c -= 1) {
            echo '<div class="circle"></div>';
        }
        echo '</div>';
        echo '<br>';
    }
}
?>

<style>
    .img-weight {
        width: 220px;
        height: 450px;
    }
</style>
<main>
    <!-- /.Desktop -->
    <section class="box">
        <div class="container">
            <div class="col-sm-7 mt-5 mb-5">
                <div class="text">
                    <h1 class="fw-bold">One of <span class="ch_color">Information Technology</span> Service Industry
                    </h1>

                    <br><br>
                    <p class="cover-text">PT. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. Swevel Universal Media prioritize System End User and gives creative solution IT. PT. Swevel
                        Universal Media focus in WEB Developer and Mobile Smart Phone Application.</p>
                    <br><br>
                </div>
                <div class="button-wrapper">
                    <button class="button5"><strong>MORE &nbsp;</strong>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="kotak"></div>
                    <div class="kotak2"></div>
                    <!-- <div class="cover"></div> -->
                </div>
                <div class="col">
                    <div class="gambar">
                        <img src="/img/Gambar.png" class="img-fluid" alt="...">
                    </div>
                    <div class="circle-3 d-sm-none d-lg-block">
                        <?= circle(); ?>
                    </div>
                    <!-- <div class="cover2"></div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- /.Pengenalan -->

    <section class="box2">
        <div class="container">
            <div class="row" id="section2">
                <div class="col-8">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item mb-3" id="main">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h2><strong>Definition Of Swevel</strong></h2>
                                    <div class="button-0">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                    <p style="color: #474545">PT. Swevel Universal Media</p>
                                </button>
                            </h2>

                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>PT. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. Swevel Universal Media prioritize System End User and gives creative solution IT.
                                        PT. Swevel Universal Media focus in WEB Developer and Mobile Smart Phone Application.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h2><strong>Visi & Mision</strong></h2>
                                    <div class="button-0">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                    <p style="color: #474545">PT. Swevel Universal Media</p>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p><strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h2><strong>Location</strong></h2>
                                    <div class="button-0">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                    <p style="color: #474545">PT. Swevel Universal Media</p>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p><strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="big-O"></div>
                    <div class="gmbr">
                        <img src="/img/separo.png" class="img-weight">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section>
        <div class="container mt-5">
            <h1 class="fw-bold">What is <span class="ch_color">SWEVEL</span> ?</h1>
            <div class="row mb-3">
                <div class="col">
                    <p>PT. Swevel Universal Media</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <img src="/img/pexels-fauxels-3184652 1.jpeg" width="100%">
                </div>
            </div>
            <div class="row justify-content-between mb-3">
                <div class="col-4">
                    <h4><strong>Definisi Swevel</strong></h4>
                </div>
                <div class="col-4">
                    <h4><strong>Visi Misi Swevel</strong></h4>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <div class="row pr-3">
                        <p>PT. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. Swevel Universal Media prioritize System End User and gives creative solution IT.
                            PT. Swevel Universal Media focus in WEB Developer and Mobile Smart Phone Application.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="row pr-3">
                        <p>PT. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. Swevel Universal Media prioritize System End User and gives creative solution IT.
                            PT. Swevel Universal Media focus in WEB Developer and Mobile Smart Phone Application.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="row pr-3">
                        <p>PT. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. Swevel Universal Media prioritize System End User and gives creative solution IT.
                            PT. Swevel Universal Media focus in WEB Developer and Mobile Smart Phone Application.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

</main>