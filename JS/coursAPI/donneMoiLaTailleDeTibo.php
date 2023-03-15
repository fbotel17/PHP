<?php
    /*
    $retour[0] = rand(0, 130);
    $retour[1] = "<-- Taille de Tibo en cm";

    */

    //en method GET
    /*
    $retour[0] = $_GET['key1'];
    $retour[1] = $_GET['key2'];
    */ 

    $data = json_decode(file_get_contents('php://input'), true);
    $retour[0] = $data['key1'];
    $retour[1] = $data['key2'];

    echo json_encode($retour);
?>
