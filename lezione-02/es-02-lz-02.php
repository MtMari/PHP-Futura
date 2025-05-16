<?php

    //Scrivere una pagina web che riceva in input via GET un numero di piano e un numero di stanza, e restituisca il nome dell'ospite in quella stanza. Utilizzare un array multidimensionale che abbia i piani al primo livello e i numeri di stanza al secondo, collegati al nome dell'ospite.

    $piani = array(
        0 => array(
            1 => 'Guido La Barca',
            2 => 'Remo Felice',
            3 => 'Ribalta Adesso',
        ),
        1 => array(
            1 => 'Marzia Mela',
            2 => 'Vera Pagnotta',
            3 => 'Chiara Bevilacqua',
        ),
        
    );

    $ospiti = $piani[$_GET['piano']][$_GET['stanza']]; 
    
    
    echo '<html lang="it">' . PHP_EOL . 
            '<head>' . PHP_EOL . 
            '<title>es-02-lz-02</title>' . PHP_EOL . 
            '<meta charset="utf-8">' . PHP_EOL . 
            '<meta name="viewport" content="width: device-width initial-scale: 1.0">' . PHP_EOL . 
            '</head>' . PHP_EOL . 
            '<body style="font-family: sans-serif">' . PHP_EOL . 
            '<h1>Ospiti</h1>' . PHP_EOL . 
            '<h3>QUERY STRING: "' . $_SERVER['QUERY_STRING'] . '"</h3>' . PHP_EOL . 
            '<strong>CONSEGNA:</strong>' . PHP_EOL . 
            '<span> Scrivere una pagina web che riceva in input via GET un numero di piano e un numero di stanza, e restituisca il nome di ogni ospite in quella stanza. Utilizzare un array multidimensionale che abbia i piani al primo livello e i numeri di stanza al secondo, collegati al nome di ogni ospite. (<strong>PIANI:</strong> 1, 2. <strong>STANZE:</strong> 3 per piano).</span>' . PHP_EOL .
            '<p style="font-size:x-large">Nome ospite: ' . $ospiti . '</p>' . PHP_EOL . 
            '</body>' . PHP_EOL . 
            '</html>' . PHP_EOL;


    