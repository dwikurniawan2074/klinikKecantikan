<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Zahra Clinic</title>

    <!-- Bootstrap core CSS -->
    <link href="/Assets/eduwell-1.0.0/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/Assets/Images/logo_web_klinik.png">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/Assets/eduwell-1.0.0/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/Assets/eduwell-1.0.0/assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="/Assets/eduwell-1.0.0/assets/css/owl.css">
    <link rel="stylesheet" href="/Assets/eduwell-1.0.0/assets/css/lightbox.css">

    <link rel="stylesheet" href="/Assets/modal/css/ionicons.min.css">
    <link rel="stylesheet" href="/Assets/modal/css/style.css">

    <style>
        .section-alamat {
            position: relative;
            z-index: 2;
            padding-top: 20px;
            margin-top: 0px;
            text-align: center;
            margin-bottom: 60px;
        }
    </style>
</head>

<body>


    <?= $this->renderSection('content'); ?>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="/Assets/eduwell-1.0.0/vendor/jquery/jquery.min.js"></script>
    <script src="/Assets/eduwell-1.0.0/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/Assets/modal/js/jquery.min.js"></script>
    <script src="/Assets/modal/js/popper.js"></script>
    <script src="/Assets/modal/js/bootstrap.min.js"></script>
    <script src="/Assets/modal/js/main.js"></script>

    <script src="/Assets/eduwell-1.0.0/assets/js/isotope.min.js"></script>
    <script src="/Assets/eduwell-1.0.0/assets/js/owl-carousel.js"></script>
    <script src="/Assets/eduwell-1.0.0/assets/js/lightbox.js"></script>
    <script src="/Assets/eduwell-1.0.0/assets/js/tabs.js"></script>
    <script src="/Assets/eduwell-1.0.0/assets/js/video.js"></script>
    <script src="/Assets/eduwell-1.0.0/assets/js/slick-slider.js"></script>
    <script src="/Assets/eduwell-1.0.0/assets/js/custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
            e.preventDefault();
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });
    </script>

</body>

</html>