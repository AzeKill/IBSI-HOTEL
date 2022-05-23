<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<?php include 'php/head.php'; ?>
    <script>
        function setIdRep(idrep){
            document.getElementById("idrep").value = idrep;
        }
    </script>
    <body>
        <?php include 'php/menu.php'; ?>
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Contact Admin</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Accueil</a></li>
                        <li class="active">Contact Admin</li> 
                    </ol>
                    <p class="page-cover-tittle">Connecté : <?php echo $_SESSION["user"]; ?></p>
                </div>
            </div>
        </section>
        <section class="contact_area section_gap" >
            <div class="container">
                <div id="wrapper">
                    <div id="page-wrapper">
                        <div id="page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="page-header">
                                        Formulaire Contact<small> panel</small>
                                    </h1>
                                </div>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Réponse ?</h4>
                                            </div>
                                            <form method="post">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="comment">Reponse</label>
                                                        <textarea name="reponse" class="form-control" rows="5" id="comment"></textarea>
                                                        <input name="idrep" id="idrep" type="hidden" value="99"></input>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                    <input type="submit" name="log" value="Send" class="btn btn-primary">
                                                    </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                    </div> 
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Nom Prenom</th>
                                                            <th>Objet</th>
                                                            <th>Date</th>
                                                            <th>message</th>
                                                            <th>Repondre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="messageContact">
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
        </section>
        <?php
            if (!empty($_POST['reponse'])) {
                $reponse = htmlspecialchars($_POST['reponse']);
                $idrep = htmlspecialchars($_POST['idrep']);
                echo '<script>alert("Reponse envoyé") </script>';
                echo "<script type='text/javascript'> window.location='mail/reponseMail.php?reponse=".$reponse."&idReponse=".$idrep."'</script>";
            }
        ?>
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
        <script src="js/messageContact.js"></script>
    </body>
</html>
