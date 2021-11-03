<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <title>Add | User</title>
</head>

<style>
* {
    font-family: Segoe UI;
}
</style>

<body>

    <?php
    include("../include/header.php");
    ?>

    <div class="container">
        <div class="col-md-12" style="margin-top:100px">
            <div class="row">
                <h4 style="border:1px solid silver; padding:10px; margin-bottom:10px">Ajouter un nouvel user</h4>
                <div class="col-md-12" style="border:1px solid silver; padding:20px">

                    <form action="../back/addUser.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Entrer vos noms</label>
                            <input type="text" class="form-control" name="noms" placeholder="Noms svp" required>
                        </div>
                        <div class="form-group">
                            <label>Entrer une adresse email </label>
                            <input type="email" class="form-control" name="email" placeholder="Une adresse email svp"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Entrer un username </label>
                            <input type="text" class="form-control" name="username" placeholder="Username svp" required>
                        </div>
                        <div class="form-group">
                            <label>Créer un mot de passe</label>
                            <input type="password" class="form-control" name="password" placeholder="Entrer un password"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Ajouter une photo</label>
                            <input type="file" class="form-control" name="photo" required>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Ajouter" name="add">
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>