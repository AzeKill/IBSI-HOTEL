<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        header("location:indexAdmin.php");
    }
?>
<!DOCTYPE html>
    <?php include 'php/head.php'; ?>
    <?php include 'config.php'; ?>
    <body>
        <?php include 'php/menu.php'; ?>
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Home Admin</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Accueil</a></li>
                        <li class="active">Home Admin</li> 
                    </ol>
                    <p class="page-cover-tittle">Connecté : <?php echo $_SESSION["user"]; ?></p>
                </div>
            </div>
        </section>
        <?php include 'supprimerReservation.php'; ?>
        <section class="contact_area section_gap" >
            <div class="container">
                <div id="wrapper">
                    <!-- /. NAV SIDE  -->
                    <div id="page-wrapper">
                        <div id="page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="page-header">
                                        Status <small>Reservation des chambres</small>
                                    </h1>
                                </div>
                            </div>
                            <!-- /. ROW  -->
                            <?php
                                $auj=date("Y/m/d");

                                $sql = "DELETE FROM `utilisateur` WHERE `date_inscription` < '$auj'";
                                $stmt = $bdd->query($sql);
                            
                                $c =0;
                                $r =0;
                                // récupérer tous les utilisateurs
                                $sql = "SELECT * FROM reservationChambre";
                                
                                try{
                                $stmt = $bdd->query($sql);
                                if($stmt === false){
                                    die("Erreur");
                                }
                                
                                }catch (PDOException $e){
                                    echo $e->getMessage();
                                }
                            ?>
                             <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
                                if ($row['statut'] == "Non Conform") {
                                    $c = $c + 1;
                                }
                                else{
                                    $r = $r + 1;
                                }
                             endwhile; ?> 

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="panel-group" id="accordion">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                <button class="btn btn-default" type="button">
                                                                    Nouvelle reservation de chambre <span class="badge"><?php echo $c; ?></span>
                                                                </button>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                                        <div class="panel-body">
                                                            <div class="panel panel-default">
                                                                <div class="panel-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>#</th>
                                                                                    <th>Titre</th>
                                                                                    <th>Nom et Prénom</th>
                                                                                    <th>Email</th>
                                                                                    <th>Nationalité</th>
                                                                                    <th>Pays</th>
                                                                                    <th>Telephone</th>
                                                                                    <th>Type Chambre</th>
                                                                                    <th>Lit</th>
                                                                                    <th>Nombre Chambre</th>
                                                                                    <th>Restauration</th>
                                                                                    <th>Date Entree</th>
                                                                                    <th>Date Sortie</th>
                                                                                    <th>Statut</th>
                                                                                    <th>Nombre Jour</th>
                                                                                    <th>More</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="reservation">
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                                                <button class="btn btn-primary" type="button">
                                                                    Chambre occupé <span class="badge"><?php echo $r; ?></span>
                                                                </button>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                                        <div class="panel-body">
                                                            <div class="row" id="homeChambre"></div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        $sql = "SELECT * FROM `abonnes`";
                                                
                                                        $stmt = $bdd->query($sql);
                                                        $nombreAbonnes = 0;
                                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                            $nombreAbonnes = $nombreAbonnes + 1;
                                                        }
                                                    ?>  
                                                    <div class="panel panel-danger">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                                                                    <button class="btn btn-primary" type="button">
                                                                        Abonnés <span class="badge"><?php echo $nombreAbonnes; ?></span>
                                                                    </button>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <div class="panel-body">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Email</th>
                                                                                <th>Date de Follow</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="homeAbonnes">
                                                                        </tbody>
                                                                    </table>
                                                                    <a href="messages.php" class="btn btn-primary">Nouvelle Newsletter</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    <script src="js/reservation.js"></script>
    <script src="js/homeAbonnes.js"></script>
    <script src="js/homeChambre.js"></script>
    </body>
</html>