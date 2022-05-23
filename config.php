<?php
    $host='localhost';
    $dbname='ibsi2';
    $user='ibsi';
    $mdp='Protected1';

    try {
        $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", "$user", "$mdp");
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>