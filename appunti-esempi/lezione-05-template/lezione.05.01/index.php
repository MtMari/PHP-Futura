<?php

    // leggo il contenuto del template
    $template = file_get_contents('tpl/index.html');

    // rappresento il template
    echo $template;



    /** - nella variabile template assegno il risultato della funzione: file_get_contents, con argomento il mio template index.html
     *  - 'file_gets_content' legge un intero file in una stringa -> il contenuto di 'index.html' è salvato sottoforma di str nella variabile template
     */