<?php

    // parsing tpl
    $tpl = file_get_contents('coppie.html');

    // echo $tpl;

    // array: POST
    $squadre = array(
        "sqd1" => $_POST["pl1"] . ' e ' . $_POST["pl2"],
        "sqd2" => $_POST["pl2"] . ' e ' . $_POST["pl4"],
        "sqd3" => $_POST["pl3"] . ' e ' . $_POST["pl1"],
        "sqd4" => $_POST["pl4"] . ' e ' . $_POST["pl3"]
    );

    // echo print_r($_POST, True);


    // sostituisci {{squadre}}: x ogni {{squadre}} prendi un elemento a random dall'array

    function squadre($tmp, $squadre) {
        $tmp = file_get_contents('coppie.html');
        foreach ($squadre as $k => $v) {

            // array_rand va a livelli e non riesce ad entrare, perciò mi salvo il primo livello in unq variabile
            $krand = array_rand($squadre);
            // poi in una seconda variabile che richiamerò nel costrutto, associo il primo livello random dell'array a cui si riferisce
            $vrand = $squadre[$krand]; 
            $tmp = str_replace('{{squadre}}', $vrand, $tmp);
        }
        return $tmp;
    }
    $tmp = '';
    echo squadre($tmp, $squadre);
