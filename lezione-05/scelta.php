<?php

    // leggo il contenuto del template
    $template = file_get_contents('scelta.html');

    // sostituisco i segnaposto con i dati della pagina
    foreach ($piatti as $key => $value) {
        $template = str_replace('::' . $key . '::', $value, $template); 
    }

    // rappresento il template
    echo $template;




    // librerie
    require_once("lib/array.php");
    require_once("lib/funzioni.php");


    // opzioni
    $output = str_replace($placeholder, $piatti, $output);


    echo $output;