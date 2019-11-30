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
            <a href="question2.php" class="menu-item active d-block">
                Question 2
            </a>
        </div>
        <div class="col-sm-4">
            <a href="question3.php" class="menu-item d-block">
                Question 3
            </a>
        </div>
        <div class="col-sm-12">
            <div class="form">
                <div class="row">
                    <div class="col-md-6">
                        Un triangle est constitué par 3 points. Définir une classe Triangle avec trois propriétés
                        pt1, pt2 et pt3 (les coins d’un triangle), et les méthodes suivantes :<br>
                        — constructeur qui sert à définir les propriétés de la classe<br>
                        — isocele qui retourne True si le triangle est isocèle ou False si non<br>
                        — equilateral qui retourne True si le triangle est équilatéral ou False si non<br>
                        — rectangle qui retourne True si le triangle est rectangle ou False si non<br><br>
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control-lg" placeholder="Entrez le point X1,Y1">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-lg" placeholder="Entrez le point X2,Y2">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-lg" placeholder="Entrez le point X3,Y3">
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
</div><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>