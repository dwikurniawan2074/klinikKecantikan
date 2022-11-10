<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>EduWell - Education HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="/Assets/eduwell-1.0.0/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/Assets/eduwell-1.0.0/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/Assets/eduwell-1.0.0/assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="/Assets/eduwell-1.0.0/assets/css/owl.css">
    <link rel="stylesheet" href="/Assets/eduwell-1.0.0/assets/css/lightbox.css">
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
    <!--

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell

-->
</head>

<body>


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/home" class="logo">
                            <img src="/Assets/Images/logo_klinik.png" alt="EduWell Template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/home" class="active">Home</a></li>
                            <li><a href="#treatment">Treatment</a></li>
                            <li><a href="#courses">Tentang Kami</a></li>
                            <!-- Template untuk dropdown JANGAN DIHAPUS -->
                            <!-- <li class="has-sub">
                                <a href="javascript:void(0)">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="our-services.html">Our Services</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#testimonials">Tentang Kami</a></li> -->
                            <li><a href="#contact-section">Bantuan</a></li>
                            <li><a href="/pages/login">Login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <section class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="header-text">
                        <h2>Kulit Cerah Bersih Dalam <em>Sekali Treatment!</em></h2>
                        <h6>Memberikan solusi yang tepat dan sesuai kebutuhan kulit dengan rangkaian perawatan terbaik dan terpercaya oleh Dokter Profesional dan Terapis Berpengalaman.</h6>
                        <div class="main-button-gradient mt-3">
                            <div class="scroll-to-section"><a href="#contact-section">Booking Sekarang!</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-image">
                        <img src="/Assets/eduwell-1.0.0/assets/images/banner-right-image.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->

    <section class="services" id="treatment">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h6>Our Services</h6>
                        <h4>Treatment <em>Yang Disediakan</em></h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">

                        <?php
                        foreach ($data as $treatment) {
                        ?>

                            <div class="item">
                                <div class="service-item">
                                    <div class="icon">
                                        <img src="<?= $treatment['gambar_treatment']; ?>" alt="">
                                    </div>
                                    <h4><?= $treatment['nama_treatment']; ?></h4>
                                    <p><?= $treatment['deskripsi']; ?></p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="contact-us" id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h6>Our Location</h6>
                        <h4>Lokasi <em>Zahra Clinic</em></h4>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="map">

                        <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.345354491288!2d105.24070861538605!3d-5.364175855178897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c5f60802221d%3A0xac5d5819e12c9bcf!2sUniversitas%20Lampung!5e0!3m2!1sid!2sid!4v1668035695689!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.345354491288!2d105.24070861538605!3d-5.364175855178897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c5f60802221d%3A0xac5d5819e12c9bcf!2sUniversitas%20Lampung!5e0!3m2!1sid!2sid!4v1668035695689!5m2!1sid!2sid" width="100%" height="420px" frameborder="0" style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
                        <div class="row">
                            <div class="col-lg-4 offset-lg-1">
                                <div class="contact-info">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <h4>Phone</h4>
                                    <span>0812-3367-8888</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact-info">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <h4>Whatsapp</h4>
                                    <span>0812-3367-8888</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-heading">
                                    <h4>Kritik <em>& Saran</em></h4>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Nama Lengkap" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" id="message" placeholder="Deskripsi"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-gradient-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <p class="copyright">Copyright © 2022 Zahra Clinic Co.
                        <br>Kelompok : <a rel="sponsored" target="_blank">9</a>
                        <br>Mata Kuliah : <a rel="sponsored" target="_blank">Web Lanjut</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="/Assets/eduwell-1.0.0/vendor/jquery/jquery.min.js"></script>
    <script src="/Assets/eduwell-1.0.0/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/Assets/eduwell-1.0.0/assets/js/isotope.min.js"></script>
    <script src="/Assets/eduwell-1.0.0/assets/js/owl-carousel.js"></script>
    <script src="/Assets/eduwell-1.0.0/assets/js/lightbox.js"></script>
    <script src="/Assets/eduwell-1.0.0/assets/js/tabs.js"></script>
    <script src="/Assets/eduwell-1.0.0/assets/js/video.js"></script>
    <script src="/Assets/eduwell-1.0.0/assets/js/slick-slider.js"></script>
    <script src="/Assets/eduwell-1.0.0/assets/js/custom.js"></script>
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