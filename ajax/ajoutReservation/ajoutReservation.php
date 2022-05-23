<?php
    include('../../config.php');
    //legal input values
    $titre = legal_input($_POST['titre']);
    $prenom = legal_input($_POST['prenom']);
    $nom = legal_input($_POST['nom']);
    $email = legal_input($_POST['email']);
    $nationalite = legal_input($_POST['nationalite']);
    $pays = legal_input($_POST['pays']);
    $telephone = legal_input($_POST['telephone']);
    $typeChambre = legal_input($_POST['typeChambre']);
    $lit = legal_input($_POST['lit']);
    $nombreChambre = legal_input($_POST['nombreChambre']);
    $restauration = legal_input($_POST['restauration']);
    $dateEntree = $_POST['dateEntree'];
    $dateSortie = $_POST['dateSortie'];

    $code1=$_POST['code1'];
    $code=$_POST['code']; 
        
    if(!empty($titre) && !empty($prenom) && !empty($nom) && !empty($email) && !empty($nationalite) && !empty($pays) && !empty($telephone) && !empty($typeChambre) && !empty($lit) && !empty($nombreChambre) && !empty($restauration) && !empty($restauration) && !empty($dateEntree) && !empty($dateSortie) && !empty($code1) && !empty($code)){
        //  Sql Query to insert user data into database table
        if($code1==$code)
        {       
            Insert_data($titre,$prenom,$nom,$email,$nationalite,$pays,$telephone,$typeChambre,$lit,$nombreChambre,$restauration,$dateEntree,$dateSortie);
        }
        else{
            echo "ERROR CODE";
        }
    }else{
        echo "All fields are required";
    }
    
    // convert illegal input value to ligal value formate
    function legal_input($value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }
    // // function to insert user data into database table
    function insert_data($titre,$prenom,$nom,$email,$nationalite,$pays,$telephone,$typeChambre,$lit,$nombreChambre,$restauration,$dateEntree,$dateSortie){
    
        global $bdd;

        $insert = $bdd->prepare("INSERT INTO reservationChambre(titre, prenom, nom, email, nationalite, pays, telephone, typeChambre, lit, nombreChambre, restauration, dateEntree, dateSortie, statut, nombreJour) VALUES (:titre, :prenom, :nom, :email, :nationalite, :pays, :telephone, :typeChambre, :lit, :nombreChambre, :restauration, :dateEntree, :dateSortie, 'Non Conform', datediff('$_POST[dateSortie]','$_POST[dateEntree]'))");
        $check_execute = $insert->execute(array(
            'titre' => $titre, 
            'prenom' => $prenom, 
            'nom' => $nom, 
            'email' => $email, 
            'nationalite' => $nationalite, 
            'pays' => $pays, 
            'telephone' => $telephone, 
            'typeChambre' => $typeChambre, 
            'lit' => $lit, 
            'nombreChambre' => $nombreChambre, 
            'restauration' => $restauration, 
            'dateEntree' => $dateEntree, 
            'dateSortie' => $dateSortie
        ));

        if($check_execute==true)
        {
            echo "User data was inserted successfully";
            echo "<script type='text/javascript'> window.location='index.php'</script>";
        }
        else
        {
            echo  "Error";
        }
        
    }
?>