<?php

    // funzione che fa il parsing di un template
    function renderizza($template, $dati) {

        // leggo il contenuto del template
        $contenuto = file_get_contents($template);

        // sostituisco i segnaposto con i dati della pagina
        foreach ($dati as $key => $value) {
            $contenuto = str_replace('{{' . $key . '}}', $value, $contenuto); 
        }

        // rappresento il template
        return $contenuto;

    }


    /** - abbiamo bisogno di una funzione che faccia una sequenza di azioni in una botta sola: - ottenere il contenuto da $template e salvarlo in $contenuto
     *                                                                                         - sostituire i segnaposto con i valori delle rispettive chiavi dell'array e salvarle in $contenuto
     *                                                                                         - ritornare $contenuto, cioè i dati di $template modificati
     * 
     *  !! Questa funzione prende 2 argomenti: $template e $dati ==> quando richiami la funzione, sostituisci 'template' con il file che verrà quindi salvato in $contenuto e sostituisci $dati con l'array che ti serve, ad esempio: renderizza('index.html', $pagine)
     * 
     *  !! Quando richiami le funzioni, ricordati di salvarle in una variabile! Ad esempio, $output
     */