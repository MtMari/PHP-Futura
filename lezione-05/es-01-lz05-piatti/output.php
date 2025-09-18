<?php

    // librerie
    require_once 'lib/pagine.php';
    require_once 'lib/func_visualizzazione.php';
    require_once 'inc/ingredienti.php';


    // render generale
    $output = render($pagine['output']['template'], $pagine['output']['dati']);
    echo $output;