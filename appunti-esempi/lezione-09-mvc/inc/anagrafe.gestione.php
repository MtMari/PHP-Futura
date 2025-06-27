<?php

    /**
     * qui vanno le logiche per salvare e cancellare le persone
     */

    /** se i 3 campi sono settati , checka che i 2 di input non siano vuoti =>=>
     *  
     */

    if (isset($_REQUEST['nome']) && isset($_REQUEST['eta']) && isset($_REQUEST['id'])) {

        /* =>=> se NON sono vuoti:
        *   - pusha il contenuto della pagina per far sapere che è stato modificato 
        * - Anagrafe\modifica(id, nome, eta) a true pusha modifica riuscita oppure fallita nel testo
        * */
        if ($_REQUEST['nome'] != '' && $_REQUEST['eta'] != '') {

            $pagina_richiesta['contenuto']['testo'] = 'modifico ' . $_REQUEST['nome'] . ' di anni ' . $_REQUEST['eta'];

            $r = Anagrafe\modifica($_REQUEST['id'], $_REQUEST['nome'], $_REQUEST['eta']);

            if ($r) {

                $pagina_richiesta['contenuto']['testo'] .= ' - modifica riuscita';

            } else {

                $pagina_richiesta['contenuto']['testo'] .= ' - modifica fallita';
            }
        }


    } elseif (isset($_REQUEST['nome']) && isset($_REQUEST['eta'])) {

        /*  ELSE se sono settati solo nome ed eta:
               - se non vuoti fai gli stessi passaggi sopra ma con 'aggiungo' */
        if ($_REQUEST['nome'] != '' && $_REQUEST['eta'] != '') {

            $pagina_richiesta['contenuto']['testo'] = 'aggiungo ' . $_REQUEST['nome'] . ' di età ' . $_REQUEST['eta'];

            $r = Anagrafe\aggiungi($_REQUEST['nome'], $_REQUEST['eta']);

            if ($r) {
                $pagina_richiesta['contenuto']['testo'] .= ' - aggiunta riuscita';

            } else {

                $pagina_richiesta['contenuto']['testo'] .= ' - aggiunta fallita';
            }
        }

        /* ELSE è settato la request su 'elimina':
              - se non vuoti usa Rubrica\elimina per generare testo e poi pushare su 'testo' (come per gli altri punti) */
    } elseif (isset($_REQUEST['elimina'])) {

        if( !empty($_REQUEST['elimina']) ) {

            $r = Anagrafe\elimina($_REQUEST['elimina']);

            $p['contenuto']['testo'] = 'eliminazione di ' . $_REQUEST['elimina'] . ' in corso...';

            if ($r) {

                $pagina_richiesta['contenuto']['testo'] .= ' eliminazione riuscita';

            } else {
                
                $pagina_richiesta['contenuto']['testo'] .= ' eliminazione fallita';
            }
        }
    }
