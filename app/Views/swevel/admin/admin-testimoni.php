<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../asset/vendor/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="../asset/vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/vendor/fontawesome612/css/all.css">
    <link rel="stylesheet" href="../asset/css/admin.css">
    <style type="text/css">
        #element {
            width: 280px;
            height: 280px;
            margin: 10px auto;
            padding: 10px;
            border: 1px solid #333;
            border-radius: 3px;
        }
    </style>

    <title>Document</title>
</head>

<body>
    <div class="admin-menu">
        <div class="sidebar">
            <header class="row">
                <div class="col p-0"><a href="#!" class="menu-toggle"><i class="fas fa-xmark"></i></a></div>
            </header>
            <nav class="sidebar-nav-list">
                <div class="sidebar-top">
                    <div class="row">
                        <div class="col-6"><a href="#1"><i class="fa-regular fa-user"></i></a></div>
                        <div class="col-6"><a href="#2"><i class="fa-solid fa-ellipsis-vertical"></i></a></div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 text-center"><img src="../asset/image/event/pablo.png" width="200px" alt="..."></div>
                        <div class="col-12 col-md-12 profile text-white text-center mt-2">
                            <h6 class="fw-bold">Administrator</h6>
                            <p class="mt-1">swevelid@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="mx-auto mt-3" style="max-height: 10px;width:80%">
                    <div class="sidebar-nav-item text-center" style="border-top: 1.5px solid #fff"></div>
                </div><a href="#" class="sidebar-nav-item active">About Us <i class="fa-solid fa-angle-right"></i></a>
                <div class="sidebar-nav-dropdown"><a href="#!" class="sidebar-nav-item sidebar-nav-dropdown-toggle">Services <i class="fa-solid fa-angle-right"></i></a>
                    <div class="sidebar-nav-dropdown-menu"><a href="#" class="sidebar-nav-dropdown-item">Event <i class="fa-solid fa-angle-right"></i></a><a href="#" class="sidebar-nav-dropdown-item">Course <i class="fa-solid fa-angle-right"></i></a><a href="#" class="sidebar-nav-dropdown-item">Training <i class="fa-solid fa-angle-right"></i></a></div>
                </div><a href="#" class="sidebar-nav-item">Article <i class="fa-solid fa-angle-right"></i></a><a href="#" class="sidebar-nav-item">Portfolio <i class="fa-solid fa-angle-right"></i></a><a href="#" class="sidebar-nav-item">Testimoni <i class="fa-solid fa-angle-right"></i></a><a href="#" class="sidebar-nav-item">FAQ <i class="fa-solid fa-angle-right"></i></a><a href="#" class="sidebar-nav-item">Contact Us <i class="fa-solid fa-angle-right"></i></a>
            </nav>
        </div>
        <div class="main">
            <header class="main-toolbar">
                <div class="row w-100">
                    <div class="col-sm-12 p-0 align-items-center" style="display:inline-flex"><span class="menu-toggle h-100" role="button"><i class="fa-solid fa-bars"></i></span><i id="search-phone" class="fa-solid fa-magnifying-glass ms-3" role="button"></i>
                        <form id="search-toolbar" class="ms-auto show" role="search"><button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button><input class="form-control" type="text" placeholder="search here" aria-label="Search"></form><a href="#" class="swevel-brand ms-auto">Swevel</a>
                    </div>
                </div>
            </header>
            <div class="main-content">
                <div class="container-fluid">
                    <h3 class="main-title py-3">Testimoni</h3>
                    <div class="row mt-3 mb-3 ml-3 mr-3">
                        <div id="card-testimoni" class="row">
                            <div class="card" style="background-color: #F2E8FF;">
                                <div class="card-body">
                                    <div class="row mb-3 mt-3 ml-3 mr-3">
                                        <h4 class="" style="color:#6F32BE; text-align:center;">Display Testimoni</h4>
                                    </div>
                                    <div class="row" id="drop_container">
                                        <div class="col-12 col-md-6 mt-2" id="drop1">
                                            <div class="card border-0 bg-light" id="drag1">
                                                <div class="bg1 mt-5">
                                                    <div class="container bg-transparent p-3">
                                                        <div class="row flex-row-reverse">
                                                            <div class="col-sm-12 col-md-6 text-center my-auto"><img src="asset/image/contactUs/img.png" alt="" width="150px"></div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <p class="fs-6"><span class="fw-bold">"Lorem ipsum dolor sit amet consectetur adipisicing elit"
                                                                    </span class="fw-bold"></p>
                                                                <div class="p">
                                                                    <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2" id="drop1">
                                            <div class="card border-0 bg-light" id="drag1">
                                                <div class="bg1 mt-5">
                                                    <div class="container bg-transparent p-3">
                                                        <div class="row flex-row-reverse">
                                                            <div class="col-sm-12 col-md-6 text-center my-auto"><img src="asset/image/contactUs/img.png" alt="" width="150px"></div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <p class="fs-6"><span class="fw-bold">"Lorem ipsum dolor sit amet consectetur adipisicing elit"
                                                                    </span class="fw-bold"></p>
                                                                <div class="p">
                                                                    <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2" id="drop1">
                                            <div class="card border-0 bg-light" id="drag1">
                                                <div class="bg1 mt-5">
                                                    <div class="container bg-transparent p-3">
                                                        <div class="row flex-row-reverse">
                                                            <div class="col-sm-12 col-md-6 text-center my-auto"><img src="asset/image/contactUs/img.png" alt="" width="150px"></div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <p class="fs-6"><span class="fw-bold">"Lorem ipsum dolor sit amet consectetur adipisicing elit"
                                                                    </span class="fw-bold"></p>
                                                                <div class="p">
                                                                    <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2" id="drop1">
                                            <div class="card border-0 bg-light" id="drag1">
                                                <div class="bg1 mt-5">
                                                    <div class="container bg-transparent p-3">
                                                        <div class="row flex-row-reverse">
                                                            <div class="col-sm-12 col-md-6 text-center my-auto"><img src="asset/image/contactUs/img.png" alt="" width="150px"></div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <p class="fs-6"><span class="fw-bold">"Lorem ipsum dolor sit amet consectetur adipisicing elit"
                                                                    </span class="fw-bold"></p>
                                                                <div class="p">
                                                                    <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-justify-end mt-4"><button class="btn btn-purple" style="width: 180px; margin-left:auto">
                                                <h5>publish</h5>
                                            </button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="main-title py-3">All Testimoni</h3>
                    <p>you can drag and drop these testimoni</p>
                    <div id="card-alltestimoni" class="row">
                        <div class="card" style="background-color: #F2E8FF;">
                            <div class="card-body">
                                <div class="row" id="drag_container">
                                    <div class="col-12 col-md-6 mt-2" id="drag1">
                                        <div class="card border-0 bg-light" id="drag1">
                                            <div class="bg1 mt-5">
                                                <div class="container bg-transparent p-3">
                                                    <div class="row flex-row-reverse">
                                                        <div class="col-sm-12 col-md-6 text-center my-auto"><img src="asset/image/contactUs/img.png" alt="" width="150px"></div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <p class="fs-6"><span class="fw-bold">"Lorem ipsum dolor sit amet consectetur adipisicing elit"
                                                                </span class="fw-bold"></p>
                                                            <div class="p">
                                                                <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mt-2" id="drag1">
                                        <div class="card border-0 bg-light" id="drag1">
                                            <div class="bg1 mt-5">
                                                <div class="container bg-transparent p-3">
                                                    <div class="row flex-row-reverse">
                                                        <div class="col-sm-12 col-md-6 text-center my-auto"><img src="asset/image/contactUs/img.png" alt="" width="150px"></div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <p class="fs-6"><span class="fw-bold">"Lorem ipsum dolor sit amet consectetur adipisicing elit"
                                                                </span class="fw-bold"></p>
                                                            <div class="p">
                                                                <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mt-2" id="drag1">
                                        <div class="card border-0 bg-light" id="drag1">
                                            <div class="bg1 mt-5">
                                                <div class="container bg-transparent p-3">
                                                    <div class="row flex-row-reverse">
                                                        <div class="col-sm-12 col-md-6 text-center my-auto"><img src="asset/image/contactUs/img.png" alt="" width="150px"></div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <p class="fs-6"><span class="fw-bold">"Lorem ipsum dolor sit amet consectetur adipisicing elit"
                                                                </span class="fw-bold"></p>
                                                            <div class="p">
                                                                <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mt-2" id="drag1">
                                        <div class="card border-0 bg-light" id="drag1">
                                            <div class="bg1 mt-5">
                                                <div class="container bg-transparent p-3">
                                                    <div class="row flex-row-reverse">
                                                        <div class="col-sm-12 col-md-6 text-center my-auto"><img src="asset/image/contactUs/img.png" alt="" width="150px"></div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <p class="fs-6"><span class="fw-bold">"Lorem ipsum dolor sit amet consectetur adipisicing elit"
                                                                </span class="fw-bold"></p>
                                                            <div class="p">
                                                                <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-justify-end mt-4"><button class="btn btn-purple" style="width: 180px; margin-left:auto">
                                            <h5>publish</h5>
                                        </button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../asset/vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/js/admin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const columns = document.querySelectorAll("section .row");

        columns.forEach((column) => {
            new Sortable(column, {
                group: "shared",
                animation: 150,
                ghostClass: "blue-background-class"
            });
        });
    </script>
</body>

</html>