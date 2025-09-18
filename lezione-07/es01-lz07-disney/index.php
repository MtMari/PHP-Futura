<?php

    require_once('lib/render.php');

    // render
    $pages['welcome']['content']['menu'] .= menuHomepage($pages);


    if(!isset ($_REQUEST['p'])) {

        echo render(
            $pages['default']['template'], 
            $pages['default']['content']
        );
    }elseif( isset($_REQUEST['p'])){

        echo render(
            $pages[$_REQUEST['p']]['template'], 
            $pages[$_REQUEST['p']]['content']
        );
    }
