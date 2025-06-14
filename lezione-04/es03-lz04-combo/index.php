<?php

    // menù a tendina

    echo '<div style="font-family: sans-serif">'
            . PHP_EOL
            . '<form action="scelta.php" method="post">'
            . PHP_EOL
            . '<label for="programma">Seleziona un programma:</label>'
            . PHP_EOL
            . '<select name="programma" id="programma">'
            . PHP_EOL
            . '<option value="area">Calcolatore area</option>'
            . PHP_EOL
            . '<option value="mcm">Calcolatore mcm</option>'
            . PHP_EOL
            . '</select>'
            . PHP_EOL
            . '<br>'
            . PHP_EOL
            . '<br>'
            . PHP_EOL
            . '<input type="submit" value="Scegli">'
            . PHP_EOL
            . '</form>'
            . PHP_EOL
            . '</div>';