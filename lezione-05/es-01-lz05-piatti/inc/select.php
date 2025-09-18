<?php

    // array di select
    $selectOptions = array(
        'pasta' => 'Tortelloni Ricotta e Spinaci',
        'piada' => 'Piadina al Crudo',
        'carne' => 'Cotoletta alla Milanese'
    );

    // creazione option di select
    foreach($selectOptions as $chiave_select => $valore_select) {
   
        $pagine['scelta']['dati']['select'] .= '<option value="' . $chiave_select . '">'. $valore_select . '</option>' . PHP_EOL;
    }
