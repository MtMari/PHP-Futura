<?php


 
    $capitali = array(
        'Roma' => array(
            'città' => 'Roma',
            'paese' => 'Italia',
        ),
        'Londra' => array(
            'città' => 'Londra',
            'paese' => 'Inghilterra',
        ),
        'Parigi' => array(
            'città' => 'Parigi',
            'paese' => 'Francia',
        ),
        'Berlino' => array(
            'città' => 'Berlino',
            'paese' => 'Germania',        
        ),
        'Madrid' => array(
            'città' => 'Madrid',
            'paese' => 'Spagna',
        ),
        'Vienna' => array(
            'città' => 'Vienna',
            'paese' => 'Austria',
        ),
        'Bruxelles' => array(
            'città' => 'Bruxelles',
            'paese' => 'Belgio',
        ),
        'Atene' => array(
            'città' => 'Atene',
            'paese' => 'Grecia',
        ),
    ); 

    $capitale = $capitali[$_GET['capitale']];

      echo '<html lang="it">' . PHP_EOL . 
            '<head>' . PHP_EOL . 
            '<title>es-01-lz-02</title>' . PHP_EOL . 
            '<meta charset="utf-8">' . PHP_EOL . 
            '<meta name="viewport" content="width: device-width initial-scale: 1.0">' . PHP_EOL . 
            '</head>' . PHP_EOL . 
            '<body style="font-family: sans-serif">' . PHP_EOL . 
            '<h1>Capitali</h1>' . PHP_EOL . 
            '<h3>QUERY STRING: "' . $_SERVER['QUERY_STRING'] . '"</h3>' . PHP_EOL . 
            '<strong>CONSEGNA:</strong>' . PHP_EOL . 
            '<span> Scrivere una pagina web che, dato il nome di una capitale europea via GET, restituisca in output il nome dello stato relativo. Utilizzare un array associativo per archiviare i nomi delle città in coppia con i relativi stati e leggere la città richiesta da $_GET. (<strong>CAPITALI IN ELENCO:</strong> Londra, Roma, Parigi, Berlino, Madrid, Vienna, Bruxelles, Atene).</span>' . PHP_EOL .
            '<p style="font-size: x-large">Capitale: ' . $capitale['città'] . '<br>Paese: ' . $capitale['paese'] . '</p>'  . PHP_EOL . 
            '</body>' . PHP_EOL . 
            '</html>' . PHP_EOL;