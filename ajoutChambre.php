<?php
    session_start();
    if (!isset($_SESSION["user"])) {
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
                    <h2 class="page-cover-tittle">Add Room</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Accueil</a></li>
                        <li class="active">Ajouter une chambre</li>
                    </ol>
                    <p class="page-cover-tittle">Connecté : <?php echo $_SESSION["user"]; ?></p>
                </div>
            </div>
        </section>
        <?php include 'supprimerReservation.php'; ?>
        <section class="contact_area section_gap">
            <div class="container">
                <div id="wrapper">
                    <div id="page-wrapper">
                        <div id="page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="page-header">
                                        NOUVELLE CHAMBRE <small></small>
                                    </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 col-sm-5">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            AJOUTER UNE NOUVELLE CHAMBRE
                                        </div>
                                        <div class="panel-body">
                                            <form method="post" id="userForm">
                                                <p id="msg"></p>
                                                <div class="form-group">
                                                    <label>Type de Chambre *</label>
                                                    <select name="type" class="form-control" required>
                                                        <option value selected></option>
                                                        <option value="Superior Room">SUPERIOR ROOM</option>
                                                        <option value="Deluxe Room">DELUXE ROOM</option>
                                                        <option value="Guest House">GUEST HOUSE</option>
                                                        <option value="Single Room">SINGLE ROOM</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Type de lit</label>
                                                    <select name="lit" class="form-control" required>
                                                        <option value selected></option>
                                                        <option value="Simple">Simple</option>
                                                        <option value="Double">Double</option>
                                                        <option value="Triple">Triple</option>
                                                        <option value="Quad">Quad</option>
                                                        <option value="Triple">None</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Ajouter</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-6">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                INFORMATIONS DES CHAMBRES
                                            </div>
                                            <div class="panel-body">
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Type</th>
                                                                        <th>Lit</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="affichageAjoutChambre">
                                                                </tbody>
                                                            </table>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="ajax/ajoutChambre/ajoutChambre.js"></script>
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
        <script src="js/affichageAjoutChambre.js"></script>
    </body>
</html>