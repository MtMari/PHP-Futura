<?php

    require_once 'namespace.php';

    // funzione render
    function render($template, $array) {

        $content = file_get_contents($template);

        foreach($array as $key => $value) {

            $content = str_replace('{{' . $key . '}}', $value, $content);
        }
        return $content;
    }

    // array x funzione render
    $placeholders = array(
        'title'     => 'Lista della Spesa',
        'content'   => 'Da comprare:',
        'form'      => '',               //vuoto perché c'appendiamo info con le funzioni!
        'lista'     => 'Lista:',
        'prodotti'  => ''
    );

    

    $placeholders['form'] = HTML\form(

              //primo argomento: attr_form
        [   'action' => './main.php', 'method' => 'post' ],

              //secondo argomento: fields_form
        [   'item'     =>   [ 'field' => 'label', 'for' => 'item',  'name' => 'item'],
            'prodotto' =>   [ 'field' => 'input',  'type' => 'text',  'name' => 'item',  'required' => '',  'placeholder' => 'Prodotto' ],
            'add'      =>  [  'field' => 'input',  'type' => 'submit', 'value' => 'Aggiungi'] 
        ]
    );


    // leggere file con file già esistente
    $spesa = unserialize(file_get_contents('lista_spesa.db'));
    

    // scrivere sul file
    if(isset($_POST['item'])) {
        
        $spesa [] = $_POST['item'];

        file_put_contents('lista_spesa.db', serialize($spesa));

        // salvo i prodotti nell'array dei placeholders
        $prodotti = [];

        foreach($spesa as $key => $value) {

            $prodotti [] .= $value; 
        }
        $placeholders['prodotti'] = implode(',<br>', $prodotti);
    }

    // output
    echo render('index.html', $placeholders);




