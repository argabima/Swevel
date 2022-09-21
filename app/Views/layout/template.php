<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" /> -->

    <script src="/asset/vendor/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    <link rel="stylesheet" href="/asset/vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/vendor/fontawesome612/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Swiper CSS for Team-->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">

    <!-- custom -->
    <link rel="stylesheet" href="/css/swevel_style.css">
    <link rel="stylesheet" href="/asset/css/custom.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/course.css">
</head>

<body>

    <?= $this->renderSection('content'); ?>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="/asset/vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/vendor/fontawesome612/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
    <!-- Swiper JS for Team-->
    <script src="/js/swiper-bundle.min.js"></script>
    <script src="/js/main_jquery.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

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
                    // autoplay: true,
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

    <script src="/js/swevel.js"></script>



</body>

</html>