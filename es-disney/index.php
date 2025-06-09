<?php

    // main file: R/I lib/render.php, render functions call(echo!!)

    require_once('lib/render.php');

    if($_REQUEST['p'] == 'welcome') {
        echo render(
            $pages['welcome']['template'], 
            $pages['welcome']['content']
        );        
/*         echo menu(
            $menu['welcome']['template'],
            $menu['welcome']['content']
        );         */
    } else {
        echo render(
            $pages[$_REQUEST['p']]['template'], 
            $pages[$_REQUEST['p']]['content']
        );
    } 
