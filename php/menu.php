<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.php"><img src="image/logo.png" alt=""/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="chambres.php">Nos chambres</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservation.php">Réservation</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <?php 
                    if (isset($_SESSION["user"])) 
                    {

                        echo '<li class="nav-item submenu dropdown">
                        <a href="home.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                        <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link"><i class="fa fa-dashboard"></i> Status</a>
                             </li>
                             <li class="nav-item">
                                 <a href="messagesContact.php" class="nav-link"><i class="fa fa-edit"></i> Contact</a>
                             </li>
                             <li class="nav-item">
                                 <a href="messages.php" class="nav-link"><i class="fa fa-desktop"></i> Newsletters</a>
                             </li>
                             <li class="nav-item">
                                 <a href="paiement.php" class="nav-link"><i class="fa fa-qrcode"></i> Paiement</a>
                             </li>
                             <li class="nav-item">
                                 <a href="admin.php" class="nav-link"><i class="fa fa-user fa-fw"></i> Profiles</a>
                             </li>
                            <li class="nav-item">
                                <a class="nav-link"href="statutChambre.php"><i class="fa fa-dashboard"></i> Statut chambre</a>
                             </li>
                             <li class="nav-item">
                                 <a href="ajoutChambre.php" class="nav-link"><i class="fa fa-plus-circle"></i> Ajout chambre</a>
                             </li>
                             <li class="nav-item">
                                 <a href="chambreDelete.php" class="nav-link"><i class="fa fa-pencil-square-o"></i> Supprimer Chambre</a>
                             </li>
                             <li class="nav-item">
                                 <a href="logout.php" class="nav-link"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a>
                             </li>
                        </ul>
                    </li>';
                    }
                    else{
                        echo '<li class="nav-item"><a class="nav-link" href="home.php"><i class="fa fa-user"></i></a></li>';
                        }
                        ?>
                </ul>
            </div>
        </nav>
    </div>
</header>