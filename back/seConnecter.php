<?php

session_start();

include('../bd/connexionDB.php');

if (isset($_POST['login'])) {
    $username = $_POST['username']; // Recupération du champ pour le username
    $password = $_POST['password']; // Recupération du champ pour le password

    $error = array(); // Tableau d'erreurs

    //Si le username ou le password est vide
    if (empty($username)) {
        $error["admin"] = "Veuillez renseigner votre username";
        $_SESSION["err"] = $error;
        header("Location:../index.php");
    } else if (empty($password)) {
        $error["admin"] = "Veuillez renseigner votre password";
        $_SESSION["err"] = $error;
        header("Location:../index.php");
    }


    if (count($error) == 0) {
        $requete = " SELECT * FROM users WHERE username='$username' AND password='$password' ";

        $result = mysqli_query($connect, $requete);

        if (mysqli_num_rows($result) == 1) {

            $_SESSION['admin'] = $username;

            header("Location:../views/accueil.php");
        } else {
            $error['admin'] =  "Nom d'utilisateur ou mot de passe incorrect";
            $_SESSION["err"] = $error;
            header("Location:../index.php");
        }
    }
}