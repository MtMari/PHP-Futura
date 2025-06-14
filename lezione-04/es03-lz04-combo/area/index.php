<?php
    // menù a tendina

    echo '<div style="font-family: sans-serif">'
            . PHP_EOL
            . '<form action="area/config.php" method="post">'
            . PHP_EOL
            . '<label for="figura">Selezionare una figura:</label>'
            . PHP_EOL
            . '<select name="figura" id="figura">'
            . PHP_EOL
            . '<option value="triangolo">Triangolo</option>'
            . PHP_EOL
            . '<option value="area_rettangolo">Rettangolo</option>'
            . PHP_EOL
            . '<option value="area_cerchio">Cerchio</option>'
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