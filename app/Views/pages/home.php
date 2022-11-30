<?= $this->extend('templates/template_landing_page'); ?>
<?= $this->section('content'); ?>

<style>
    option {
        background-color: palevioletred;
    }

    .gambar_treatment {
        width: fit-content;
        height: 120px;
    }
</style>


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
                        <li><a href="#contact-section">Bantuan</a></li>
                        <?php if (in_groups('admin')) : ?>
                            <li><a href="/admin/dashboard">Dashboard</a></li>
                        <?php else : ?>
                            <li><a href="<?= base_url('login'); ?>">Login</a></li>
                        <?php endif; ?>
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
                        <!-- <div class="scroll-to-section"><a href="#exampleModalCenter">Booking Sekarang!</a></div> -->
                        <!-- <button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button> -->
                        <button type="button" class="btn btn-primary btn-rounded btn-fw" data-toggle="modal" data-target="#exampleModalCenter">
                            Booking Sekarang
                        </button>
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

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="modal-body p-0">
                        <h3 class="mb-4">Booking Treatmentmu!</h3>
                        <form action="/home/booking/store" method="post" class="signup-form">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="nomor_handphone" name="nomor_handphone" placeholder="Nomor Handphone">
                            </div>
                            <div class="form-group">
                                <!-- <input type="text" class="form-control" placeholder="Jenis Treatment (Dropdown)"> -->
                                <label for="exampleFormControlSelect1">Jenis Treatment</label>
                                <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="jenis_treatment">
                                    <?php
                                    foreach ($data as $treatment) { ?>
                                        <option value="<?= $treatment['id'] ?>"><?= $treatment['nama_treatment'] . " - " . $treatment['harga']; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
                            </div>

                            <div class="form-group">
                                <a href="/">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Book</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                                    <img src="/Assets/Images/<?= $treatment['gambar_treatment']; ?>" class="gambar_treatment" alt="">
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
                                <h4>Telpon</h4>
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
                <form id="contact" action="/kritiksaran/store" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading">
                                <h4>Kritik <em>& Saran</em></h4>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="name" name="nama_lengkap" id="name" placeholder="Nama Lengkap" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="deskripsi" id="message" placeholder="Deskripsi"></textarea>
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
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
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

<?= $this->endSection(); ?>