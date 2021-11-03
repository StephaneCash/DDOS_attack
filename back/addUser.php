<?php
include('../bd/connexionDB.php');

if (isset($_POST['add'])) {
    $noms = $_POST['noms'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $photo = isset($_FILES['photo']['name']) ? $_FILES['photo']['name'] : "";
    $Img_temp = $_FILES['photo']['tmp_name'];
    move_uploaded_file($Img_temp, "../img/" . $photo);
}

$query = "INSERT INTO users (noms, adresseEmail,  username, password, statut, role, profile)
            VALUES('$noms', '$email', '$username','$password', 'ACTIVE', 'ADMIN', '$photo')";

$result = mysqli_query($connect, $query);

if ($result) {
    move_uploaded_file($_FILES['photo']['tmp_name'], '../img/$image');
    $_SESSION['register'] = "";
    header("Location:../views/users.php");
} else {
    echo "Pas d'enregistrement de user";
}