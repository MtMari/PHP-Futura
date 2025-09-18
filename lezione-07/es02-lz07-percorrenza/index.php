<?php

    // require
    foreach (glob("lib/*.php") as $file) {
        require_once $file;
    }
    foreach(glob('inc/*.php') as $file){
        require_once $file;
    }

    // render

    if (!isset($_REQUEST['p']) || $_REQUEST['p'] == 'index') {

        echo render($pagina['default']['tpl'], $pagina['default']['placeholders']);

    } elseif (isset($_REQUEST['p'])) {

        echo render($pagina[$_REQUEST['p']]['tpl'], $pagina[$_REQUEST['p']]['placeholders']);
    }