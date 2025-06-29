<?php

    /**
     * qui vanno le logiche per salvare e cancellare le persone
     */



    if (isset( $_REQUEST['id'] ) && isset( $_REQUEST['nome'] ) && isset( $_REQUEST['telefono'] ) && isset( $_REQUEST['camera'] ) && isset( $_REQUEST['arrivo'] ) && isset( $_REQUEST['partenza'] )) {
        

        // modifica
        if ($_REQUEST['nome'] != '' && $_REQUEST['telefono']  != '' && $_REQUEST['camera']  != '' && $_REQUEST['arrivo']  != '' && $_REQUEST['partenza']  != '') {

            // echo '<pre>Arrivo: ' . print_r($_REQUEST['arrivo']) . '<br>Partenza: ' . print_r($_REQUEST['partenza']) . '</pre>';
            // echo '<pre>Arrivo: ' . var_dump($_REQUEST['arrivo']) . '<br>Partenza: ' . var_dump($_REQUEST['partenza']) . '</pre>';


            $dati = Dati\modifica($_REQUEST['id'], $_REQUEST['nome'], $_REQUEST['telefono'], $_REQUEST['camera'],  $_REQUEST['arrivo'], $_REQUEST['partenza']);

            if ($dati == True){

                $pagina_richiesta['contenuto']['testo'] .= 'Dati modificati con successo.';

            } else {

                $pagina_richiesta['contenuto']['testo'] .= 'Errore nella modifica - dati non modificati.';

            }
        }

        // aggiungi
    } elseif (isset( $_REQUEST['nome'] ) && isset( $_REQUEST['telefono'] ) && isset( $_REQUEST['camera'] ) && isset( $_REQUEST['arrivo'] ) && isset( $_REQUEST['partenza'] )) {
    

        if ($_REQUEST['nome'] != ''  && $_REQUEST['telefono'] != '' && $_REQUEST['camera'] != '' && $_REQUEST['arrivo']  != '' && $_REQUEST['partenza']  != '') {

            $dati = Dati\aggiungi($_REQUEST['nome'], $_REQUEST['telefono'], $_REQUEST['camera'], $_REQUEST['arrivo'], $_REQUEST['partenza']);

            if ($dati == True) {

                $pagina_richiesta['contenuto']['testo'] .= 'Dati aggiunti con successo.<br><br>Nominativo: ' . $_REQUEST['nome'] . ', <br>Numero di telefono: ' . $_REQUEST['telefono'] . '.<br> Camera assegnata: ' . $_REQUEST['camera'] . '<br>Data arrivo: ' . $_REQUEST['arrivo'] . '<br>Data partenza: ' . $_REQUEST['partenza'] . '.';

            } else {

                $pagina_richiesta['contenuto']['testo'] .= 'Errore nell\'elaborazione dei dati. Aggiunta di ' . $_REQUEST['nome'] . ', con numero di telefono ' . $_REQUEST['telefono'] . ' fallita.';

            }
        }

        // elimina
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