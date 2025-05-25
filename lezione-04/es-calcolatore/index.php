<?php

    // LIBRARIES
    require_once( "libraries.php" );
    // inclide(_rettangolo_)
    // include(_cerchio_)
    // ? require_once(_output_)
    

    // PROGRAMMA
    echo '<div style="font-family: sans-serif">'
        . PHP_EOL
        . '<form action="area_tr.php" method="post">'
        . PHP_EOL
        . '<label for="figura">Selezionare una figura:</label>'
        . PHP_EOL
        . '<select name="figura">'
        . PHP_EOL
        . '<option value="tr">Triangolo</option>'
        . PHP_EOL
        . '<option value="a_rtt">Rettangolo</option>'
        . PHP_EOL
        . '<option value="a_cr">Cerchio</option>'
        . PHP_EOL
        . '</select>'
        . PHP_EOL
        . '<br>'
        . PHP_EOL
        . '<br>'
        . PHP_EOL
        . '<input type="submit" value="Conferma">'
        . PHP_EOL
        . '</form>'
        . PHP_EOL
        . '</div>';

        // echo output: associa i values al programma corretto -> valuta di fare un file a parte