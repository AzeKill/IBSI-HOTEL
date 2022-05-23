<!doctype html>
<html lang="fr">

    <?php include 'php/head.php'; ?>
    <body>
        <!--================Breadcrumb Area =================-->
        <?php include 'php/menu.php'; ?>
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Nos Chambres</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Accueil</a></li>
                        <li class="active">Nos Chambres</li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="hotel_booking_table" style="background-color:white;">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                            <li data-target="#demo" data-slide-to="3"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/chambres/sr01.jpg" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Single Room</h5>
                                    <p>A partir de 69€/nuit</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="image/chambres/sp01.jpg" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Superior Room</h5>
                                    <p>A partir de 79€/nuit</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="image/chambres/sd01.jpg" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Delux Room</h5>
                                    <p>A partir de 99€/nuit</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="image/chambres/gh01.jpg" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Single Room</h5>
                                    <p>A partir de 130€/nuit</p>
                                </div>
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact_area section_gap">
            <div class="container">
            <div class="row mb_30">
                
                
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/chambres/sr01.jpg" alt="">
                            <a href="reservation.php" class="btn theme_btn button_hover">Reservez</a>
                        </div>
                        <a href="SingleRoom.php"><h4 class="sec_h4">Single Room</h4></a>
                        <h5>€69<small>/nuit</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/chambres/sp01.jpg" alt="">
                            <a href="reservation.php" class="btn theme_btn button_hover">Reservez</a>
                        </div>
                        <a href="SuperiorRoom.php"><h4 class="sec_h4">Superior Room</h4></a>
                        <h5>€79<small>/nuit</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/chambres/sd01.jpg" alt="">
                            <a href="reservation.php" class="btn theme_btn button_hover">Reservez</a>
                        </div>
                        <a href="DeluxeRoom.php"><h4 class="sec_h4">Deluxe Room</h4></a>
                        <h5>€99<small>/nuit</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/chambres/gh01.jpg" alt="">
                            <a href="reservation.php" class="btn theme_btn button_hover">Reservez</a>
                        </div>
                        <a href="GuestHouse.php"><h4 class="sec_h4">Guest House</h4></a>
                        <h5>€130<small>/nuit</small></h5>
                    </div>
                </div>
                
            </div>
        </section>
        <?php include 'php/footer.php'; ?>
            </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>