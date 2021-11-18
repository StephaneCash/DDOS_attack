<?php
$connect = mysqli_connect("localhost", "root", "02745500Lut", "attakWeb");

if(!$connect){
    die("Veuiller vérifier la connexion à la base de données " .mysqli_error())
}