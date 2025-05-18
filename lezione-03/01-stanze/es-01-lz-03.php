<?php
    /* Scrivere una coppia di file (HTML e PHP) dove l'HTML contiene un form nel quale l'utente può inserire un numero di stanza; 
    
    il PHP deve contenere un array delle stanze con i relativi occupanti e il numero di telefono interno; OK
    
    quando l'utente manda il numero di stanza al PHP tramite il form, il PHP deve scrivere il nome dell'occupante e il relativo numero di telefono. 
    
    In caso non sia passato nessun numero di stanza il PHP deve scrivere un elenco di tutti i numeri di stanza con il relativo occupante e telefono.
 */


//  array = stanza => occupante, telefono interno


$stanza = array(
    1 => array(
        'occupante' => 'Luigi',
        'telefono' => '1234'
    ),
    2 => array(
        'occupante' => 'Mario',
        'telefono' => '5678'
    ),
    3 => array(
        'occupante' => 'Gina',
        'telefono' => '9012'
    ),
    4 => array(
        'occupante' => 'Giuseppe',
        'telefono' => '3456'
    ),
    5 => array(
        'occupante' => 'Matilda',
        'telefono' => '7890'
    )
);

$occupante = $stanza[$_GET['stanza']];

echo '<p> La stanza '
    . $_GET['stanza']
    . ' è occupata da '
    . $stanza[$_GET['stanza']]['occupante']
    . '. Digitare '
    . $stanza[$_GET['stanza']]['telefono']
    . ' per chiamare.';