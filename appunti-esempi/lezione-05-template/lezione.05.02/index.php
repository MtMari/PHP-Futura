<?php

    // pagine
    $pagine = array(
        1 => array(
            'titolo' => 'Pagina 1',
            'contenuto' => 'Contenuto della pagina 1'
        ),
        2 => array(
            'titolo' => 'Pagina 2',
            'contenuto' => 'Contenuto della pagina 2'
        )
    );

    // se è richiesta una pagina specifica
    if (isset($_GET['pagina']) && array_key_exists($_GET['pagina'], $pagine)) {

        // individuo la pagina richiesta
        $pagina = $pagine[$_GET['pagina']];

        // leggo il contenuto del template
        $template = file_get_contents('tpl/index.html');

        // sostituisco i segnaposto con i dati della pagina
        foreach ($pagina as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template); 
        }

        // rappresento il template
        echo $template;

    }


    /** - dobbiamo creare un'array che contenga gli elementi del corrispettivo file .html per sostituirli -> ogni elemento dell'array corrisponderà alla sua pagina ===> il file 'index.html' è un TEMPLATE, cioè è il blueprint per ogni nostra pagina!
     *  - come cambiamo da un valore all'altro dell'array per mostrare, quindi, le pagine diverse? => COSTRUTTO IF: se è stato settata la chiave 'pagina' E SE esiste nell'array pagine questa chiave (='pagina'): - salva il valore in GET nella variabile $pagina, 
     *                                                      - leggi il file index.html e salvalo come stringa in $template
     *                                                      - solo allora sostituisci tutti gli elementi indicati dalla sintassi della funzione str_replace e salvali in $template
     *                                                      - INFINE, leggi $template (= il file index con gli elementi sostituiti!!)
     * 
     *  - str_replace con il foreach: prendo la variabile $pagina in cui ho salvato il valore GET di 'pagina' e ne suddivido chiavi e valori nelle corrispettive variabili, DOPODICHE sostituisco la chiave dell'array tra {{}} (il cui valore è stato asseganto a $key!!) con i valori dello stesso array e della corrispettiva chiave (che sono invece salvati in $value!!), salva il tutto nella variabile $template
     *  - ALLA FINE, in $template c'è salvata la pagina index.html a cui però abbiamo cambiato alcune parole!!
     */
