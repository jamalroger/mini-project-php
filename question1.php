<?php
include_once "classes.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mini Projet 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="inc/style.css">
</head>

<body class="lead">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="question1.php" class="menu-item active d-block">
                    Question 1
                </a>
            </div>
            <div class="col-sm-4">
                <a href="question2.php" class="menu-item d-block">
                    Question 2
                </a>
            </div>
            <div class="col-sm-4">
                <a href="question3.php" class="menu-item d-block">
                    Question 3
                </a>
            </div>
            <div class="col-sm-12">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                </div>
                <div class="form">
                    <div class="row">
                        <div class="col-md-6"></div>
                            <p>
                                Définir une classe Point avec deux propriétés private x et y (x est l’abscisse et y est
                                l’ordonnée), et quatre méthodes :<br>
                                — constructeur qui sert à définir les propriétés de la classe<br>
                                — afficherX qui retourne la valeur de x<br>
                                — afficherY qui retourne la valeur de y<br>
                                — distance qui calcule la distance entre le point actuel et le nouveau point et retourne le résultat<br><br>
                            </p>
                            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control-lg" placeholder="Entrez X">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control-lg" placeholder="Entrez Y">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Calculer distance" class="btn btn-primary calc">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 bg-white">
                            <div class="img-container">
                                <img class="img-fluid" src="inc/1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>