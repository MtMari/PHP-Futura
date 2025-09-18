<?php

    
    // selezione pagine output
    switch($_GET['piatti']){

        case 'pasta':

            $pagine['output']['dati']['h1'] .= 'Tortelloni Ricotta e Spinaci.';
            $pagine['output']['dati']['menu'] = 'pasta, ricotta, spinaci.';
            break;
            
        case 'piada':

            $pagine['output']['dati']['h1'] .= 'Piadina al Crudo.';
            $pagine['output']['dati']['menu'] = 'piadina, prosciutto crudo.';
            break;

        case ($_POST['piatti'] = 'carne'):

            $pagine['output']['dati']['h1'] .= 'Cotoletta alla Milanese.';
            $pagine['output']['dati']['menu'] = 'pollo impanato.';
            break;
    }