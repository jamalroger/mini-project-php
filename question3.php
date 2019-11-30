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
            <a href="question1.php" class="menu-item d-block">
                Question 1
            </a>
        </div>
        <div class="col-sm-4">
            <a href="question2.php" class="menu-item d-block">
                Question 2
            </a>
        </div>
        <div class="col-sm-4">
            <a href="question3.php" class="menu-item active d-block">
                Question 3
            </a>
        </div>
        <div class="col-sm-12">
            <div class="form">
                <div class="row">
                    <div class="col-md-6">
                        Soit un Rectangle de largeur w et de hauteur h à partir d’un point pt.<br>
                        — Définir une classe Rectangle avec les propriétés (w,h et pt) qui sont définis dans le constructeur<br>
                        — Définir une méthode surface qui calcule et retourne la surface du rectangle<br>
                        — Définir une méthode interieur1 qui teste si un point donné (en paramètre) est à l’intérieur du rectangle.<br>
                        — Définir une méthode interieur2 qui teste si un rectangle donné (en paramètre) est à l’intérieur du rectangle actuel.<br>
                        — Définir une méthode egalite qui teste l’égalité d’un rectangle donné (en paramètre) et le rectangle actuel.<br><br>

                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control-lg" placeholder="Entrez X,Y">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-lg" placeholder="Entrez la hauteur">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-lg" placeholder="Entrez la langueur">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Calculer distance" class="btn btn-primary calc">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 bg-white">
                        <div class="img-container">
                            <img class="img-fluid" src="inc/2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>