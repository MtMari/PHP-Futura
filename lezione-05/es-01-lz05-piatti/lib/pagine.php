<?php


    // array pagine

    $pagine = array(
        "scelta" => array(
            'dati' => array(    
                'title'     => 'Scelta',
                'h1'        => 'Scegli un piatto!',
                'select'    => ''
            ),
            'template' => 'tpl/scelta.html'
        ),
        'output' => array(
            'dati' => array(    
                'title'     => 'Ingredienti',
                'h1'        => 'Piatto scelto: ',
                'contenuto' => 'Ingredienti: ',
                'menu'      => '',
                'link'      => '<a href="./scelta.php" style="font-size: small">Indietro</a>'                
            ),
            'template' => 'tpl/output.html'
        )
        );