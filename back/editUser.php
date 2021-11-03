<?php
include("../bd/connexionDB.php");

if (isset($_POST['edit'])) {
    $idU = $_POST['idU'];
    $noms = $_POST['noms'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $photo = isset($_FILES['photo']['name']) ? $_FILES['photo']['name'] : "";
    $Img_temp = $_FILES['photo']['tmp_name'];
    move_uploaded_file($Img_temp, "../img/" . $photo);
}



if (!empty($photo)) {
    $query = "UPDATE users SET noms='$noms', adresseEmail='$email', username='$username', profile='$photo' WHERE idU='$idU'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        move_uploaded_file($_FILES['photo']['tmp_name'], '../img/$profile');
        header("Location:../views/users.php");
    }
} else {
    $query = "UPDATE users SET noms = '$noms', adresseEmail='$email', username='$username' WHERE idU='$idU'";
    $result = mysqli_query($connect, $query);
    header("Location:../views/users.php");
}