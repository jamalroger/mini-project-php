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
                <a href="question2.php" class="menu-item  d-block">
                    Question 2
                </a>
            </div>
            <div class="col-sm-4">
                <a href="question3.php" class="menu-item active-question d-block">
                    Question 3
                </a>
            </div>
            <div class="col-sm-12">
                <div class="form">
                    <div class="row">
                        <div class="col-md-6">

                            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

                                <div id="rec1">
                                    <label> Rectangle <a href="#" onclick="document.getElementById('rec2').style.display='block'" class="btn btn-primary"> Ajouter Rectangle </a> <a href="#" onclick="document.getElementById('point2').style.display='block'" class="btn btn-primary"> Ajouter Point </a></label>
                                    <div class="form-group">
                                        <input type="text" name="rec-p-xy" class="form-control-lg" placeholder="Entrez X,Y">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="rec-h" class="form-control-lg" placeholder="Entrez longeur">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="rec-w" class="form-control-lg" placeholder="Entrez largeur ">
                                    </div>
                                </div>
                                <div id="point2" style="display:none">
                                    <label> Point </label>
                                    <div class="form-group">
                                        <input type="text" name="p-xy" class="form-control-lg" placeholder="Entrez X,Y">
                                    </div>
                                </div>

                                <div id="rec2" style="display:none">
                                    <label> Rectangle 2 </label>
                                    <div class="form-group">
                                        <input type="text" name="rec2-p-xy" class="form-control-lg" placeholder="Entrez X,Y">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="rec2-h" class="form-control-lg" placeholder="Entrez longeur">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="rec2-w" class="form-control-lg" placeholder="Entrez largeur ">
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group">
                                        <input type="submit" name="surface" value="Calculer surface" class="btn btn-primary">
                                        <input type="submit" name="inter1" value="Interieur point" class="btn btn-primary">
                                        <input type="submit" name="inter2" value="Interieur Rectangle" class="btn btn-primary">
                                        <input type="submit" name="egalite" value="egalite" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="col-md-6 bg-white" style="color:black">


                            <?php
                            include "./reclange_responce.php";
                            ?>

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