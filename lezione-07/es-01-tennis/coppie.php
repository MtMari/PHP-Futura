<?php

    // require
    require_once('lib/func.php');

    // array: POST
    $squadre = array(
        "sqd1" => $_POST["pl1"] . ' e ' . $_POST["pl2"],
        "sqd2" => $_POST["pl2"] . ' e ' . $_POST["pl4"],
        "sqd3" => $_POST["pl3"] . ' e ' . $_POST["pl1"],
        "sqd4" => $_POST["pl4"] . ' e ' . $_POST["pl3"]
    );
    
    // echo template
    $template = '';
    echo squadre($template, $squadre);
