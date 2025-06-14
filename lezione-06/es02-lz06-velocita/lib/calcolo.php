<?php


    $distanza = $_POST["distanza"];
    $velocita = $_POST["velocita"];

    function calcoloTempo($distanza, $velocita) {
        $tempo = $distanza / $velocita;
        return $tempo;
    }