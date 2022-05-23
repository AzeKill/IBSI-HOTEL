<?php
    //open connection to mysql db
    $pdo = new PDO("mysql:host=localhost;dbname=ibsi2;charset=utf8", "root", "Protected1") or die("Error");

    //fetch table rows from mysql db
    $sql = "select * from admin";	
    $stmt = $pdo->query($sql);

    //create an array
    $emparray = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
?>