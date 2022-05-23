<?php  
    session_start();  
    if(!isset($_SESSION["user"]))
    {
        header("location:index.php");
    }
    ob_start();
?> 
<!DOCTYPE html>
    <?php include 'php/head.php'; ?>
    <body>
        <?php include 'php/menu.php'; ?>
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Admin</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Accueil</a></li>
                        <li class="active">Admin</li> 
                    </ol>
                    <p class="page-cover-tittle">Connecté : <?php echo $_SESSION["user"]; ?></p>
                </div>
            </div>
        </section>
        <section class="contact_area section_gap" >
            <div class="container">
                <div id="wrapper">
                    <div id="page-wrapper" >
                        <div id="page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="page-header">
                                        ADMINISTRATOR<small> accounts </small>
                                    </h1>
                                </div>
                            </div>         
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>User ID</th>
                                                            <th>User name</th>
                                                            <th>Password</th>
                                                            <th>Remove</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="admin">
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal1">
                                            Add New Admin
                                        </button>
                                        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Add the User name and Password</h4>
                                                    </div>
                                                    <form id="AjoutAdmin" method="POST">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label>Add new User name</label>
                                                                <input name="newus"  class="form-control" placeholder="Enter User name">
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label>New Password</label>
                                                                <input name="newps"  class="form-control" placeholder="Enter Password">
                                                            </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Add</button>
                                                        </div>
                                                        <p id="msg"></p>
                                                    </form>
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
        <script type="text/javascript" src="ajax/ajoutAdmin/ajoutAdmin.js"></script>
        <script type="text/javascript" src="ajax/deleteAdmin/deleteAdmin.js"></script>
        <script type="text/javascript" src="updateAdmin.js"></script>
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
        <script src="js/affichageAdmin.js"></script>
    </body>
</html>