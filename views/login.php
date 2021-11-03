<?php
session_start();
if (isset($_SESSION["err"]))
    $erreurLogin = $_SESSION["err"];
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
    <link rel="stylesheet" href="../css/cssViews/login.css">
    <title>Login | Admin</title>
</head>

<body class="container">

    <div class="container-login">
        <i class="fa fa-user-o iconF"></i>
        <br>
        <h5 style="text-align:center">Veuillez vous connecter</h5>
        <br>
        <form action="../back/seConnecter.php" method="POST">
            <?php
            if (!empty($_SESSION['err'])) {
                $erreur = $_SESSION["err"]["admin"];
                echo "<div class='alert alert-danger'>$erreur</div>";
            }
            ?>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Votre username" autofocus>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Votre password">
            </div>

            <input type="submit" class="btn btn-success" value="Seconnecter" name="login">
            <br><br>
            Pas de compte ? Créer un <a href="newCompte.php">Ici</a>
        </form>
    </div>

</body>

</html>