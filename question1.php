<?php
include_once "classes.php";
include_once "distance_response.php";
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <a href="question1.php" class="menu-item active-question d-block">
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
                <div class="form">
                    <div class="row">
                            <p>
                                Définir une classe Point avec deux propriétés private x et y (x est l’abscisse et y est
                                l’ordonnée), et quatre méthodes :<br>
                                — constructeur qui sert à définir les propriétés de la classe<br>
                                — afficherX qui retourne la valeur de x<br>
                                — afficherY qui retourne la valeur de y<br>
                                — distance qui calcule la distance entre le point actuel et le nouveau point et retourne le résultat<br><br>
                            </p>
                        <?php 
                                global $result;
                                if($result) {
                                    
                                    echo "<div class='col-md-12'>
                                    <div class='alert alert-success'>".$result."</div>
                                    </div>";
                                    }
                        ?>
                        <div class='col-md-12 d-flex justify-content-center' >
                            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <table width="1000" cellpadding="20" style="color:white;">
                                <tr>
                                <td>
                                <span class="form-group">
                                    <input type="text" class="form-control-lg" name="x1" placeholder="Entrez X1">
                                </span>
                                <div class="form-group">
                                    <input type="text" class="form-control-lg" name="y1" placeholder="Entrez Y1">
                                </div>
                                <span class="form-group">
                                    <input type="text" class="form-control-lg" name="x2" placeholder="Entrez X2">
                                </span>
                                <div class="form-group">
                                    <input type="text" class="form-control-lg" name="y2" placeholder="Entrez Y2">
                                </div>
                                
                                <input type="submit" value="Calculer distance" class="btn btn-primary calc">
                                </td>
                                <td>
                                    <div id="sketch-holder">
                                    
                                </div>
                                </td>
                                </tr>
                                </table>
                            </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/p5.min.js"></script>
<script src="./js/draw.js"></script>
</body>

</html>