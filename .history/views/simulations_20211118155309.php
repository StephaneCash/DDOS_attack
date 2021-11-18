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

<style>
    img {
        margin-bottom: 10px;
        margin-right: 10px;
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    .message-item {
        margin: 0.5rem 0;
        padding: 0.5rem;
        display: flex;
        align-items: center;
    }

    .message-image {
        width: 50px;
        height: 50px;
        margin-right: 1rem;
    }

    .message-item img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }
</style>

<body style="background-color: #f0f0f0;">
    <?php
    include('../include/header.php');
    ?>

    <div class="container" id="containerPrincipal" style="margin-top: 100px;">
        <div class="col-md-12">
            <div class="row">
                <div class='col-md-6 divL'>
                    <div class="col-md-12" style="padding:10px; margin-top: 10px; box-shadow:2px 2px 10px 2px silver">
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
                    <div class="col-md-12 ddos" style="padding-left: 0; padding-right: 0; margin-top: 40px; display:none; box-shadow:2px 2px 10px 2px silver">
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
                                <div>
                                    <button class="btn btn-danger start" id="ddos">Start DDOS</button>
                                    <button class="btn btn-danger force" id="force" style="display: none;">Forcer l'attaque</button>
                                    <button class="btn btn-primary stop" id="stop_ddos" style="display: none; margin-top:-34px; margin-left:150px">Empêcher l'attaque</button>

                                    <div class="stop_attak" style="display: none;">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" id='xss' style="padding-left: 0; padding-right: 0; margin-top: 40px; display:none;box-shadow:2px 2px 10px 2px silver">
                        <div class="row">
                            <div class="col-md-12">
                                <section id="user-input">
                                    <h5> Cross-Site Scripting (XSS) Attacks</h5>
                                    <form>
                                        <div class="form-group">
                                            <label for="user-message">Votre Message</label>
                                            <textarea id="user-message" name="user-message" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="message-image">Message Image</label>
                                            <input type="text" id="message-image" name="message-image" class="form-control" />
                                        </div>
                                        <button type="submit" class="btn btn-danger">Envoyer le message</button>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" id='resultatAttak' style="padding-left: 0; padding-right: 0; margin-top: 40px; display:none">
                        <div class="row">
                            <div class="col-md-12">
                                resultatAttak
                            </div>
                        </div>
                    </div>

                </div>
                <div class='col-md-6 divC'>
                    <div class="col-md-12" style="padding-left: 0; padding-right: 0; margin-top: 10px; margin-left:10px">
                        <div class="row">
                            <h5>Résultat</h5>
                            <div id="res"></div>
                            <p></p>

                            <section id="user-messages">
                                <div class="ul" style="border:1px solid silver; 
                                            padding:20px;margin-top:10px; 
                                            box-shadow:2px 2px 10px 2px silver;
                                            background-color:white; display:none"></div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script src="../jsFiles/simul.js"></script>

</body>

</html>