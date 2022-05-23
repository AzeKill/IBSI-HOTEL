<?php
    include('../../config.php');
    //legal input values
    $nomPrenom = legal_input($_POST['nomPrenom']);
    $email = legal_input($_POST['email']);
    $objet = legal_input($_POST['objet']);
    $message = legal_input($_POST['message']);
    
    if(!empty($nomPrenom) && !empty($email) && !empty($objet) && !empty($message)){
        //  Sql Query to insert user data into database table
        Insert_data($nomPrenom,$email, $objet, $message);
    }else{
        echo "Tout les champs sont requis";
    }
    
    // convert illegal input value to ligal value formate
    function legal_input($value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }
    // // function to insert user data into database table
    function insert_data($nomPrenom,$email, $objet, $message){
    
        global $bdd;

        $insert = $bdd->prepare('INSERT into contact(nomPrenom,email,objet,contactDate,message)  VALUES(:nomPrenom, :email, :objet, now(), :message)');
        $execute = $insert->execute(array(
            'nomPrenom' => $nomPrenom,
            'email' => $email,
            'objet' => $objet,
            'message' => $message
        ));

        if($execute==true)
        {
            echo "Message correctement envoyé";
        }
    }
?>
    