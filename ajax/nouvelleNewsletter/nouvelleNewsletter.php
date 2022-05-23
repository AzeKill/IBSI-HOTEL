<?php
    include('../../config.php');
    //legal input values
    $titre = legal_input($_POST['titre']);
    $sujet = legal_input($_POST['sujet']);
    $nouvelle = legal_input($_POST['nouvelle']);
        
    if(!empty($titre) && !empty($sujet) && !empty($nouvelle)){
        //  Sql Query to insert user data into database table
        Insert_data($titre,$sujet,$nouvelle);
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
    function insert_data($titre,$sujet,$nouvelle){
    
        global $bdd;

        $insert = $bdd->prepare('INSERT into newsletter(titre,sujet,nouvelle)  VALUES(:titre,:sujet,:nouvelle)');
        $execute = $insert->execute(array(
            'titre' => $titre,
            'sujet' => $sujet,
            'nouvelle' => $nouvelle
        ));

        if($execute==true)
        {
            echo "<script type='text/javascript'> window.location='mail/newsletters.php?nouvelle=".$nouvelle."'</script>";
        }
        else{
            echo '<script>alert("News no ok") </script>';
        }
    }
?>