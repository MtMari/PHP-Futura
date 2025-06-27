<?php

    /**
     * qui sono dichiarate le pagine e le logiche valide per tutte le pagine
     */

    //array pagine
    $pagine = array(
        'index' => array(
            'contenuto' => array(
                'titolo' => 'lista cani',
                'h1' => 'Anagrafe',
                'testo' => '',
            ),
            'template' => 'tpl/main.html',
            'include' => 'inc/anagrafe.lista.php',
        ),
        'gestione' => array(
            'contenuto' => array(
                'titolo' => 'gestione cani',
                'h1' => 'Gestione',
                'testo' => '',
            ),
            'template' => 'tpl/main.html',
            'include' => 'inc/anagrafe.gestione.php',
        ),
    );

    // se $_REQUEST['p'] non è settato, reinderizza alla pagina index
    if (!isset($_REQUEST['p']) || !isset($pagine[$_REQUEST['p']])) {
        $_REQUEST['p'] = 'index';
    }

    // salva $_REQUEST['p'] dell'array $pagine in una variabile per facilitarne l'uso

    $pagina_richiesta = $pagine[$_REQUEST['p']];


    /**CREATI UN PICCOLO MENU IN ALTO, CON I LINK DELLE VARIE PAGINE:
     *  - parti da un array vuoto
     *  - ad ogni ciclo di $pagine, nell'array vuoto ad indice vuoto, utilizza la funzione HTML\tag per creare i link
     * 
     * !!tag($tag, $attr_tag = [], $content_tag = '')
     */ 

    $voci_pagine = [];

    foreach($pagine as $key => $value) {

        // <a href="#">#</a>
        $voci_pagine[] = HTML\tag(                      
            // nome tag
            'a', 
            // attributi ad array vuoto: il link è .html perché tanto è gestito da .htaccess, ma il resto dell'indirizzo è la chiave
            $attr [] = ['href'  => './' . $key . '.html'],
            // contenuto del tag: 'LINK' come prova, per il resto ti basta usare il titolo del contenuto
            $pagine[$key]['contenuto']['titolo'] //$pagine['contenuto']['titolo']
        );
    }

    // sis, devi creare ed la chiave 'menu' e imploderci il risultato dell'array (che era) vuoto o come 'azz te sostituisce la roba lmao

    $pagina_richiesta['contenuto']['menu'] = implode(' | ', $voci_pagine); 

    
