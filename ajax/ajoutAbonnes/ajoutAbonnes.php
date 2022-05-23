<?php
    include('../../config.php');
    //legal input values
    $email = $_POST['EMAIL'];

    if(!empty($email)){
        //  Sql Query to insert user data into database table        
        $stmt = $bdd->prepare("SELECT * FROM abonnes WHERE email=?");
        $stmt->execute([$email]); 
        $user = $stmt->fetch();
        if ($user) {
            echo "Email déjà utilisé";
        }else 
        {
            $insert = $bdd->prepare('INSERT into abonnes(email,dateDebut)  VALUES(:email, now())');
            $execute = $insert->execute(array(
                'email' => $email
            ));
            if($execute==true)
            {
                echo "Email ajouté";
            }
            else
            {
                echo  "Error";
            }
        }
    }else
    {
        echo "Tout les champs sont requis";
    }
?>
    