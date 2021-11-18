<?php
require_once("../bd/connexionDB.php");


global $connect;

$nom = $_POST['nomAt'];
$cible = $_POST['cibleAt'];
$temps = $_POST['tsec'];

$query = "INSERT INTO attak (nom, cible, date, statut) VALUES('ddos', 'http://', NOW(), 'ddos')";

$result = mysqli_query($connect, $query);

if ($result) {
    echo "<script>alert('Bien enregistré')</script>";
} else {
    echo "<script>alert('Echec')</script>";
}
