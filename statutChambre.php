<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
	<?php include 'php/head.php'; ?>
	<body>
		<?php include 'php/menu.php'; ?>
		<section class="breadcrumb_area">
			<div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
			<div class="container">
				<div class="page-cover text-center">
					<h2 class="page-cover-tittle">Room Status</h2>
					<ol class="breadcrumb">
						<li><a href="index.php">Accueil</a></li>
						<li class="active">Room Status</li> 
					</ol>
					<p class="page-cover-tittle">Connecté : <?php echo $_SESSION["user"]; ?></p>
				</div>
			</div>
		</section>
		<?php include 'supprimerReservation.php'; ?>
		<section class="contact_area section_gap" >
			<div class="container">
				<div id="wrapper">
					<div id="page-wrapper" >
						<div id="page-inner">
							<div class="row">
								<div class="col-md-12">
									<h1 class="page-header">
										Available <small> Rooms</small>
									</h1>
								</div>
							</div> 					
							<div class="row" id="statutChambre">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include 'php/footer.php'; ?>
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
		<script src="js/statutChambre.js"></script>
	</body>
</html>
