<?php
    require_once '../config.php'; // On inclut la connexion à la base de donnée

    //fetch table rows from mysql db
    $sql = "select * from chambre where place ='Free'";	
    $stmt = $bdd->query($sql);

    //create an array
    $emparray = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
?>