<?php

    /**
     * libreria per il rendering dei template
     */

    namespace Render;

    function render($template, $dati) {

        $contenuto = file_get_contents($template);

        foreach ($dati as $key => $value) {

            $contenuto = str_replace('{{' . $key . '}}', $value, $contenuto);
        }
        
        return $contenuto;
    }