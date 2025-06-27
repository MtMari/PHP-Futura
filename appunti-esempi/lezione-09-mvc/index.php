<?php

    // display errori
    ini_set('display_errors', true);

    // librerie require
    require_once 'lib/render.php';
    require_once 'lib/html.php';
    require_once 'lib/anagrafe.php';
    require_once 'inc/pagine.php';



    // isset include ? da pagine includi con require_once: avendo assegnato '$pagine[$_REQUEST['p']]' ad una variabile, basta richiamare quella

    if(isset ($pagina_richiesta['include'])) {
        require_once $pagina_richiesta['include'];
    }


    // render: ricordati se fanno o meno parte di un namespace
    echo Render\render(
       $pagina_richiesta['template'],
       $pagina_richiesta['contenuto']
    );