<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="asset/vendor/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    <link rel="stylesheet" href="asset/vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/vendor/fontawesome612/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="asset/css/custom.css">
    <title>Swevel | Event</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-white fixed-top text-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="event">

        <div class="bg-light-purple pb-2 pt-5">
            <div class="container mt-5">
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="#">Software Development</a></li>
                        <li class="breadcrumb-item ls-1" aria-current="page">Event</li>
                    </ol>
                </nav>
            </div>
        </div>

        <section id="event1">
            <div class="container pt-5">
                <div class="row">

                    <div class="col-sm-12 col-md-6">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <img src="asset/image/event/pablo.png" alt="" width="100%">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <div class="text ls-1 text-end">
                            <h3 class="fw-light mb-2">Discovering Amazing <span class="fw-bold">Event</span></h3>
                            <h3><strong>Just For You</strong></h3>
                            <p class="text-secondary mt-4 fw-normal">Get Your Ticket Now !</p>
                        </div>
                        <div class="row row-1 justify-content-end">
                            <div class="col-8">
                                <div class="input-group input1">
                                    <span class="input-group-text border-0 bg-transparent" id="basic-addon1">
                                        <i class="bi bi-search text-secondary fs-5"></i>
                                    </span>
                                    <input type="text" class="form-control border-0" placeholder="Type here ..." aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="popular-event">
            <div class="container">
                <div class="row">
                    <div class="col-7 my-auto">
                        <h5><strong>Popular Event</strong></h5>
                    </div>
                    <div class="col-5 my-auto">
                        <h6 class="fw-semibold ls-2 text-dark-purple text-end">More..</h6>
                    </div>
                </div>
                <div class="row ">
                    <div class="splide">
                        <div class="splide__track">
                            <div class="splide__list">
                                <div class="col-md-4 splide__slide m-2">
                                    <div class="card card-event">
                                        <div class="card-body p-3">
                                            <img src="asset/image/event/card.png" alt="" width="100%">
                                        </div>
                                        <div class="card-footer pb-4 pt-3">
                                            <p class="ls-1 m-0">Millenials are basically keeping the summer blockbuster</p>
                                            <div class="detail">
                                                <div class="row">
                                                    <div class="col-1 my-auto mt-3">
                                                        <i class="fa-solid fa-location-dot text-purple fs-5"></i>
                                                    </div>
                                                    <div class="col-11 mt-3">
                                                        <p class="m-0 ls-2 fw-semibold">Stadion Mandala Krida</p>
                                                        <p class="m-0 ls-2 text-secondary" style="font-size: 10pt">Yogyakarta</p>
                                                    </div>
                                                    <div class="col-1 my-auto mt-2 mb-3">
                                                        <i class="bi bi-calendar4 text-purple fs-6"></i>
                                                    </div>
                                                    <div class="col-11 mt-2 mb-3">
                                                        <p class="m-0 ls-2 fw-semibold">21 - 22 August 2022</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-6 text-center">
                                                    <button class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</button>
                                                </div>
                                                <div class="col-3 my-auto text-end">
                                                    <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                                    <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 splide__slide m-2">
                                    <div class="card card-event">
                                        <div class="card-body p-3">
                                            <img src="asset/image/event/card.png" alt="" width="100%">
                                        </div>
                                        <div class="card-footer pb-4 pt-3">
                                            <p class="ls-1 m-0">Millenials are basically keeping the summer blockbuster</p>
                                            <div class="detail">
                                                <div class="row">
                                                    <div class="col-1 my-auto mt-3">
                                                        <i class="fa-solid fa-location-dot text-purple fs-5"></i>
                                                    </div>
                                                    <div class="col-11 mt-3">
                                                        <p class="m-0 ls-2 fw-semibold">Stadion Mandala Krida</p>
                                                        <p class="m-0 ls-2 text-secondary" style="font-size: 10pt">Yogyakarta</p>
                                                    </div>
                                                    <div class="col-1 my-auto mt-2 mb-3">
                                                        <i class="bi bi-calendar4 text-purple fs-6"></i>
                                                    </div>
                                                    <div class="col-11 mt-2 mb-3">
                                                        <p class="m-0 ls-2 fw-semibold">21 - 22 August 2022</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-6 text-center">
                                                    <button class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</button>
                                                </div>
                                                <div class="col-3 my-auto text-end">
                                                    <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                                    <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 splide__slide m-2">
                                    <div class="card card-event">
                                        <div class="card-body p-3">
                                            <img src="asset/image/event/card.png" alt="" width="100%">
                                        </div>
                                        <div class="card-footer pb-4 pt-3">
                                            <p class="ls-1 m-0">Millenials are basically keeping the summer blockbuster</p>
                                            <div class="detail">
                                                <div class="row">
                                                    <div class="col-1 my-auto mt-3">
                                                        <i class="fa-solid fa-location-dot text-purple fs-5"></i>
                                                    </div>
                                                    <div class="col-11 mt-3">
                                                        <p class="m-0 ls-2 fw-semibold">Stadion Mandala Krida</p>
                                                        <p class="m-0 ls-2 text-secondary" style="font-size: 10pt">Yogyakarta</p>
                                                    </div>
                                                    <div class="col-1 my-auto mt-2 mb-3">
                                                        <i class="bi bi-calendar4 text-purple fs-6"></i>
                                                    </div>
                                                    <div class="col-11 mt-2 mb-3">
                                                        <p class="m-0 ls-2 fw-semibold">21 - 22 August 2022</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-6 text-center">
                                                    <button class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</button>
                                                </div>
                                                <div class="col-3 my-auto text-end">
                                                    <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                                    <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 splide__slide m-2">
                                    <div class="card card-event">
                                        <div class="card-body p-3">
                                            <img src="asset/image/event/card.png" alt="" width="100%">
                                        </div>
                                        <div class="card-footer pb-4 pt-3">
                                            <p class="ls-1 m-0">Millenials are basically keeping the summer blockbuster</p>
                                            <div class="detail">
                                                <div class="row">
                                                    <div class="col-1 my-auto mt-3">
                                                        <i class="fa-solid fa-location-dot text-purple fs-5"></i>
                                                    </div>
                                                    <div class="col-11 mt-3">
                                                        <p class="m-0 ls-2 fw-semibold">Stadion Mandala Krida</p>
                                                        <p class="m-0 ls-2 text-secondary" style="font-size: 10pt">Yogyakarta</p>
                                                    </div>
                                                    <div class="col-1 my-auto mt-2 mb-3">
                                                        <i class="bi bi-calendar4 text-purple fs-6"></i>
                                                    </div>
                                                    <div class="col-11 mt-2 mb-3">
                                                        <p class="m-0 ls-2 fw-semibold">21 - 22 August 2022</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-6 text-center">
                                                    <button class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</button>
                                                </div>
                                                <div class="col-3 my-auto text-end">
                                                    <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                                    <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 splide__slide m-2">
                                    <div class="card card-event">
                                        <div class="card-body p-3">
                                            <img src="asset/image/event/card.png" alt="" width="100%">
                                        </div>
                                        <div class="card-footer pb-4 pt-3">
                                            <p class="ls-1 m-0">Millenials are basically keeping the summer blockbuster</p>
                                            <div class="detail">
                                                <div class="row">
                                                    <div class="col-1 my-auto mt-3">
                                                        <i class="fa-solid fa-location-dot text-purple fs-5"></i>
                                                    </div>
                                                    <div class="col-11 mt-3">
                                                        <p class="m-0 ls-2 fw-semibold">Stadion Mandala Krida</p>
                                                        <p class="m-0 ls-2 text-secondary" style="font-size: 10pt">Yogyakarta</p>
                                                    </div>
                                                    <div class="col-1 my-auto mt-2 mb-3">
                                                        <i class="bi bi-calendar4 text-purple fs-6"></i>
                                                    </div>
                                                    <div class="col-11 mt-2 mb-3">
                                                        <p class="m-0 ls-2 fw-semibold">21 - 22 August 2022</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-6 text-center">
                                                    <button class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</button>
                                                </div>
                                                <div class="col-3 my-auto text-end">
                                                    <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                                    <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="category-event">
            <div class="container">

                <div class="row">
                    <div class="col-7 my-auto">
                        <h5><strong>Category Event</strong></h5>
                    </div>
                    <div class="col-5 my-auto">
                        <h6 class="fw-semibold ls-2 text-dark-purple text-end">More..</h6>
                    </div>
                </div>

                <ul class="nav nav-pills mt-3 justify-content-center" id="pills-tab" role="tablist">
                    <a class="nav-link active" data-bs-toggle="pill" data-bs-target="#webminar" type="button" role="tab">Webminar</a>
                    <a class="nav-link" data-bs-toggle="pill" data-bs-target="#bootcamp" type="button" role="tab">Bootcamp</a>
                    <a class="nav-link" data-bs-toggle="pill" data-bs-target="#webminar" type="button" role="tab">Webminar</a>
                    <a class="nav-link" data-bs-toggle="pill" data-bs-target="#bootcamp" type="button" role="tab">Bootcamp</a>
                </ul>

                <div class="row justify-content-center pt-5">
                    <div class="col-3 text-center" style="border-bottom: 2px solid #45188b">
                        <h5 class="fw-bold text-dark-purple ls-1">6 Result</h5>
                    </div>
                </div>

                <div class="pills-tabs tab-content" id="pills-tabContent">

                    <div id="webminar" class="nav-content tab-pane fade show active" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 mt-3">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <img src="asset/image/event/card.png" alt="" width="100%">
                                    </div>
                                    <div class="card-footer pb-4 pt-3">
                                        <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                        <div class="row justify-content-end">
                                            <div class="col-6 text-center">
                                                <button class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</button>
                                            </div>
                                            <div class="col-3 my-auto text-end">
                                                <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                                <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-3">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <img src="asset/image/event/card.png" alt="" width="100%">
                                    </div>
                                    <div class="card-footer pb-4 pt-3">
                                        <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                        <div class="row justify-content-end">
                                            <div class="col-6 text-center">
                                                <button class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</button>
                                            </div>
                                            <div class="col-3 my-auto text-end">
                                                <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                                <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-3">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <img src="asset/image/event/card.png" alt="" width="100%">
                                    </div>
                                    <div class="card-footer pb-4 pt-3">
                                        <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                        <div class="row justify-content-end">
                                            <div class="col-6 text-center">
                                                <button class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</button>
                                            </div>
                                            <div class="col-3 my-auto text-end">
                                                <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                                <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-3">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <img src="asset/image/event/card.png" alt="" width="100%">
                                    </div>
                                    <div class="card-footer pb-4 pt-3">
                                        <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                        <div class="row justify-content-end">
                                            <div class="col-6 text-center">
                                                <button class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</button>
                                            </div>
                                            <div class="col-3 my-auto text-end">
                                                <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                                <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-3">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <img src="asset/image/event/card.png" alt="" width="100%">
                                    </div>
                                    <div class="card-footer pb-4 pt-3">
                                        <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                        <div class="row justify-content-end">
                                            <div class="col-6 text-center">
                                                <button class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</button>
                                            </div>
                                            <div class="col-3 my-auto text-end">
                                                <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                                <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-3">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <img src="asset/image/event/card.png" alt="" width="100%">
                                    </div>
                                    <div class="card-footer pb-4 pt-3">
                                        <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                        <div class="row justify-content-end">
                                            <div class="col-6 text-center">
                                                <button class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</button>
                                            </div>
                                            <div class="col-3 my-auto text-end">
                                                <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                                <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="bootcamp" class="nav-content tab-pane fade" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 mt-3">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <img src="asset/image/event/card.png" alt="" width="100%">
                                    </div>
                                    <div class="card-footer pb-4 pt-3">
                                        <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                        <div class="row justify-content-end">
                                            <div class="col-6 text-center">
                                                <button class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</button>
                                            </div>
                                            <div class="col-3 my-auto text-end">
                                                <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                                <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-3">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <img src="asset/image/event/card.png" alt="" width="100%">
                                    </div>
                                    <div class="card-footer pb-4 pt-3">
                                        <p class="ls-1">Millenials are basically keeping the summer blockbuster</p>
                                        <div class="row justify-content-end">
                                            <div class="col-6 text-center">
                                                <button class="btn btn-sm btn-purple btn-event fw-light ls-05 px-3 py-2 rounded-5">ENROLL EVENT</button>
                                            </div>
                                            <div class="col-3 my-auto text-end">
                                                <span class="fa-regular fa-heart text-dark-purple fs-5"></span>
                                                <span class="bi bi-share ms-3 text-dark-purple fs-5"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <footer class="bg-light-purple">
        <div class="container">
            <div class="row">
                <h5><strong>Make it different</strong></h5>
                <div class="col-sm-12 col-md-5">
                    <p>Swevel Universal Media prioritize System End User and gives creative solution IT.
                        PT. Swevel Universal Media focus in WEB Developer and Mobile Smart Phone Application.</p>
                </div>
                <div class="col-sm-12 col-md-3">
                    <ul class="list-group">
                        <li class="list-group-item p-0 border-0 bg-transparent"><a href="#">About Us</a></li>
                        <li class="list-group-item p-0 border-0 bg-transparent"><a href="#">Services</a></li>
                        <li class="list-group-item p-0 border-0 bg-transparent"><a href="#">Portfolio</a></li>
                        <li class="list-group-item p-0 border-0 bg-transparent"><a href="#">Testimoni</a></li>
                        <li class="list-group-item p-0 border-0 bg-transparent"><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4 my-auto icon text-center">
                    <div class="row">
                        <div class="col-12">
                            <h3>LOGO<br>SWEVEL</h3>
                        </div>
                        <div class="col-12 mt-3">
                            <a href="#" title="Twitter"><i class="fa-brands fs-4 fa-twitter"></i></a>
                            <a href="#" title="Instagram"><i class="fa-brands fs-4 fa-instagram"></i></a>
                            <a href="#" title="Linkedin"><i class="fa-brands fs-4 fa-linkedin"></i></a>
                            <a href="#" title="Facebook"><i class="fa-brands fs-4 fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white">
            <h6 class="text-center text-purple ls-2 fw-semibold">Swevel | 2022</h6>
        </div>
    </footer>

</body>

<script src="asset/vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
<script src="asset/vendor/fontawesome612/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>

<script>
    $(document).ready(function() {
        searchHover = function() {
            let input1 = $('#event1 .input1 input');
            input1.on('focus', function() {
                $(this).parent().addClass('focus');
            });
            input1.on('blur', function() {
                if ($(this).val().length == 0) {
                    $(this).parent().removeClass('focus');
                }
            });
        }
        searchHover();

        slider = function() {
            let mediaSm = window.matchMedia("(max-width: 576px)");
            let mediaMd = window.matchMedia("(min-width: 577px)");
            if (mediaSm.matches) {
                var perPage = 1;
            } else if (mediaMd.matches) {
                var perPage = 3;
            } else {
                var perPage = 4;
            }
            var splide = new Splide('.splide', {
                type: 'loop',
                perPage: perPage,
                rewind: true,
                autoplay: true,
                arrows: false,
                // speed: 2000,
                // width: '100%',
                // padding: '10px',
            });

            splide.mount();
        }
        slider();
        $(window).resize(function() {
            slider();
        });
    });
</script>

</html>