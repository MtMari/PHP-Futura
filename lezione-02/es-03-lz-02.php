<?php

 /* scrivere una pagina web che riceva in input via GET tre numeri a, b e c e calcoli l'area del triangolo rettangolo avente rispettivamente a e b come cateti e c come ipotenusa. */



    $cat_1 = $_GET['cateto1'];
    $cat_2 = $_GET['cateto2'];
    $ipot = $_GET['ipotenusa'];

    
   $area = $cat_1 * $cat_2 / 2;

   
    echo '<html lang="it">' . PHP_EOL . 
        '<head>' . PHP_EOL . 
        '<title>es-02-lz-02</title>' . PHP_EOL . 
        '<meta charset="utf-8">' . PHP_EOL . 
        '<meta name="viewport" content="width: device-width initial-scale: 1.0">' . PHP_EOL . 
        '</head>' . PHP_EOL . 
        '<body style="font-family: sans-serif">' . PHP_EOL . 
        '<h1>Area</h1>' . PHP_EOL . 
        '<h3>QUERY STRING: "' . $_SERVER['QUERY_STRING'] . '"</h3>' . PHP_EOL . 
        '<strong>CONSEGNA:</strong>' . PHP_EOL . 
        '<span> scrivere una pagina web che riceva in input via GET tre numeri a, b e c e calcoli: area del triangolo rettangolo avente rispettivamente a e b come cateti e c come ipotenusa.(A=C1*C2/2)' . PHP_EOL .
        '<p style="font-size:x-large">Cateto 1=  ' . $cat_1 . '<br>' . PHP_EOL . 
        'Cateto 2= ' . $cat_2 . '<br>' . PHP_EOL . 
        'Area= ' . $area . '</p>' . PHP_EOL . 
        '</body>' . PHP_EOL . 
        '</html>' . PHP_EOL;