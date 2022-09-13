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
<main>
    <!-- /.Desktop -->
    <section1 class="box">
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
    </section1>

    <!-- /.Pengenalan -->

    <section>
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
    </section>

</main>