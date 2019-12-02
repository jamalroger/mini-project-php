<?php
include 'classes.php';


if (isset($_POST)) {

    if (isset($_POST['surface']) && isset($_POST['rec-p-xy']) && isset($_POST["rec-h"]) && isset($_POST["rec-w"]) ) {
        $xy = $_POST['rec-p-xy'];
        $x = $xy[0];
        $y = $xy[3];
        $h = $_POST["rec-h"];
        $w = $_POST["rec-w"];
        $rec = new Rectangle($h, $w, new Point($x, $y));
        echo "surface du rectangle est :" . $rec->surface();
    }

    if (isset($_POST['inter1']) && isset($_POST['rec-p-xy']) && isset($_POST["rec-h"]) && isset($_POST["rec-w"]) && isset($_POST["p-xy"]) ) {
        $xy = $_POST['rec-p-xy'];
        $x = $xy[0];
        $y = $xy[3];
        $h = $_POST['rec-h'];
        $w = $_POST['rec-w'];
        $p_xy = $_POST['p-xy'];
        $p_x = $p_xy[0];
        $p_y = $p_xy[3];
        $rec = new Rectangle($h, $w, new Point($x, $y));
        echo $rec->interieur1(new Point($p_x, $p_y)) ? "le point est interieur de la rectangle" : "le point est ne pas interieur de la rectangle";
    }

    if (isset($_POST['inter2']) && isset($_POST['rec-p-xy']) && isset($_POST["rec-h"]) && isset($_POST["rec-w"]) && isset($_POST['inter2']) && isset($_POST['rec2-p-xy']) && isset($_POST["rec2-h"]) && isset($_POST["rec2-w"])) {

        // ---------------------------- //
        $xy = $_POST['rec-p-xy'];
        $x = $xy[0];
        $y = $xy[3];
        $h = $_POST['rec-h'];
        $w = $_POST['rec-w'];
        // rectangle 1
        $rec1 = new Rectangle($h, $w, new Point($x, $y));

        // ---------------------------- //
        $xy = $_POST['rec2-p-xy'];
        $x = $xy[0];
        $y = $xy[3];
        $h = $_POST['rec2-h'];
        $w = $_POST['rec2-w'];
        // rectangle 2
        $rec2 = new Rectangle($h, $w, new Point($x, $y));
        // ---------------------------- //

        echo  $rec1->interieur2($rec2) ?
            "le rectangle 2 est interieur de la rectangle 1" : "le rectangle 2 est ne pas interieur de la rectangle 1";
    }

    if (isset($_POST['egalite']) && isset($_POST['rec-p-xy']) && isset($_POST["rec-h"]) && isset($_POST["rec-w"]) && isset($_POST['inter2']) && isset($_POST['rec2-p-xy']) && isset($_POST["rec2-h"]) && isset($_POST["rec2-w"])) {

        // ---------------------------- //
        $xy = $_POST['rec-p-xy'];
        $x = $xy[0];
        $y = $xy[3];
        $h = $_POST['rec-h'];
        $w = $_POST['rec-w'];
        // rectangle 1
        $rec1 = new Rectangle($h, $w, new Point($x, $y));

        // ---------------------------- //
        $xy = $_POST['rec2-p-xy'];
        $x = $xy[0];
        $y = $xy[3];
        $h = $_POST['rec2-h'];
        $w = $_POST['rec2-w'];
        // rectangle 2
        $rec2 = new Rectangle($h, $w, new Point($x, $y));
        // ---------------------------- //
        echo $rec1->egalite($rec2) ?
            "le rectangle 1 et le rectangle 2 sont egaux" : "le le rectangle 1 et le rectangle 2 sont diferent";
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

        let point1 = addPoint('.$x.', '.$y.', "purple");
        
        
       // let point4 = addPoint(30,100,"green");

        return drawShape(point1,'.$h.','.$w.');
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

    }else {
    
        global $result;
        if($result) {
            
            echo "<div class='col-md-12'>
            <div class='alert alert-success'>".$result."</div>
            </div>";
            }

   }
