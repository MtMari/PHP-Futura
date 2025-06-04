<?php


    // librerie
    require_once("calcolo.php");

    // output
    $dati = array(
        'distanza' =>  $_POST["distanza"],
        'velocita' =>  $_POST["velocita"],
        'tempo' => calcoloTempo($distanza, $velocita)
    );

    function calcoloRender($template, $dati) {
        $template = file_get_contents('tpl/output.html');
        foreach($dati as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }
        echo $template;
    }
