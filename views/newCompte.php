<?php
session_start();
if (isset($_SESSION["register"]))
    $erreurLogin = $_SESSION["register"];
else {
    $erreurLogin = "";
}
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/cssViews/newCompte.css">
    <title>Inscription</title>
</head>

<style>
* {
    font-size: 14px;
    font-family: Segoe UI;
}

body {
    background: rgb(248, 248, 248);
}
</style>

<body class="container">

    <div class="container-newCompte">
        <center>
            <h3>Créer votre compte</h3>
        </center>

        <form action="../back/registerUser.php" method="POST" enctype="multipart/form-data">

            <?php
            if (!empty($_SESSION['register'])) {
                $erreur = $_SESSION['register'];
                echo "<div class='alert alert-danger'>$erreur</div>";
            }
            ?>
            <div class="form-group">
                <label>Entrer vos noms</label>
                <input type="text" class="form-control" placeholder="Vos noms svp" name="noms">
            </div>
            <div class="form-group">
                <label>Entrer votre adresse email</label>
                <input type="email" class="form-control" placeholder="Votre adresse email svp" name="email">
            </div>
            <div class="form-group">
                <label>Créer un username</label>
                <input type="text" class="form-control" placeholder="Créer username svp" name="username">
            </div>
            <div class="form-group">
                <label>Créer un mot de passe</label>
                <input type="password" class="form-control" placeholder="Créer un password svp" name="password">
            </div>
            <div class="form-group">
                <label>Veuillez confirmer votre mot de passe</label>
                <input type="password" class="form-control" placeholder="Confirmer votre mot de passe svp"
                    name="passwordConfirm">
            </div>
            <div class="form-group">
                <label>Chosir une photo</label>
                <input type="file" class="form-control" name="photo">
            </div>
            <button class="btn btn-success" name="register"><i class="fa fa-refresh"></i> Créer un compte</button>
        </form>
        <br>
        Si vous possédez déjà un compte, connectez-vous <a href="../index.php"> Ici</a>
    </div>

</body>

</html>