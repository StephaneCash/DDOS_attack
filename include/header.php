<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <title>Menu</title>
</head>

<style>
.navbar {
    min-height: 80px;
    font-size: 17px;
    padding: 10px;
    color: white !important;
    font-family: Segoe UI;
}

a {
    color: #242424;
}
</style>

<body>
    <nav class="navbar  navbar-fixed-top" style="background-color: silver;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="accueil.php" class="navbar-brand" title="Journal éléctroniquen de  l'ISPT-KIN">
                    <span class="glyphicon glyphicon-home small"> </span>
                    Liste d'attaques
                </a>
            </div>

            <ul class="nav navbar-nav">

                <li><a href="../views/simulations.php" title="Simulation">Simulation</a></li>


                <li><a href="../views/users.php" title="Users">Utilisateurs</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li> <a href="#" title="User"><?php echo $_SESSION['admin'] ?> <i class='glyphicon glyphicon-user '>
                        </i> </a></li>
                <li><a href="../back/Sedeconnecter.php" title="Déconnexion"><i class='glyphicon glyphicon-log-out '></i>
                        Déconnexion</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>