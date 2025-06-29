<?php

    /**
     * qui vanno le logiche per la visualizzazione della lista delle persone
     */

    // 1.campi della tabella
    // \tag($tag, $attr = [], $content = '')

    $dati_ospiti= Dati\lista();

    $righe = [];

    foreach ($dati_ospiti as $id => $persona) {
        
        $data_oggi = date("Y-m-d");

        if ($persona['partenza'] <= $data_oggi) {

            $campo_partenza = HTML\tag('td', [ 'bgcolor' => 'red' ], 'Partenza: ' . $persona['partenza']);

        } else {

            $campo_partenza = HTML\tag('td', [], 'Partenza: ' . $persona['partenza']);

        }


        $campi = [];

        // $campi[] = HTML\tag('td', [], $id);
        $campi[] = HTML\tag('td', [], $persona['nome']);
        $campi[] = HTML\tag('td', [], 'Tel. ' . $persona['telefono']);
        $campi[] = HTML\tag('td', [], 'Camera ' . $persona['camera']);
        $campi[] = HTML\tag('td', [], 'Arrivo: ' . $persona['arrivo']);
        $campi[] = $campo_partenza;

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
            'nome'      => [ 'field' => 'input', 'type' => 'text',   'name' => 'nome',       'required' => '',   'placeholder' => 'Nome',        'value' => ( isset($persona['nome']) ? $persona['nome'] : '' ) ],

            'telefono'  => [ 'field' => 'input', 'type' => 'text',   'name' => 'telefono',   'required' => '',   'placeholder' => 'Telefono',    'value' => ( isset($persona['telefono']) ? $persona['telefono'] : '' ) ],

            'camera'    => [ 'field' => 'input', 'type' => 'text',   'name' => 'camera',     'required' => '',   'placeholder' => 'Camera',      'value' => ( isset($persona['camera']) ? $persona['camera'] : '' ) ],

            'Arrivo'    => [ 'field' => 'input', 'type' => 'date',   'name' => 'arrivo',     'required' => '',   'placeholder' => 'Arrivo gg/mm/aa',      'value' => ( isset($persona['arrivo']) ? $persona['arrivo'] : '' ) ],

            'partenza'    => [ 'field' => 'input', 'type' => 'date',   'name' => 'partenza',     'required' => '',   'placeholder' => 'Partenza gg/mm/aa',      'value' => ( isset($persona['partenza']) ? $persona['partenza'] : '' ) ],            
            
            'salva'     => [ 'field' => 'input', 'type' => 'submit', 'name' => 'salva',      'value' => 'Salva' ],

        ]
    );

    // echo '<pre>Arrivo: ' . var_dump($_REQUEST['arrivo']) . 'Partenza: ' . var_dump($_REQUEST['arrivo']) . '</pre>';

        /**
     * qui vanno le logiche di overbooking: colorare di rosso le date di partenza uguali o precedenti a oggi; 
     */

    $dati_ospiti= Dati\lista();

    echo '<pre>' . print_r($dati_ospiti) . '</pre>';

    var_dump($data_oggi);

    /**
     * SOLO SE SONO SETTATI O TE LI SEGNA COME UNDEFINED
     * 
     * $data_oggi = date(d-m-Y)
     * for each $dati_ospiti as $id => $persona
     * $persona['partenza'] <= $data_oggi =>=> 
     *      =>=> $campo_partenza = HTML\tag('td', [ bgcolor => red ], 'Partenza: ' . $persona['partenza']
     * 

    */
/*     $data_oggi = date("d/m/Y");

    foreach ($dati_ospiti as $id => $persona) { 
        if ($persona['partenza'] <= $data_oggi) {

            $campo_partenza = HTML\tag('td', [ 'bgcolor => red' ], 'Partenza: ' . $persona['partenza']);
        }
    } */

    /**
     * Array ( 
     *  [0890c8052bac6e0e64e84cbff02ad915] => Array ( 
     *      [nome]      => Lucia Rossi,
     *      [telefono]  => 123456789, 
     *      [camera]    => 2,
     *      [arrivo]    => 05/07/2026,
     *      [partenza]  => 15/07/2026
     *  ),
     *  [b2e442f16a180f28d83e8a2cb3c0d893] => Array ( 
     *      [nome]      => Gino Bianchi
     *      [telefono]  => 987654321
     *      [camera]    => 1
     *      [arrivo]    => 05/07/26
     *      [partenza]  => 15/07/2026
     *  ),
     *  [13ee5766e865835cea4b6b0dfd69be32] => Array ( 
     *      [nome]      => Maria Gonzales
     *      [telefono]  => 678912345
     *      [camera]    => 2,
     *      [arrivo]    => 05/07/2026,
     *      [partenza]  => 15/07/2026
     *  ), 
     *  [3897582425016356f505d3b3d25a2297] => Array ( 
     *      [nome]      => Steve Blake
     *      [telefono]  => 432198765
     *      [camera]    => 7
     *      [arrivo]    => 04/04/2025
     *      [partenza]  => 04/06/2025 
     *  ) 
     * );
     */