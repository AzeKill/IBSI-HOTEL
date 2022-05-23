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
					<h2 class="page-cover-tittle">Supprimer une chambre</h2>
					<ol class="breadcrumb">
						<li><a href="index.php">Accueil</a></li>
						<li class="active">Supprimer une chambre</li>
					</ol>
					<p class="page-cover-tittle">Connecté : <?php echo $_SESSION["user"]; ?></p>
				</div>
			</div>
		</section>
		<?php include 'supprimerReservation.php'; ?>
		<section class="contact_area section_gap">
			<div class="container">
				<div id="wrapper">
					<div id="page-wrapper" >
						<div id="page-inner">
							<div class="row">
								<div class="col-md-12">
									<h1 class="page-header">
										SUPPRIMER CHAMBRE <small></small>
									</h1>
								</div>
							</div> 				
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="panel panel-primary">
									<div class="panel-heading">
										Supprimer Chambre
									</div>
									<div class="panel-body">
									<p id="msgdelChambre"></p>
    									<form id="userFormDelChambre" method="POST">									
											<div class="form-group">
												<label>Selectionne l'ID de la chambre *</label>
												<button type="submit" class="btn btn-primary">Supprimer</button>
												<select name="id"  class="form-control" required>
													<?php
														require_once 'config.php'; // On inclut la connexion à la base de données
														$sql ="select idChambre from chambre where place ='Free'";
														$stmt = $bdd->query($sql);
														while($row = $stmt->fetch(PDO::FETCH_ASSOC))
														{
															$value = $row['idChambre'];
															echo '<option value="'.$value.'">'.$value.'</option>';
														}
													?>
												</select>
											</div>
										</form>
									</div>
								</div>
								<div class="row" id="chambreDelete">gdfbhntrdbn
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include 'php/footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript" src="ajax/deleteChambre/deleteChambre.js"></script>
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
		<script src="js/chambreDelete.js"></script>
	</body>
</html>
