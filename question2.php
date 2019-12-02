<?php
include_once "classes.php";
$result = "";
if(isset($_POST['point1']) && !empty($_POST['point1']) &&
    isset($_POST['point2']) && !empty($_POST['point2']) &&
    isset($_POST['point3']) && !empty($_POST['point3'])) {
    $point1 = $_POST['point1'];
    $point2 = $_POST['point2'];
    $point3 = $_POST['point3'];
    $point1 = explode(',',$point1);
    $point2 = explode(',',$point2);
    $point3 = explode(',',$point3);
    $x1 = $point1[0];
    $y1 = $point1[1];
    $x2 = $point2[0];
    $y2 = $point2[1];
    $x3 = $point3[0];
    $y3 = $point3[1];

    $x1 = $point1[0];
    $y1 = $point1[1];

    $x2 = $point2[0];
    $y2 = $point2[1];

    $x3 = $point3[0];
    $y3 = $point3[1];

    $pointClass1 = new Point($x1,$x1);
    $pointClass2 = new Point($x2,$x2);
    $pointClass3 = new Point($x3,$x3);
    $triangle = new Triangle($pointClass1, $pointClass2, $pointClass3);
    if($_POST['question'] === "isocele") {
        $result = $triangle->isocele() ?  "True: Donc le triangle est isocèle" : "False: Le triangle n'est pas isocèle";
        
    }
    if($_POST['question'] === "equilateral") {
        $result = $triangle->equilateral() ? "True: Le triangle est equilateral" : "False: Le triangle n'est pas equilateral";
    }
    if($_POST['question'] === "rectangle") {
        $result = $triangle->rectangle() ? "True: Le triangle est rectangle" : "False: Le triangle n'est pas rectangle";
    }

    echo '<script>
    function setup() {
        let canvas = createCanvas(520, windowHeight-290);
        canvas.parent("sketch-holder");
    }

    function draw() {
        background(240, 248, 255);
        scale(1.30);
        stroke("red");
        strokeWeight(3);
        line(2, 2, 2, 400);

        fill(255, 255, 255);
        stroke("black");
        text("Y", 11, 400);

        stroke("red");
        strokeWeight(3);
        line(2, 2, 370, 2);


        fill(255, 255, 255);
        stroke("black");
        text("X", 380, 11);

        let point1 = addPoint('.$x1.', '.$y1.', "purple");
        let point2 = addPoint('.$x2.', '.$y2.', "black");
        let point3 = addPoint('.$x3.', '.$y3.', "red");
       // let point4 = addPoint(30,100,"green");

        return drawShape(point1, point2,point3);
    }


    function addPoint(x, y, color) {
        stroke(color); // Change the color
        strokeWeight(5);
        point(x, y);

        strokeWeight(1);
        line(0, y, x, y);
        line(x, y, x, 0);

        return [x, y];
    }

    function drawShape(...coor) {
        if (coor.length == 2) {
            let [x1, y1] = coor[0];
            let [x2, y2] = coor[1];
            line(x1, y1, x2, y2);
        }

        if (coor.length == 3 && Array.isArray(coor[1])) {
            let [x1, y1] = coor[0];
            let [x2, y2] = coor[1];
            let [x3, y3] = coor[2];

            fill(0, 255, 0, 160);
            triangle(x1, y1, x2, y2, x3, y3);
        }

        if (coor.length == 3) {
            let [x1, y1] = coor[0];
            let width = coor[1];
            let height = coor[2];

            fill(0, 255, 0, 160);
            rect(x1, y1, width, height);
        }
    }</script>';
} else {
    if(isset($_POST['question'])) {
        $result = "les champs sont obligatoire";
    }
}
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
            <a href="question2.php" class="menu-item active-question d-block">
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
                    <?php if($result) { ?>
                    <div class="col-md-12">
                        <div class="alert alert-success"><?php echo $result ?></div>
                    </div>
                    <?php  }  ?>
                    <div class="col-md-6">
                        <div class="nav nav-pills" id="v-pills-tab" role="tablist">
                            Un triangle est constitué par 3 points. Définir une classe Triangle avec trois propriétés
                            pt1, pt2 et pt3 (les coins d’un triangle), et les méthodes suivantes :<br>
                            <!--                            <a class="active" id="v-pills-one-tab" data-toggle="pill" href="#v-pills-one" role="tab" aria-controls="v-pills-one" aria-selected="true">-->
                            — constructeur qui sert à définir les propriétés de la classe<br>
                            <!--                            </a>-->
                            <a id="v-pills-two-tab" data-toggle="pill" href="#v-pills-two" role="tab" aria-controls="v-pills-two" aria-selected="false">
                                — isocele qui retourne True si le triangle est isocèle ou False si non<br>
                            </a>
                            <a id="v-pills-three-tab" data-toggle="pill" href="#v-pills-three" role="tab" aria-controls="v-pills-three" aria-selected="false">
                                — equilateral qui retourne True si le triangle est équilatéral ou False si non<br>
                            </a>
                            <a id="v-pills-four-tab" data-toggle="pill" href="#v-pills-four" role="tab" aria-controls="v-pills-four" aria-selected="false">
                                — rectangle qui retourne True si le triangle est rectangle ou False si non<br><br>
                            </a>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <!--                            <div class="tab-pane fade" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab">-->
                            <!--                            </div>-->
                            <div class="tab-pane fade show active" id="v-pills-two" role="tabpanel" aria-labelledby="v-pills-two-tab">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                    <input type="hidden" name="question" value="isocele">
                                    <div class="form-group">
                                        <input type="text" class="form-control-lg" name="point1" placeholder="Entrez le point X1,Y1">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control-lg" name="point2" placeholder="Entrez le point X2,Y2">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control-lg" name="point3" placeholder="Entrez le point X3,Y3">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary calc btn-lg" value="Tester si le triangle est isocele">
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="v-pills-three" role="tabpanel" aria-labelledby="v-pills-three-tab">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                    <input type="hidden" name="question" value="equilateral">
                                    <div class="form-group">
                                        <input type="text" class="form-control-lg" name="point1" placeholder="Entrez le point X1,Y1">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control-lg" name="point2" placeholder="Entrez le point X2,Y2">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control-lg" name="point3" placeholder="Entrez le point X3,Y3">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary calc btn-lg" value="Tester si le triangle est equilateral">
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="v-pills-four" role="tabpanel" aria-labelledby="v-pills-four-tab">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                    <input type="hidden" name="question" value="rectangle">
                                    <div class="form-group">
                                        <input type="text" class="form-control-lg" name="point1" placeholder="Entrez le point X1,Y1">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control-lg" name="point2" placeholder="Entrez le point X2,Y2">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control-lg" name="point3" placeholder="Entrez le point X3,Y3">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary calc btn-lg" value="Tester si le triangle est rectangle">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sketch">
                                    
                    </div>
                    <div id="sketch-holder" class="sketch">
                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/p5.min.js"></script>
</body>
</html>
