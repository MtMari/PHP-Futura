<?php

    // array template
    $placeholder = array(
        'title' => 'Calcolo Spesa',
        'content' => 'Da comprare:',
        'totale' => '',
        'lista' => ''
    );

    
    // funzione render
    function render($template, $array) {
        $output = file_get_contents($template);
        foreach($array as $key => $value) {
            $output = str_replace('{{' . $key . '}}', $value, $output);
        }
        return $output;
    }

    // chiamata funzione render
    echo render('index.html', $placeholder);


    /**MAIN CODICE:
     * - unserialize .db parsato
     * - costrutto per creare ed aggiungere input
     * - serialize array[] e put_content in .db
    */

    // se non c'è file, creo array vuoto
    file_exists('prezzo_spesa.db') ? $spesa = unserialize(file_get_contents('prezzo_spesa.db')) : $spesa = [];


    // scrivo: salvo input nell'array ad indice vuoto
    if(isset($_POST['prodotto']) && ($_POST['prezzo'])) {
        
        $spesa []= [$_POST['prodotto'] => $_POST['prezzo']];

        file_put_contents('prezzo_spesa.db', serialize($spesa));
    }
    

    echo '<pre>' . print_r($spesa, true) . '</pre>';
    

    // funzione calcolo
    function calcoloSpesa($array) {

        $totale = 0;

        foreach($array as $key => $value) {

            foreach($value as $key_level_2 => $value_level_2) {
                // settype($value_level_2, "integer");
                
                $totale += $value_level_2;
            }
        }

     return $totale;
    }

    echo 'Totale: ' . calcoloSpesa($spesa);