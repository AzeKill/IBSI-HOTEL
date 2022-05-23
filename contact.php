<!doctype html>
<html lang="fr">
    <?php include 'php/head.php'; ?>
    <body>
        <?php include 'php/menu.php'; ?>
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Contact</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Accueil</a></li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="contact_area section_gap">
            <div class="container">
                <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.412649643235!2d3.98386861588043!3d50.4520400951312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c24f8c6d057a9b%3A0x3cd5fd540db90ee1!2sHaute%20%C3%89cole%20Louvain%20en%20Hainaut%20Mons!5e0!3m2!1sfr!2sbe!4v1651950006372!5m2!1sfr!2sbe" width="1140" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
                    <div class="col-md-3">
                        <div class="contact_info"><br></br>
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <a href="https://goo.gl/maps/gHCjKtgZv3xBwnCs7" target="_blank"> 
                                    <h6>7000 Mons - BE</h6>
                                    <p>Chau. de Binche 159</p>
                                </a>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">+32 (0)65 40 41 42</a></h6>
                                <p>Du Lundi to Vendredi 8:00 à 17:00</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">contact@helha.be</a></h6>
                                <p>Envoyez-nous votre requête à tout moment !</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9"><br></br>
                        <form class="row contact_form"  method="post" id="userForm" novalidate="novalidate" action="javacscript:void();">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nomPrenom" name="nomPrenom" placeholder="Nom - Prénom">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="objet" name="objet" placeholder="Objet">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="textarea" class="form-control" name="message" id="message" placeholder="Votre message"></input>
                                </div>
                            </div>
                            <div class="col-md-9 text-right">
                                <button type="submit" value="submit" class="btn theme_btn button_hover">Envoyer</button>
                            </div>
                            <p id="msg"></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>	
        <?php include 'php/footer.php'; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="ajax/contact/contactScript.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>