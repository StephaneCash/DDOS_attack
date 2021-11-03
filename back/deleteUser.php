<?php

include('../bd/connexionDB.php');

if (isset($_GET['id'])) {
    $idU = $_GET['id'];
}

$query = "DELETE FROM users WHERE idU='$idU'";

$result = mysqli_query($connect, $query);

if ($result) {
    header('Location:../views/users.php');
}