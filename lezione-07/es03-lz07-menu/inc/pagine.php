<?php


    $pagine = array(
        'scelta' => array(
            'contenuto' => array(
                'titolo'            => 'Menu',
                'h1'                => 'Componi il tuo menu!',
                'select_primo'      => '',
                'select_secondo'    => '',
                'select_dolce'      => ''
            ),
            'template'  => './tpl/scelta.html'
        ),
        'conferma' => array(
            'contenuto' => array(
                'titolo'    => 'Riepilogo Ordinazione',
                'h1'        => 'Riepilogo Ordinazione',
                'testo'     => 'Controlla che le informazioni siano corrette e poi premi il tasto "CONFERMA" per confermare la tua ordinazione!',
                'lista'     => '',
                'totale'    => 'TOTALE: '
            ),
            'template'  => './tpl/conferma.html'
        ),
        'ending' => array(
            'contenuto' => array(
                'titolo'    => 'Minu - Ordinazione Confermata',
                'h1'        => 'Ordinazione confermata!',
                'testo'     => 'La tua ordinazione è stata confermata correttamente. Grazie per averci scelto e buon appetito!',
                'redirect'  => '<a href="./scelta.html">Nuovo Ordine</a>'
            ),
            'template'  => './tpl/index.html'
        ),
        'home' => array(
            'contenuto' => array(
                'titolo'    => 'Minu',
                'h1'        => 'Minu d\'Asporto',
                'testo'     => 'Questo è Minu!<br>Per ordinare, premi il pulsante!',
                'redirect'  => '<a href="./scelta.html">Ordina qui</a>'
            ),
            'template'  => './tpl/index.html'
        )                     
    );



    