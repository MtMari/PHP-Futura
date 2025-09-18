<?php
    
    // funzione  di render
    function render($template, $array) {

        $contenuto = file_get_contents($template);

        foreach($array as $chiave => $valore) {

            $contenuto = str_replace('{{' . $chiave . '}}', $valore, $contenuto);
        }
        return $contenuto;
    }