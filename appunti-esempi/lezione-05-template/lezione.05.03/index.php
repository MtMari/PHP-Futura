<?php

    // librerie
    require_once 'lib/visualizzazione.php';
    require_once 'lib/pagine.php';

    // individuo la pagina richiesta
    $pagina = $pagine[$_GET['pagina']];

    // faccio il parsing del template
    $output = renderizza('tpl/index.html', $pagina);

    // rappresento il template
    echo $output;


/** !!è stato fatto un po' di ordine, spostando alcuni blocchi di codice tra i file
 *  - abbiamo aggiunto alcuni file in require per permettere la sostituzione dei placeholders ad 'index.html'
 *  - il parsing di index.html (cioè l'ottenere dati da quel file) è stato fatto utilizzando la funzione renderizza con argomenti il file(che nella dichiarazione della stessa funzione corrisponde a $template) e l'array( che corrisponde a $dati), il cui risultato è stato salvato in $output
 */