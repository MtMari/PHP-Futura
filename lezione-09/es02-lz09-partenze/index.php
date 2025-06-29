<?php

    // display errori
    ini_set('display_errors', true);

    // librerie require
    require_once 'lib/render.php';
    require_once 'lib/html.php';
    require_once 'lib/dati.php';
    require_once 'inc/pagine.php';



    // se isset include, da pagine includi con require_once
    if(isset ($pagina_richiesta['include'])) {
        require_once $pagina_richiesta['include'];
    }


    // render template
    echo Render\render(
       $pagina_richiesta['template'],
       $pagina_richiesta['contenuto']
    );