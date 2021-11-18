<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Users | Admin</title>
</head>

<style>
    a {
        color: white;
    }

    body {
        font-family: Segoe UI;
    }
</style>

<body style="background-color:#f0f0f0">

    <?php
    include('../include/header.php');
    include('../bd/connexionDB.php');
    if (isset($_GET['dataInput'])) {
        $dataInput = isset($_GET['dataInput']) ? $_GET['dataInput'] : "";

        $requete = "SELECT * FROM users WHERE username like '%$dataInput%' OR noms like '%$dataInput%'";

        $resp = mysqli_query($connect, $requete);
    } else {
        $requete = "SELECT * FROM users";

        $resp = mysqli_query($connect, $requete);
    }

    $rep = "";
    ?>

    <div class="container" style="margin-top: 100px; background:#fff; padding:10px; box-shadow:2px 2px 10px 2px silver">

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        Ajouter un nouvel utilisateur
                    </p>
                    <a href="addUser.php">
                        <button class="btn btn-primary">Ajouter un nouvel user</button>
                    </a>
                </div>
                <div class="col-md-6">
                    <form action="users.php" method="GET">
                        <p>
                            Rechercher
                        </p>
                        <input type="search" name="dataInput" class="form-control" placeholder=" Rechercher" style="width: 100%;">
                        <input type="submit" class="btn btn-info" value="Rechercher" style="margin-top:10px">
                    </form>
                </div>
            </div>
        </div>

        <hr>
        <?php
        $rep = "
            <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Noms</th>
                    <th>Username</th>
                    <th>Adresse_Email</th>
                    <th style='width:23%'>Opérations</th>
                </tr>
            </thead>";

        if (mysqli_num_rows($resp) < 1) {
            $rep .= "
            <tbody>
                <tr>
                    <td colSpan='5px'style='text-align:center'>Aucun utilisateur n'est enregistré.</td>
                </tr>
            </tbody>";
        }

        while ($user = mysqli_fetch_array($resp)) {
            $rep .= "
                <tbody>
                    <tr>
                        <td>" . $user['idU'] . "</td>
                        <td>" . $user['noms'] . "</td>
                        <td>" . $user['username'] . "</td>
                        <td>" . $user['adresseEmail'] . "</td>
                        <td>
                            <a onClick = 'return confirm(Etes-vous sûr de vouloir supprimer cet utilisateur ?')' href='../back/deleteUser.php?id=" . $user['idU'] . "' style='color:white'>
                                <button class='btn btn-danger' style='color:white'>Supprimer</i>
                            </a>
                            <a href='editUser.php?id=" . $user['idU'] . "' style='color:white'>
                                <button class='btn btn-info' style='margin-left:10px'>Editer</i>
                            </a>
                            <a href='users.php?id=" . $user['idU'] . "' style='color:white'>
                                <button class='btn btn-success' style='margin-left:10px'>Détail</i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            ";
        }
        $rep .= "
            </table>
        ";
        echo $rep;
        ?>


    </div>

    <div class="container" style="background-color: white; margin-top:20px; padding:10px;box-shadow:2px 2px 10px 2px silver">
        <div class="detail">
            <p>
                Détails sur l'utilisateur
            </p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="text-align:center">Noms et photo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    if (isset($_GET['id'])) {
                        $idUser = $_GET['id'];
                        $requete = "SELECT * FROM users WHERE idU='$idUser'";
                        $resultat = mysqli_query($connect, $requete);
                        $num = mysqli_num_rows($resultat);
                        while ($userD = mysqli_fetch_array($resultat)) {
                            $nomsU = $userD['noms'];
                            $photoU = $userD['profile'];
                        }
                    }


                    ?>


                    <?php
                    if (!empty($num)) {
                        echo "<tr>
                                <td style='text-align:center; '>$nomsU <br><br><img style='width:100px; height:100px; border-radius:100px' src='../img/$photoU'></td>
                            </tr>";
                    } else {
                        echo "
                            <tr>
                                <td colSpan='5px' style='text-align:center'>
                                    Cliquer sur un élément svp
                                </td>
                            </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>