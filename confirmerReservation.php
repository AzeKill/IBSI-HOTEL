<?php  
	session_start();  
	if(!isset($_SESSION["user"]))
	{
		header("location:index.php");
	}
?> 

<?php
	$auj=date("d/m/Y");
	require_once 'config.php'; // On inclut la connexion à la base de données
	$id = $_GET['rid'];
	$sql ="Select * from reservationChambre where idReservation = '$id'";
    $stmt = $bdd->query($sql);

	while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		$titre = $row['titre'];
		$prenom = $row['prenom'];
		$nom = $row['nom'];
		$email = $row['email'];
		$nationalite = $row['nationalite'];
		$pays = $row['pays'];
		$telephone = $row['telephone'];
		$typeChambre = $row['typeChambre'];
		$nombreChambre = $row['nombreChambre'];
		$lit = $row['lit'];
		$nombreChambre2 = $row['nombreChambre'];
		$restauration = $row['restauration'];
		$dateEntree = $row['dateEntree'];
		$dateSortie = $row['dateSortie'];
		$statut = $row['statut'];
		$nombreJour = $row['nombreJour'];
	}	
?> 
<!DOCTYPE html>
	<?php include 'php/head.php'; ?>
	<body>
		<?php include 'php/menu.php'; ?>
		<section class="contact_area section_gap">
			<div class="container">
				<div id="wrapper">
					<div id="page-wrapper">
						<div id="page-inner">
							<div class="row">
								<div class="col-md-12">
									<h1 class="page-header">
										Reservation de chambre<small>	<?php echo  $auj; ?> </small>
									</h1>
								</div>
								<div class="col-md-8 col-sm-8">
									<div class="panel panel-info">
										<div class="panel-heading">
											Reservation conforme?
										</div>
										<div class="panel-body">
											<div class="table-responsive">
												<table class="table">
													<tr>
													<th>DESCRIPTION</th>
													<th>INFORMATION</th>
														
													</tr>
													<tr>
														<th>Nom</th>
														<th><?php echo $titre." ".$nom." ".$prenom; ?> </th>
														
													</tr>
													<tr>
														<th>Email</th>
														<th><?php echo $email; ?> </th>
														
													</tr>
													<tr>
														<th>Nationalité </th>
														<th><?php echo $nationalite; ?></th>
														
													</tr>
													<tr>
														<th>Pays</th>
														<th><?php echo $pays;  ?></th>
														
													</tr>
													<tr>
														<th>N° de téléphone</th>
														<th><?php echo $telephone; ?></th>
														
													</tr>
													<tr>
														<th>Type de chambre</th>
														<th><?php echo $typeChambre; ?></th>
														
													</tr>
													<tr>
														<th>Nombre de chambre</th>
														<th><?php echo $nombreChambre; ?></th>
														
													</tr>
													<tr>
														<th>Restauration</th>
														<th><?php echo $restauration; ?></th>
														
													</tr>
													<tr>
														<th>Type Lit </th>
														<th><?php echo $lit; ?></th>
														
													</tr>
													<tr>
														<th>Arrivée</th>
														<th><?php echo $dateEntree; ?></th>
														
													</tr>
													<tr>
														<th>Départ</th>
														<th><?php echo $dateSortie; ?></th>
														
													</tr>
													<tr>
														<th>Nombre de nuit</th>
														<th><?php echo $nombreJour; ?></th>
														
													</tr>
													<tr>
														<th>Statut</th>
														<th><?php echo $statut; ?></th>
													</tr>
												</table>
											</div>
										</div>
										<form id="userForm" method="POST">
											<label>Selection de la confirmation</label>
											<div class="modal-body">
												<div class="form-group">
													<input type="radio" name="Conform"  value="Conform" checked="">Conform
													<label class="radio-inline"></label>
												</div>
											</div>
											<div class="modal-body">
												<div class="form-group">
													<input type="radio" name="Conform"  value="Non Conform">Non Conform
													<label class="radio-inline"></label>
												</div>
											<div class="modal-footer">
												<button type="submit" name="submit" class="btn btn-primary">Confirmer</button>
											</div>
											<p id="msg"></p>
										</form>
									</div>
								</div>
							</div>
							<?php
								$rsql ="select * from chambre";
								
								$rre = $bdd->query($rsql);

								$r =0 ;
								$suproom =0;
								$guehouse = 0;
								$sinroom = 0;
								$delroom = 0;
								while($rrow = $rre->fetch(PDO::FETCH_ASSOC))
								{
									$r = $r + 1;
									$s = $rrow['type'];
									$p = $rrow['place'];
									if($s=="Superior Room" )
									{
										$suproom = $suproom+ 1;
									}
									
									if($s=="Guest House")
									{
										$guehouse = $guehouse + 1;
									}
									if($s=="Single Room" )
									{
										$sinroom = $sinroom + 1;
									}
									if($s=="Deluxe Room" )
									{
										$delroom = $delroom + 1;
									}
								}
								?>
							<?php
								$csql ="select * from chambre where place = 'NotFree' ";
								
								$rre = $bdd->query($csql);
								$cr =0 ;
								$csuproom =0;
								$cguehouse = 0;
								$csinroom = 0;
								$cdelroom = 0;
								while($crow = $rre->fetch(PDO::FETCH_ASSOC))
								{
									$cr = $cr + 1;
									$cs = $crow['type'];
									
									if($cs=="Superior Room"  )
									{
										$csuproom = $csuproom + 1;
									}
									
									if($cs=="Guest House" )
									{
										$cguehouse = $cguehouse + 1;
									}
									if($cs=="Single Room" )
									{
										$csinroom = $csinroom + 1;
									}
									if($cs=="Deluxe Room" )
									{
										$cdelroom = $cdelroom + 1;
									}
								}
							?>
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-default">
									<div class="panel-heading">
										Chambres détails
									</div>
									<div class="panel-body">
										<table width="200px">
											<tr>
												<td><b>Superior Room</b></td>
												<td><button type="button" class="btn btn-primary btn-circle">
												<?php 
													$f1 =$suproom - $csuproom;
													echo $f1;
												?> 
												</button></td> 
											</tr>
											<tr>
												<td><b>Guest House</b></td>
												<td><button type="button" class="btn btn-primary btn-circle">
												<?php 
													$f2 =  $guehouse -$cguehouse;
													if($f2 <=0 )
														{	
															$f2 = "NO";
															echo $f2;
														}
														else{
															echo $f2;
														}
												?> 
												</button></td> 
											</tr>
											<tr>
												<td><b>Single Room</b></td>
												<td><button type="button" class="btn btn-primary btn-circle">
												<?php
													$f3 =$sinroom - $csinroom;
													if($f3 <=0 )
														{	
															$f3 = "NO";
															echo $f3;
														}
														else{
															echo $f3;
														}
												?> 
												</button></td> 
											</tr>
											<tr>
												<td><b>Deluxe Room</b></td>
												<td><button type="button" class="btn btn-primary btn-circle">
												<?php 
													$f4 =$delroom - $cdelroom; 
													if($f4 <=0 )
														{	
															$f4 = "NO";
															echo $f4;
														}
														else{
															echo $f4;
														}
												?>
												</button></td> 
											</tr>
											<tr>
												<td><b>Total chambre</b> </td>
												<td> <button type="button" class="btn btn-danger btn-circle">
												<?php 
													$f5 =$r-$cr; 
													if($f5 <=0 )
														{	
															$f5 = "NO";
															echo $f5;
														}
														else{
															echo $f5;
														}
												?>
												</button></td> 
											</tr>
										</table>
									</div>
								<div class="panel-footer">
								</div>
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
	</body>
</html>

<?php
	if(isset($_POST['submit']))
	{	
		$st = $_POST['Conform'];
		if($st=="Conform")
		{
			if($f1=="NO"  && $typeChambre=="Superior Room")
			{
			echo "<script type='text/javascript'> alert('Sorry! Not Available Superior Room ')</script>";
			}
			else if($f2 =="NO" && $typeChambre=="Guest House")
			{
			echo "<script type='text/javascript'> alert('Sorry! Not Available Guest House')</script>";

			}
			else if ($f3 == "NO"  && $typeChambre=="Single Room")
			{

			echo "<script type='text/javascript'> alert('Sorry! Not Available Single Room')</script>";
			}

			else if($f4=="NO"  && $typeChambre=="Deluxe Room")
			{
			echo "<script type='text/javascript'> alert('Sorry! Not Available Deluxe Room')</script>";
			}
			else{
				$urb = "UPDATE `reservationChambre` SET `statut`='$st' WHERE idReservation = '$id'";
				$stmt = $bdd->query($urb);
				
				if($stmt)
				{	
					$insert = $bdd->prepare("INSERT INTO paiement(titre, prenom, nom, typeChambre, typeLit, nombreChambre, dateEntree, dateSortie, restauration, nombreJour) VALUES (:titre, :prenom, :nom, :typeChambre, :typeLit, :nombreChambre, :dateEntree, :dateSortie, :restauration, :nombreJour)");
					$check_execute = $insert->execute(array(
						'titre' => $titre,
						'prenom' => $prenom,
						'nom' => $nom,
						'typeChambre' => $typeChambre,
						'typeLit' => $lit,
						'nombreChambre' => $nombreChambre,
						'dateEntree' => $dateEntree,
						'dateSortie' => $dateSortie,
						'restauration' => $restauration,
						'nombreJour' => $nombreJour
					));
	
					if($check_execute == true)
					{	
	
						$rpsql = "UPDATE chambre SET place = 'NotFree', idRéservation='$id', dateFinReservation='$dateSortie' WHERE lit='$lit' AND type='$typeChambre'";
						$stmt = $bdd->query($rpsql);
	
						if($check_execute == true)
						{
							echo "<script type='text/javascript'> window.location='mail/phpmail.php?id=".$id."'</script>";
						}
						echo "<script type='text/javascript'> window.location='home.php'</script>";
					}
				}
			}
		}
	}
?>
