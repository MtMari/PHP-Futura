<?php

    // funzione per sostituire

    function opzioni($placeholder, $piatti, $output) {

        // inizializzo l'opzione
        $opzione = ''

        // sostituisco
        foreach($piatti = $key => $value) {                         /* key =  */
            $opzione = str_replace('::opzione::', $piatti['tipo']['nome'], $output)

            return str_replace($placeholder, $piatti, $output)
        }
    }