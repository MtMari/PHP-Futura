<?php

    /**
     * qui sono dichiarate le pagine e le logiche valide per tutte le pagine
     */

    $pagine = array(
        'index' => array(
            'contenuto' => array(
                'titolo' => 'Dati Ospiti',
                'h1' => 'Dati ospiti',
                'testo' => '',
            ),
            'template' => 'tpl/main.html',
            'include' => 'inc/ospiti.lista.php',
        ),
        'gestione' => array(
            'contenuto' => array(
                'titolo' => 'Gestione Ospiti',
                'h1' => 'Gestione ospiti',
                'testo' => '',
            ),
            'template' => 'tpl/main.html',
            'include' => 'inc/ospiti.gestione.php',
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
     *  - pusha il tutto in array
     * 
     * !!tag($tag, $attr_tag = [], $content_tag = '')
     */ 
    $voci = [];

    foreach ($pagine as $key => $value) {

        $voci[] = HTML\tag(
            'a',
            [ 'href' => './' . $key . '.html' ],
            $value['contenuto']['titolo']
        );
    }

    $pagina_richiesta['contenuto']['menu'] = HTML\tag( 'p', [], implode( ' | ', $voci ) );
