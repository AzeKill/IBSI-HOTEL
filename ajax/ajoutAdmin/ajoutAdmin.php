<?php
    include('../../config.php');
    //legal input values
    $nom = legal_input($_POST['newus']);
    $password = legal_input($_POST['newps']);
    $cost = ['cost' => 12];
    $password = password_hash($password, PASSWORD_BCRYPT, $cost);
        
    if(!empty($nom) && !empty($password)){
        //  Sql Query to insert user data into database table
        Insert_data($nom,$password);
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
    function insert_data($nom,$password){
    
        global $bdd;

        $insert = $bdd->prepare('INSERT into admin(adminName,passwordAdmin,token)  VALUES(:newus, :newps, :token)');
        $execute = $insert->execute(array(
            'newus' => $nom,
            'newps' => $password,
            'token' => bin2hex(openssl_random_pseudo_bytes(64))
        ));

        if($execute==true)
        {
            echo "User data was inserted successfully";
        }
        else{
            echo  "Error: " . $insert . "<br>";
        }
    }
?>
    