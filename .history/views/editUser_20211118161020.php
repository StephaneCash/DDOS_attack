<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <title>Edit | User</title>
</head>

<style>
    * {
        font-family: Segoe UI;
    }
</style>

<body style="background-color:#f0f0f0">

    <?php
    include("../include/header.php");
    include('../bd/connexionDB.php');

    if (isset($_GET['id'])) {
        $idU = $_GET['id'];
    }
    $requete = "SELECT * FROM users WHERE idU='$idU'";
    $resp = mysqli_query($connect, $requete);

    $user = mysqli_fetch_array($resp);

    ?>

    <div class="container">
        <div class="col-md-12" style="margin-top:100px">
            <div class="row">
                <h4 style="border:1px solid silver; padding:10px; margin-bottom:10px">Editer cet utilisateur</h4>
                <div class="col-md-12" style="border:1px solid silver; padding:20px">

                    <form action="../back/editUser.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" value="<?php echo $idU ?>" name="idU" hidden>
                            <label>Entrer vos noms</label>
                            <input type="text" class="form-control" name="noms" placeholder="Noms svp" required value="<?php echo $user['noms']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Entrer une adresse email </label>
                            <input type="email" class="form-control" name="email" placeholder="Une adresse email svp" required value="<?php echo $user['adresseEmail']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Entrer un username </label>
                            <input type="text" class="form-control" name="username" placeholder="Username svp" required value="<?php echo $user['username']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Ajouter une photo</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Ajouter" name="edit">
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>