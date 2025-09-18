<?php


    // funzione render
    function render($template, $array) {

        $content = file_get_contents($template);

        foreach($array as $key => $value) {
            $content = str_replace('{{' . $key . '}}', $value, $content);
        }
        return $content;
    }


    function calcoloRender($template, $dati) {
        $content = file_get_contents($template);
        foreach($dati as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }
        return $template;
    }