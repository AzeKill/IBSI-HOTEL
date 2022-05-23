<?php
include('../../config.php');

//legal input values
 $type     = legal_input($_POST['type']);
 $lit = legal_input($_POST['lit']);

if(!empty($type) && !empty($lit)){
    //  Sql Query to insert user data into database table
    Insert_data($type,$lit);
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
 function insert_data($type,$lit){
 
     global $bdd;

    $insert = $bdd->prepare('INSERT INTO chambre(type,lit,place) VALUES(:type, :lit, :place)');
    $execute = $insert->execute(array(
        'type' => $type,
        'lit' => $lit,
        'place' => "Free"
    ));

     if($execute==true)
     {
       echo "Chambre ajouté";
     }
     else{
      echo  "Error" ;
     }
 }
?>