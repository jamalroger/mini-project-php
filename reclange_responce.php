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
}
