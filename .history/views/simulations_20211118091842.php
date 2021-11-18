<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/simulation.css">
    <title>Sumulations</title>
</head>

<body style="background-color: #f0f0f0;">
    <?php
    include('../include/header.php');
    ?>

    <div class="container" id="containerPrincipal" style="margin-top: 100px;">
        <div class="col-md-12">
            <div class="row">
                <div class='col-md-6 divL'>
                    <div class="col-md-12" style="padding-left: 0; padding-right: 0; margin-top: 10px">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Choisir une attaque</label>
                                    <select class="form-control" id="" name="att" value="">
                                        <option>--Choisir une attaque--</option>
                                        <option value="ddos">DDOS</option>
                                        <option value="cross">xss Cross</option>
                                    </select>
                                    <i class="i" style="color:brown;"></i>
                                </div>
                                <input type="submit" value="Valider" id="valider" class="btn btn-success">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 ddos" style="padding-left: 0; padding-right: 0; margin-top: 40px; display:none">
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    Attak ddos
                                </p>
                                <div class="form-group">
                                    <label id="jj">Entrer l'adresse de l'host</label>
                                    <input type="text" placeholder="Adresse hote" name="adresse" class="form-control host" id="host">
                                </div>
                                <div class="form-group">
                                    <label>Préciser le temps</label>
                                    <input type="number" placeholder="Adresse hote" name="adresse" class="form-control" id="time">
                                </div>
                                <button class="btn btn-primary start" id="ddos">Start DDOS</button>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 cross" style="padding-left: 0; padding-right: 0; margin-top: 40px; display:none">
                        <div class="row">
                            <div class="col-md-12">
                                <section id="user-input">
                                    <form>
                                        <div class="form-group">
                                            <label for="user-message">Votre Message</label>
                                            <textarea id="user-message" name="user-message" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="message-image">Message Image</label>
                                            <input type="text" id="message-image" name="message-image" class="form-control" />
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </form>
                                </section>
                                <section id="user-messages">
                                    <div class="ul" sty></div>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-md-6 divC'>
                    <h5>Résultat</h5>
                    <div id="res"></div>
                    <p></p>
                </div>
            </div>
        </div>
    </div>

    <script src="../jsFiles/simul.js"></script>

</body>

</html>