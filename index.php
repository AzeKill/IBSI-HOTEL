<?php
session_start();
?>
<!doctype html>
<html lang="fr">

    <?php include 'php/head.php'; ?>
    <body>
        <?php include 'php/menu.php'; ?>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h6>Loin de la vie monotone</h6>
						<h2>Détends ton esprit</h2>
						<p>Si vous regardez des cassettes vierges sur le Web, vous serez peut-être très confus par<br> la différence de prix. Vous pouvez en voir pour aussi peu que 0,17 € chacun.</p>
						<a href="reservation.php" class="btn theme_btn button_hover">Reservez</a>
					</div>
				</div>
            </div>
        </section>
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Hébergement à l'hôtel</h2>
                    <p>Nous vivons tous à une époque qui appartient aux jeunes de cœur. La vie qui devient extrêmement rapide,</p>
                </div>
            </div>
        </section>

        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Nos Points Forts</h2>
                    <p>Une envie? Nous sommes là pour vous satisfaire.</p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                            <p>Un univers de saveurs et de plaisirs culinaires, une ambiance décontractée, une cuisine inventive, de saison, de la petite restauration au menu 5 services.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Velo</h4>
                            <p>Disponibles à la location. Vélos de ville, pliables, cargos, tandems et d’accessoires. Ils vous attendent si vous voulez découvrir notre belle ville.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Pressing</h4>
                            <p>Du nettoyage au pliage en passant par le repassage, nous nous occupons de la propreté et de l'entretien de vos linges ainsi que de vos textiles.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-car"></i>Location de voiture</h4>
                            <p>Sentez la liberté de découvrir notre belle ville, avec nos partenaires <a href="https://www.europcar.be/fr-be">Europcar</a>, nous vous offrons la possibilité de louer des voitures.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-dice"></i>Casino</h4>
                            <p>Venez tenter votre chance dans notre magnifique casino. Ambiance et adrénaline garanties dans une salle à la décoration électrique !</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                            <p>L’ endroit idéal pour passer un bon moment entre amis, en couple ou en famille autour d’un verre le tout dans une décoration moderne.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->
        
        <!--================ About History Area  =================-->
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">À propos de nous
                            <br>Notre histoire<br>La vision de la mission</h2>
                            <p>IBSI Hotel est un hôtel familial et convivial. Entre amis, en famille, en couple ou pour un déplacement professionnel, pour un court ou un long séjour, tout est pensé pour vous faire passer un séjour exceptionnel. Depuis le balcon privatif de votre chambre côté mer, vous pourrez admirer une vue panoramique.</p>
                            <a href="contact.php" class="button_hover theme_btn_two">Demander un prix personnalisé</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="image/about_bg.jpg" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!--================ About History Area  =================-->
        
        <!--================ Testimonial Area  =================-->
        <section class="testimonial_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Témoignage de nos Clients</h2>
                    <p>L'avis de nos clients compte énormément, ce qui nous permet de mieux vous accueillir.</p>
                </div>
                <div class="testimonial_slider owl-carousel">
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/avis1.jpg" alt="">
                        <div class="media-body">
                            <p>Hôtel propre, accueil chaleureux, bien isolé du bruit, température réglable grâce à un climatiseur inclus dans la chambre. Mais le prix pour 1 nuit un peu élevé.</p>
                            <h4 class="sec_h4">Decout Florian</h4>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                    </div>    
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/avis2.jpg" alt="">
                        <div class="media-body">
                            <p>Bien situé pour visiter la ville avec un arrêt de transport en commun juste en face de l'hôtel. Petit bémol., la chambre était sombre et le soir pas assez de lumière. Les lampes des chevets sont juste en déco car elle fonctionnent pas. Pas de femmes de chambre sur deux nuits néanmoins l'hôtel est très calme</p>
                            <h4 class="sec_h4">Mimi Mathy</h4>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/avis3.jpg" alt="">
                        <div class="media-body">
                            <p>Chambre convenable. Mention spéciale pour la réception, très sympathique et conciliante</p>
                            <h4 class="sec_h4">Rubino Livio</h4>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                    </div>    
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/avis4.jpg" alt="">
                        <div class="media-body">
                            <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                            <h4 class="sec_h4">Lepape Melanie</h4>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Testimonial Area  =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="py-5 team4">
  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-md-7 text-center">
        <h3 class="mb-3">Notre équipe</h3>
        <h6 class="subtitle">Voici notre administration</h6>
      </div>
    </div>
    <div class="row">
      <!-- column  -->
      <div class="col-lg-3 mb-4">
        <!-- Row -->
        <div class="row">
          <div class="col-md-12">
            <img src="image/equipe/mathias.png" alt="wrapkit" class="img-fluid rounded-circle" />
          </div>
          <div class="col-md-12 text-center">
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0">Manzano Mathias</h5>
              <h6 class="subtitle mb-3">Directeur</h6>
              <p>Fondateur avec M. Godemont en 2021.</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
      <!-- column  -->
      <div class="col-lg-3 mb-4">
        <!-- Row -->
        <div class="row">
          <div class="col-md-12">
            <img src="image/equipe/flavian.png" alt="wrapkit" class="img-fluid rounded-circle" />
          </div>
          <div class="col-md-12 text-center">
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0">Godemont Flavian</h5>
              <h6 class="subtitle mb-3">Directeur</h6>
              <p>Fondateur avec M. Manzano en 2021.</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
      <!-- column  -->
      <div class="col-lg-3 mb-4">
        <!-- Row -->
        <div class="row">
          <div class="col-md-12">
            <img src="image/equipe/noemie.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
          </div>
          <div class="col-md-12 text-center">
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0">Polizzi Noémie</h5>
              <h6 class="subtitle mb-3">Secretaire</h6>
              <p>Partie administratif</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
      <!-- column  -->
      <div class="col-lg-3 mb-4">
        <!-- Row -->
        <div class="row">
          <div class="col-md-12">
            <img src="image/equipe/maud.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
          </div>
          <div class="col-md-12 text-center">
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0">Maistriau Maud</h5>
              <h6 class="subtitle mb-3">Service Juridique</h6>
              <p>Partie juridique et comptabilité</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
    </div>
  </div>
</div>
    
        </section>
        
        <?php include 'php/footer.php'; ?>
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>