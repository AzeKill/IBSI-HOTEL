<!DOCTYPE html>
    <?php include 'php/head.php'; ?>
    <body>
        <?php include 'php/menu.php'; ?>
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Réservation</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Accueil</a></li>
                        <li class="active">Réservation</li>
                    </ol>
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
                                        RESERVATION <small></small>
                                    </h1>
                                </div>
                            </div>      
                            <div class="row">
                                <div class="col-md-12 col-sm-5">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            PERSONAL INFORMATION
                                        </div>
                                        <div class="panel-body">
                                            <form id="ajourReservation" method="post">
                                                <div class="form-group">
                                                    <label>Title :</label>
                                                    <select name="titre" class="form-control" required >
                                                        <option value="Mr.">Mr.</option>
                                                        <option value="Mme.">Mme.</option>
                                                        <option value="Mlle.">Mlle.</option>
                                                    </select>
                                                </div>
                                                 <div class="form-group">
                                                    <label>Prénom</label>
                                                    <input name="prenom" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input name="nom" class="form-control" required>         
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input name="email" type="email" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <div>
                                                        <label>Nationalité</label>
                                                    </div>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="nationalite"  value="Belge" checked="">Belge
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="nationalite"  value="Non Belge">Non Belge
                                                    </label>
                                                </div>
                                                <?php
                                                    $lstPays = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                                                ?>
                                                <div class="form-group">
                                                    <label>Passport Country</label>
                                                    <select id = "paystest" name="pays" class="form-control" size="3" required>
                                                        <option value selected ></option>
                                                        <?php
                                                            foreach($lstPays as $key => $value):
                                                                echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
                                                            endforeach;
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Numéro de téléphone</label>
                                                    <input name="telephone" type ="text" class="form-control" required>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-6">
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading">
                                                                RESERVATION INFORMATION
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="form-group">
                                                                    <label>Type de chambre</label>
                                                                    <select name="typeChambre"  class="form-control" required>
                                                                        <option value selected ></option>
                                                                        <option value="Superior Room">SUPERIOR ROOM</option>
                                                                        <option value="Deluxe Room">DELUXE ROOM</option>
                                                                        <option value="Guest House">GUEST HOUSE</option>
                                                                        <option value="Single Room">SINGLE ROOM</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Type de lit</label>
                                                                    <select name="lit" class="form-control" required>
                                                                        <option value="Simple">Simple</option>
                                                                        <option value="Double">Double</option>
                                                                        <option value="Triple">Triple</option>
                                                                        <option value="Quadruple">Quadruple</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Nombre de chambre</label>
                                                                    <select name="nombreChambre" class="form-control" required>
                                                                        <option value selected ></option>
                                                                        <option value="1">1</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Restauration</label>
                                                                    <select name="restauration" class="form-control"required>
                                                                        <option value selected ></option>
                                                                        <option value="Uniquement la chambre">Uniquement la chambre</option>
                                                                        <option value="Déjeuner">Déjeuner</option>
                                                                        <option value="Semi-Pension">Semi-Pension</option>
                                                                        <option value="Pension-complète">Pension-complète</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Arrivé</label>
                                                                    <input name="dateEntree" type ="date" class="form-control">  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Départ</label>
                                                                    <input name="dateSortie" type ="date" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="well">
                                                            <h4>VERIFICATION</h4>
                                                            <p>Encoder le code suivant <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
                                                            <p>Encoder le code aléatoire<br /></p>
                                                            <input  type="text" name="code1" title="random code" />
                                                            <input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
                                                            <input type="submit" name="submit" class="btn btn-primary">
                                                        </div>
                                                    </div>
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
        </section>
        <?php include 'php/footer.php'; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="ajax/ajoutReservation/ajoutReservation.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
