<?php

    // parsing
    $content = file_get_contents("output.html");
    // echo $content;

    $distanza = $_POST["distanza"];
    $velocita = $_POST["velocita"];

    // echo $distanza;
    // echo $velocita;

    // funzione calcolo
    function calcoloTempo($distanza, $velocita) {
        $tempo = $distanza / $velocita;
        return $tempo;
    }
    calcoloTempo($distanza, $velocita);

    // render output
    $dati = array(
        'distanza' =>  $_POST["distanza"],
        'velocita' =>  $_POST["velocita"],
        'tempo' => calcoloTempo($distanza, $velocita)
    );

    function calcoloRender($template, $dati) {
        $template = file_get_contents('output.html');
        foreach($dati as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }
        echo $template;
    }

    calcoloRender($content, $dati);