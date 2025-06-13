<?php

    // funzione render
    function render($template, $array) {

        $content = file_get_contents($template);

        foreach($array as $key => $value) {

            $content = str_replace('{{' . $key . '}}', $value, $content);
        }
        return $content;
    }

    // array per funzione render
    $placeholders = array(
        'title'     => 'Lista della Spesa',
        'content'   => 'Da comprare:',
        'lista'     => 'Lista:',
        'prodotti'  => ''
    );


    // leggere file: questa volta partiamo da un db vuota ma pre-esistente --> unserializzane il contenuto
    $spesa = unserialize(file_get_contents('lista_spesa.db'));
    

    // scrivere sul file
    if(isset($_POST['item'])) {
        
        $spesa [] = $_POST['item'];           

        file_put_contents('lista_spesa.db', serialize($spesa)); 
        
        
        $prodotti = [];

        foreach($spesa as $key => $value) {

            $prodotti [] .= $value; 
        }
        $placeholders['prodotti'] = implode(',<br>', $prodotti);

    }

    echo render('main.html', $placeholders);



    /**ETRAPOLARE E UNIRE AL TEMPLATE
     * 
     * - foreach $array
     * - lista ad indice vuoto, ad ogni ciclo ci metti dentro il valore, che poi implodi e separi con un <br>
     * - salva il tutto dentro $placeholders['prodotti']
    */
