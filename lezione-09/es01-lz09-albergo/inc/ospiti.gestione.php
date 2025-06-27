<?php

    /**
     * qui vanno le logiche per salvare e cancellare le persone
     */

    /** SE i 4 campi sono settati(nome, tel, camera, id) , checka che i 3 di input non siano vuoti =>=>
     *  
     */

    if (isset( $_REQUEST['id'] ) && isset( $_REQUEST['nome'] ) && isset( $_REQUEST['telefono'] ) && isset( $_REQUEST['camera'] )) {
        

        /* =>=> se NON sono vuoti:
        *   - pusha il contenuto della pagina per far sapere che è stato modificato 
        * - Dati\modifica(id, nome, tel, camera)SE a true pusha modifica riuscita ELSE fallita nel testo
        * */
        if ($_REQUEST['nome'] != '' && $_REQUEST['telefono']  != '' && $_REQUEST['camera']  != ''){

            $dati = Dati\modifica($_REQUEST['id'], $_REQUEST['nome'], $_REQUEST['telefono'], $_REQUEST['camera']);

            if ($dati == True){

                $pagina_richiesta['contenuto']['testo'] .= 'Dati modificati con successo.';

            } else{

                $pagina_richiesta['contenuto']['testo'] .= 'Errore nella modifica - dati non modificati.';

            }
        }

        /**  ELSE se sono settati solo nome, tel e camera:
         * - se non vuoti fai gli stessi passaggi sopra ma con 'aggiungo' */
    } elseif (isset( $_REQUEST['nome'] ) && isset( $_REQUEST['telefono'] ) && isset( $_REQUEST['camera'] )) {
    

        if ($_REQUEST['nome'] != ''  && $_REQUEST['telefono'] != '' && $_REQUEST['camera'] != '') {

            $dati = Dati\aggiungi($_REQUEST['nome'], $_REQUEST['telefono'], $_REQUEST['camera']);

            if ($dati == True){

                $pagina_richiesta['contenuto']['testo'] .= 'Dati aggiunti con successo.<br><br>Nominativo: ' . $_REQUEST['nome'] . ', <br>Numero di telefono: ' . $_REQUEST['telefono'] . '.<br> Camera assegnata: ' . $_REQUEST['camera'] . '.';

            } else {

                $pagina_richiesta['contenuto']['testo'] .= 'Errore nell\'elaborazione dei dati. Aggiunta di ' . $_REQUEST['nome'] . ', con numero di telefono ' . $_REQUEST['telefono'] . ' fallita.';

            }
        }

        /** ELSE è settata la request su 'elimina':
         *  - se non vuoti usa Dati\elimina per generare testo e poi pushare su 'testo' (come per gli altri punti)
         * */
    } elseif (isset($_REQUEST['elimina'])) {

        if(!empty($_REQUEST['elimina'])) {

            $dati = Dati\elimina($_REQUEST['elimina']);

            if ($dati == True) {

                $pagina_richiesta['contenuto']['testo'] = 'Eliminazione avvenuta con successo.';

            } else {

                $pagina_richiesta['contenuto']['testo'] = 'Errore nell\'elaborazione dei dati. Eliminazione fallita.';            
            }
        }
        // echo '<pre>' . print_r($_REQUEST['elimina']) . '</pre>';
    }
