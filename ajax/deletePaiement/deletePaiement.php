<?php
    include('../../config.php');
    //legal input values
    $id = legal_input($_POST['ida']);
    
    Insert_data($id);

    // convert illegal input value to ligal value formate
    function legal_input($value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }
    // // function to insert user data into database table
    function insert_data($id){
    
        global $bdd;

        $delete = $bdd->prepare('DELETE from paiement where idPaie = :id');
        $execute = $delete->execute(array(
            'id' => $id
        ));

        if($execute==true)
        {
            echo "Paiement delete";
        }
        else{
            echo "Error delete";
        }
    }
?>
    