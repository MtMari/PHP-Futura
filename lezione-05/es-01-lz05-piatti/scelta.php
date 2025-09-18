<?php
    
    // librerie
    require_once 'lib/pagine.php';
    require_once 'lib/func_visualizzazione.php';
    require_once 'inc/select.php';



    // render generale
    $output = render($pagine['scelta']['template'], $pagine['scelta']['dati']);
    echo $output;