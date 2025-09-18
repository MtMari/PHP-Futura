<?php

    foreach(glob('inc/*.php') as $file){
        require_once $file;
    }

    foreach(glob('lib/*.php') as $file){
        require_once $file;
    }

    
    // render
    $pagina = $_REQUEST['p'];


    if(!isset($pagina) && empty($pagina) || $pagina == 'index'){

        echo Render\render(
            $pagine['home']['template'],
            $pagine['home']['contenuto']);

    }elseif(isset($_REQUEST['p'])){

        // contenuti pushati successivamente
        switch ($pagina){
        
            case 'scelta':

                $pagine['scelta']['contenuto']['select_primo'] .= Render\opzioniSelect($piatti['primo']);
                $pagine['scelta']['contenuto']['select_secondo'] .= Render\opzioniSelect($piatti['secondo']);
                $pagine['scelta']['contenuto']['select_dolce'] .= Render\opzioniSelect($piatti['dolce']);
                break;

            case 'conferma':
                $pagine['conferma']['contenuto']['lista'] .= Render\lista();
                $pagine['conferma']['contenuto']['totale'] .= totale() . ' €.<br>';
                break;
        }

        echo Render\render(
            $pagine[$pagina]['template'],
            $pagine[$pagina]['contenuto']
        );
    }




