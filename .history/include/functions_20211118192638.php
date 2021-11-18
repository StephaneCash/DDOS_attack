<?php 
    // databse connection
    require_once("../bd/connexionDB.php");

    function Insert_attaque(){
        global $connect;
        $nom = $_POST['nomAt'];
        $cible = $_POST['cibleAt'];
        $temps = $_POST['tsec'];

       $query = "INSERT INTO "
    }
?>