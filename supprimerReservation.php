<?php
    include('config.php');
    $del = $bdd->prepare("DELETE FROM `reservationChambre` WHERE dateSortie <now()");
    $check = $del->execute(array());

    $up = $bdd->prepare("UPDATE chambre SET place = 'Free', idRéservation=NULL, dateFinReservation=NULL WHERE dateFinReservation < now()");
    $check = $up->execute(array());
?>