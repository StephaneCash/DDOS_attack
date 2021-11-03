<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php
session_start();

include("../bd/connexionDB.php");

if (isset($_POST['register'])) {

    $noms = $_POST['noms'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $passwordConfirm = $_POST['passwordConfirm'];
    $photo = $_FILES['photo']['name'];

    $error = array();

    if (empty($noms)) {
        $error['register'] = "Entrer vos noms svp !";
    } elseif (empty($email)) {
        $error['register'] = "Entrer une adresse email svp !";
    } else if (empty($username)) {
        $error['register'] = "Entrer une username svp !";
    } else if (empty($password)) {
        $error['register'] = "Créer un mot de passe svp !";
    } else if ($password != $passwordConfirm) {
        $error['register'] = "Les deux mots de passe ne correspondent pas !";
    }

    if (count($error) == 0) {
        $query = "INSERT INTO users (noms, adresseEmail,  username, password, statut, role, photo)
            VALUES('$noms', '$email', '$username','$password', 'ACTIVE', 'ADMIN', '$photo')";

        $result = mysqli_query($connect, $query);

        if ($result) {
            move_uploaded_file($_FILES['photo']['tmp_name'], '../img/$image');
            $_SESSION['register'] = "";
            echo "<div class='alert alert-success container ' style='margin-top:12px'>Votre compte a été créé avec succès <a href='../index.php'> Cliquer ici pour vous connecter</div></a>";
        } else {

            echo "<div class='alert alert-danger container ' style='margin-top:12px'>Echec de création de compte <a href='../../apply.php.php'> Cliquer ici pour vous connecter</div></a>";
        }
    }
}

if (isset($error['register'])) {

    $s = $error['register'];

    $_SESSION['register'] = $s;

    header("Location:../views/newCompte.php");
}