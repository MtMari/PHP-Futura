<?php
    // DA FA' COME PRIMO


    /**
     * qui vanno le logiche per la visualizzazione della lista dei cani
     */


    //  1.fai i campi della tabella con Anagrafe\lista()=>dove sta?!: lib/anagrafe.php 
    // GIOIA MIA, non fa i campi, ti legge il file db se c'è, altrimenti lo crea=>=> è solo un richiamo, salvatalo in una variabile, così puoi riutilizzare il sistema di lettura-scrittura del db =>=> se esiste, il file ha i dati che andranno nella tabella(passo 2.2)

    $anagrafe = Anagrafe\lista();


    /**2.2: CREAZIONE TABELLA:
     * - crea array vuoto per le righe
     * - foreach array anagrafe
     *      - crea un array vuoto per i campi
     *      - ad indice vuoto, concatena tag() x td
     *      - (aggiungi cella modifica e cella elimina)
     *      - all'array ad indice vuoto delle righe aggiungi tag tr, [] e l'implode dell'array pieno dei campi
     * - al testo della pagina aggiungi il tag table x il bordo, implodendo l'array pieno delle righe
     * - aggiungi al testo, concatenando, il tag hr
    */

    $righe_tabella = [];

    foreach ($anagrafe as $id => $cane) {

        $campi_tabella = [];

        // tag($tag, $attr = [], $content = '')
        // $campi_tabella[] = HTML\tag('td', [], $id);
        $campi_tabella [] = HTML\tag('td', [], $cane['nome']);
        $campi_tabella [] = HTML\tag('td', [], $cane['eta']);
        // aggiungi modifica ed elimina: DOPO
        $campi_tabella [] = HTML\tag('td', [], HTML\tag('a', [ 'href' => './index.html?id=' . $id], 'modifica'));
        // aggiungi elimina
        $campi_tabella [] = HTML\tag('td', [], HTML\tag('a', [ 'href' => './gestione.html?elimina=' . $id], 'elimina'));

        $righe_tabella [] = HTML\tag('tr', [], implode('', $campi_tabella));
    }


    $pagina_richiesta['contenuto']['testo'] = HTML\tag('table', ['border' => 1], implode('', $righe_tabella));

    $pagina_richiesta['contenuto']['testo'] .= HTML\tag('hr');

    // 3=ULTIMO PASSAGGIO.se l'id è settato, ? allora aggiungi un campo input hidden : campi vuoti =>=> così alla modifica parseranno i dati necessari, altrimenti saranno vuoti

    // se 'id' della request è settato in entrambi i modi
    if (isset($_REQUEST['id']) && isset($anagrafe[$_REQUEST['id']])) {

        // in cane salvo la request d'id
        $cane = $anagrafe[$_REQUEST['id']];
        // creo una variabile in cui metto l'input per il form che richiamerò dopo
        $idField = [
            'field' => 'input',
            'type'  => 'hidden',
            'name'  => 'id',
            'value' => $_REQUEST['id']
        ];
        // altrimenti lascio vuoti entrambe
    } else {
        $cane = [];
        $idField = [];
    }


    /** 2.1: CREAZIONE FORM:
     * - al testo aggiungi la funzione form (si compone con i suoi argomenti)
    */

    // form($attr = [], $fields = [])
    $pagina_richiesta['contenuto']['testo'] .= HTML\form(

        // attributi
        [ 'action' => './gestione.php', 'method' => 'post'],

        // fields
        [ 
            'id'        => $idField,
            'nome'      =>  [   'field' =>  'input',    'type'  => 'text',      'name'  => 'nome',  'placeholder'   => 'Nome',  'value' => ( isset($cane['nome']) ? $cane['nome'] : '' )    ],
            'eta'       =>  [   'field' =>  'input',    'type'  => 'number',    'name'  => 'eta',   'placeholder'   => 'Età',   'value' => ( isset($cane['eta']) ? $cane['eta'] : '' )     ],
            'button'    =>  [   'field' =>  'input',   'type'  =>  'submit',   'value' =>  'Conferma' ]
        ]
    );




    