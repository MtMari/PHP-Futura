<?php

    $pagina = array(
        'input' => array(
            'placeholders' => array(
                'titolo'    => 'Percorrenza',
                'h1'        => 'Calcolatore tempo di percorrenza',
                'contenuto' => 'Inserisci i dati richiesti.'
            ),
            'tpl' => './tpl/input.html'
        ),
        'output' => array(
            'placeholders' => array(
                'titolo'    => 'Risultato',
                'distanza'  => '',
                'velocita'  => '',
                'tempo'     => ''
            ),
            'tpl' => './tpl/output.html'
        ),
        'default'  => array (
            'placeholders' => array(
                'titolo'    => 'Benvenuto',
                'h1'        => 'Calcolatore tempo di percorrenza',
                'redirect'  => '<a href="./input.html">Esegui un calcolo</a> '
            ),
            'tpl' => './tpl/index.html'
        )

    );


    if (isset($_POST['distanza'])) {
        $pagina['output']['placeholders']['distanza'] .= $_POST["distanza"];
        $pagina['output']['placeholders']['velocita'] .= $_POST["velocita"];
        $pagina['output']['placeholders']['tempo'] .= calcoloTempo($distanza, $velocita);
    }