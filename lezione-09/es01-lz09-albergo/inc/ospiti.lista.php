<?php

    /**
     * qui vanno le logiche per la visualizzazione della lista delle persone
     */

    // 1.campi della tabella
    // \tag($tag, $attr = [], $content = '')

    $dati_ospiti= Dati\lista();

    $righe = [];

    foreach ($dati_ospiti as $id => $persona) {

        $campi = [];

        // $campi[] = HTML\tag('td', [], $id);
        $campi[] = HTML\tag('td', [], $persona['nome']);
        $campi[] = HTML\tag('td', [], 'Tel. ' . $persona['telefono']);
        $campi[] = HTML\tag('td', [], 'Camera ' . $persona['camera']);

        $campi[] = HTML\tag('td', [],
            HTML\tag(
                'a',
                [ 'href' => './index.html?id=' . $id ],
                'modifica'
            )
        );     

        $campi[] = HTML\tag('td', [],
            HTML\tag(
                'a',
                [ 'href' => './gestione.html?elimina=' . $id ],
                'elimina'
            )
        );

        $righe[] = HTML\tag('tr', [], implode('', $campi));
    } 

    // 2. pusha la tabella nel testo in array
    $pagina_richiesta['contenuto']['testo'] = HTML\tag('table', [ 'border' => 1 ], implode('', $righe));

    $pagina_richiesta['contenuto']['testo'] .= HTML\tag('hr');

    // 4. isset id ? parsa i dati per la modifica : vuoti
    if( isset($_REQUEST['id'] ) && isset( $dati_ospiti[$_REQUEST['id']] ) ) {
        
        $persona = $dati_ospiti[ $_REQUEST['id'] ];

        $idField = [
            'field' => 'input',
            'type' => 'hidden',
            'name' => 'id',
            'value' => $_REQUEST['id']
        ];
    } else {

        $persona = [];
        $idField = [];
    }


    // 3. crea il form
    // form($attr = [], $fields = [])
    
    $pagina_richiesta['contenuto']['testo'] .= HTML\form(

        [ 'action' => './gestione.html', 'method' => 'post' ],

        [
            'id' => $idField,
            'nome'      => [ 'field' => 'input', 'type' => 'text',   'name' => 'nome',       'required' => '',   'placeholder' => 'nome',        'value' => ( isset($persona['nome']) ? $persona['nome'] : '' ) ],
            'telefono'  => [ 'field' => 'input', 'type' => 'text',   'name' => 'telefono',   'required' => '',   'placeholder' => 'telefono',    'value' => ( isset($persona['telefono']) ? $persona['telefono'] : '' ) ],
            'camera'    => [ 'field' => 'input', 'type' => 'text',   'name' => 'camera',     'required' => '',   'placeholder' => 'camera',      'value' => ( isset($persona['camera']) ? $persona['camera'] : '' ) ],
            'salva'     => [ 'field' => 'input', 'type' => 'submit', 'name' => 'salva',      'value' => 'Salva' ],
        ]
    );
