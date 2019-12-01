<?php
include 'classes.php';


if ($_GET) {

    if ($_GET['surface']) {
        $xy = $_GET['rec-p-xy'];
        $x = $xy[0];
        $y = $xy[3];
        $h = $_GET["rec-h"];
        $w = $_GET["rec-w"];
        $rec = new Rectangle($h, $w, new Point($x, $y));
        echo "surface du rectangle est :" . $rec->surface();
    }

    if ($_GET['inter1']) {
        $xy = $_GET['rec-p-xy'];
        $x = $xy[0];
        $y = $xy[3];
        $h = $_GET['rec-h'];
        $w = $_GET['rec-w'];
        $p_xy = $_GET['p-xy'];
        $p_x = $p_xy[0];
        $p_y = $p_xy[3];
        $rec = new Rectangle($h, $w, new Point($x, $y));
        echo $rec->interieur1(new Point($p_x, $p_y)) ? "le point est interieur de la rectangle" : "le point est ne pas interieur de la rectangle";
    }

    if ($_GET['inter2']) {

        // ---------------------------- //
        $xy = $_GET['rec-p-xy'];
        $x = $xy[0];
        $y = $xy[3];
        $h = $_GET['rec-h'];
        $w = $_GET['rec-w'];
        // rectangle 1
        $rec1 = new Rectangle($h, $w, new Point($x, $y));

        // ---------------------------- //
        $xy = $_GET['rec2-p-xy'];
        $x = $xy[0];
        $y = $xy[3];
        $h = $_GET['rec2-h'];
        $w = $_GET['rec2-w'];
        // rectangle 2
        $rec2 = new Rectangle($h, $w, new Point($x, $y));
        // ---------------------------- //

        echo  $rec1->interieur2($rec2) ?
            "le rectangle 2 est interieur de la rectangle 1" : "le rectangle 2 est ne pas interieur de la rectangle 1";
    }

    if ($_GET['egalite']) {

        // ---------------------------- //
        $xy = $_GET['rec-p-xy'];
        $x = $xy[0];
        $y = $xy[3];
        $h = $_GET['rec-h'];
        $w = $_GET['rec-w'];
        // rectangle 1
        $rec1 = new Rectangle($h, $w, new Point($x, $y));

        // ---------------------------- //
        $xy = $_GET['rec2-p-xy'];
        $x = $xy[0];
        $y = $xy[3];
        $h = $_GET['rec2-h'];
        $w = $_GET['rec2-w'];
        // rectangle 2
        $rec2 = new Rectangle($h, $w, new Point($x, $y));
        // ---------------------------- //
        echo $rec1->egalite($rec2) ?
            "le rectangle 1 et le rectangle 2 sont egaux" : "le le rectangle 1 et le rectangle 2 sont diferent";
    }
}
