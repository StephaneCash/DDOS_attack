<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <title>Sumulations</title>
</head>

<body style="background-color: #f0f0f0;">
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/simulations.js"></script>

    <?php
    include('../include/header.php');
    ?>

    <div class="container" id="div1" style="margin-top: 100px;">
        <div class="col-md-12">
            <div class="row">
                <div class='col-md-6 divL'>
                    <div class="form-group">
                        <label id="jj">Entrer l'adresse de l'host</label>
                        <input type="text" placeholder="Adresse hote" name="adresse" class="form-control host"
                            id="host">
                    </div>
                    <div class="form-group">
                        <label>Préciser le temps</label>
                        <input type="number" placeholder="Adresse hote" name="adresse" class="form-control" id="time">
                    </div>
                    <button class="btn btn-primary start" id="start">Start</button>
                    <button class="btn btn-danger" id="stop">Stop</button>
                </div>
                <div class='col-md-6'>
                    <h5>Résultat</h5>
                    <div id="res"></div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>