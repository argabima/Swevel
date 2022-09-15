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
    <title>Swevel | Admin Article</title>
</head>

<body id="artikel">
    <div class="admin-menu">

        <div class="sidebar">
            <header class="row">
                <div class="col p-0">
                    <a href="#!" class="menu-toggle"><i class="fas fa-xmark"></i></a>
                </div>
            </header>
            <nav class="sidebar-nav-list">
                <div class="sidebar-top">
                    <div class="row">
                        <div class="col-6">
                            <a href="#1"><i class="fa-regular fa-user"></i></a>
                        </div>
                        <div class="col-6">
                            <a href="#2"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 text-center">
                            <img src="../asset/image/event/pablo.png" width="200px" alt="...">
                        </div>
                        <div class="col-12 col-md-12 profile text-white text-center mt-2">
                            <h6 class="fw-bold">Administrator</h6>
                            <p class="mt-1">swevelid@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="mx-auto mt-3" style="max-height: 10px;width:80%">
                    <div class="sidebar-nav-item text-center" style="border-top: 1.5px solid #fff"></div>
                </div>
                <a href="#" class="sidebar-nav-item active">About Us <i class="fa-solid fa-angle-right"></i></a>
                <div class="sidebar-nav-dropdown">
                    <a href="#!" class="sidebar-nav-item sidebar-nav-dropdown-toggle">Services <i class="fa-solid fa-angle-right"></i></a>
                    <div class="sidebar-nav-dropdown-menu">
                        <a href="#" class="sidebar-nav-dropdown-item">Event <i class="fa-solid fa-angle-right"></i></a>
                        <a href="#" class="sidebar-nav-dropdown-item">Course <i class="fa-solid fa-angle-right"></i></a>
                        <a href="#" class="sidebar-nav-dropdown-item">Training <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                <a href="#" class="sidebar-nav-item">Article <i class="fa-solid fa-angle-right"></i></a>
                <a href="#" class="sidebar-nav-item">Portfolio <i class="fa-solid fa-angle-right"></i></a>
                <a href="#" class="sidebar-nav-item">Testimoni <i class="fa-solid fa-angle-right"></i></a>
                <a href="#" class="sidebar-nav-item">FAQ <i class="fa-solid fa-angle-right"></i></a>
                <a href="#" class="sidebar-nav-item">Contact Us <i class="fa-solid fa-angle-right"></i></a>
            </nav>
        </div>

        <div class="main">
            <header class="main-toolbar">
                <div class="row w-100">
                    <div class="col-sm-12 p-0 align-items-center" style="display:inline-flex">
                        <span class="menu-toggle h-100" role="button"><i class="fa-solid fa-bars"></i></span>
                        <i id="search-phone" class="fa-solid fa-magnifying-glass ms-3" role="button"></i>
                        <form id="search-toolbar" class="ms-auto show" role="search">
                            <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <input class="form-control" type="text" placeholder="search here" aria-label="Search">
                        </form>
                        <a href="#" class="swevel-brand ms-auto">Swevel</a>
                    </div>
                </div>
            </header>
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <h3 class="main-title py-3">Article</h3>

                        <div id="bar-chart" class="col-sm-12 mt-3 col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title my-3">statistic project</h6>
                                    <canvas id="barChart" width="100%"></canvas>
                                </div>
                            </div>
                        </div>

                        <div id="pie-chart" class="col-sm-12 mt-3 col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title my-3 text-center">statistic project</h6>
                                    <div class="mx-auto w-75">
                                        <canvas id="pieChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="card-article" class="col-sm-12 mt-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-12 col-md-6 mt-2">
                                            <div class="card border-0">
                                                <div class="card-body text-center">
                                                    <p>20</p>
                                                    <p>all article</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <div class="card border-0">
                                                <div class="card-body text-center">
                                                    <p>1</p>
                                                    <p>popular event</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <div class="card border-0">
                                                <div class="card-body text-center">
                                                    <p>9</p>
                                                    <p>latest article</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <div class="card border-0">
                                                <div class="card-body text-center">
                                                    <p>3</p>
                                                    <p>related event</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="newest-article" class="col-sm-12 mt-3 col-md-6">
                            <div class="card">
                                <div class="card-body pt-0">
                                    <div class="container">
                                        <div class="row justify-content-between my-3">
                                            <h6 class="col fw-bold my-auto">newest article</h6>
                                            <h6 class="col text-end">
                                                <a href="#" class="text-purple fw-bold">
                                                    <i class="fa-solid fa-plus"></i>
                                                    add new
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="row small-card">
                                            <img src="../asset/image/admin-artikel/bengkoang.png" alt="" class="w-30 h-100 my-auto">
                                            <span class="w-70 p-0">
                                                <p class="fw-bold">The Future of Education On The Blockchain</p>
                                                <p class="date">12 agustus 2022</p>
                                            </span>
                                        </div>
                                        <div class="row small-card">
                                            <img src="../asset/image/admin-artikel/bengkoang.png" alt="" class="w-30 h-100 my-auto">
                                            <span class="w-70 p-0">
                                                <p class="fw-bold">The Future of Education On The Blockchain</p>
                                                <p class="date">12 agustus 2022</p>
                                            </span>
                                        </div>
                                        <div class="row small-card">
                                            <img src="../asset/image/admin-artikel/bengkoang.png" alt="" class="w-30 h-100 my-auto">
                                            <span class="w-70 p-0">
                                                <p class="fw-bold">The Future of Education On The Blockchain</p>
                                                <p class="date">12 agustus 2022</p>
                                            </span>
                                        </div>
                                        <div class="row small-card">
                                            <img src="../asset/image/admin-artikel/bengkoang.png" alt="" class="w-30 h-100 my-auto">
                                            <span class="w-70 p-0">
                                                <p class="fw-bold">The Future of Education On The Blockchain</p>
                                                <p class="date">12 agustus 2022</p>
                                            </span>
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


    <script src="../asset/vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/js/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0-rc.1/chartjs-plugin-datalabels.min.js" integrity="sha512-+UYTD5L/bU1sgAfWA0ELK5RlQ811q8wZIocqI7+K0Lhh8yVdIoAMEs96wJAIbgFvzynPm36ZCXtkydxu1cs27w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            barChart = function() {
                // const bar = document.getElementById('barChart');
                const bar = $('#artikel #barChart');
                const barChart = new Chart(bar, {
                    type: 'bar',
                    data: {
                        labels: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'],
                        datasets: [{
                            label: 'Statistic',
                            data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
                            backgroundColor: '#D41DCE',
                            borderColor: '#D41DCE',
                            borderWidth: 1
                        }, {
                            label: 'Statistic',
                            data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
                            backgroundColor: '#A21CF6',
                            borderColor: '#A21CF6',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            legend: {
                                display: false
                            }
                        }
                    }
                });
            }
            barChart();

            pieChart = function() {
                const pie = document.getElementById('pieChart').getContext('2d');
                const pieChart = new Chart(pie, {
                    type: 'pie',
                    data: {
                        labels: ['0', '1', '2'],
                        datasets: [{
                            label: 'Statistic',
                            data: [217, 541, 477],
                            backgroundColor: ['#B65EB1', '#D8B9FF', '#25005F'],
                            borderColor: '#fff',
                            borderWidth: 2
                        }]
                    },
                    options: {
                        plugins: {
                            legend: {
                                display: true,
                                position: 'bottom',
                            }
                        }
                    },
                    plugins: [ChartDataLabels],
                    options: {
                        plugins: {
                            datalabels: {
                                color: '#fff',
                                font: {
                                    size: 14,
                                },
                                formatter: (value) => {
                                    return value + '%';
                                }
                            }
                        }
                    }
                });
            }
            pieChart();
        })
    </script>
</body>

</html>