<?php

    // array template
    $placeholder = array(
        'title' => 'Calcolo Spesa',
        'content' => 'Da comprare:',
        'prodotti' => '',
        'totale' => ''
    );

    
    // funzione render
    function render($template, $array) {
        $output = file_get_contents($template);
        foreach($array as $key => $value) {
            $output = str_replace('{{' . $key . '}}', $value, $output);
        }
        return $output;
    }


    /**MAIN CODICE:
     * - unserialize .db parsato
     * - costrutto per creare ed aggiungere input
     * - serialize array[] e put_content in .db
    */

    // se non c'è file, creo array vuoto
    file_exists('prezzo_spesa.db') ? $spesa = unserialize(file_get_contents('prezzo_spesa.db')) : $spesa = [];


    // scrivo: salvo input nell'array ad indice vuoto
    if(isset($_POST['prodotto']) && ($_POST['prezzo'])) {
        
        $spesa [] = [$_POST['prodotto'] => $_POST['prezzo']];

        file_put_contents('prezzo_spesa.db', serialize($spesa));

        // salvo i singoli prodotti nell'array
        $prodotti = [];

        foreach($spesa as $key => $value) {

            foreach($value as $key_prodotto => $value_prezzo){
                
                $prodotti [] .= '<li>' . $key_prodotto . ' - ' . $value_prezzo . ' €</li>'; 
            }
        }
        // $placeholder['prodotti'] = implode(',<br>', $prodotti);
        $placeholder['prodotti'] = implode('', $prodotti);

    }
        

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
    
    $placeholder['totale'] = calcoloSpesa($spesa) . ' €';

    // chiamata funzione render
    echo render('index.html', $placeholder);


    // echo '<pre>' . print_r($spesa, true) . '<pre>';

