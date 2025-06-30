<?php

    /**
     * libreria per la gestione dell'anagrafe
     */

    namespace Anagrafe;

    /**
     * aggiunge una cane all'anagrafe
     * @param string $nome
     * @param string $eta
     * @return boolean true se l'aggiunta è andata a buon fine, false altrimenti
     */
    function aggiungi($nome, $eta) {

        $anagrafe = lista();

        // crea id
        $id = md5('anagrafe-'.microtime(true).rand(0, 1000));

        // aggiungi all'id nome ed età
        $anagrafe[ $id ] = [

            'nome' => $nome,
            'eta' => $eta
        ];

        // logica per scrivere nel db
        $h = fopen('./anagrafe.db', 'w+');

        if ($h === false) {

            return false;

        } else {

            fwrite($h, serialize($anagrafe));
            fclose($h);

            return true;
        }
    }

    /**
     * restituisce la lista dei cani nell'anagrafe
     * @return array un array associativo con i cani nell'anagrafe
     */
    function lista() {
        if (!file_exists('./anagrafe.db')) {

            return [];

        } else {

            return unserialize(file_get_contents('./anagrafe.db'));
        }
    }

    /**
     * elimina una cane dall'anagrafe
     * @param string $id l'id del cane da eliminare
     * @return boolean true se l'eliminazione è andata a buon fine, false altrimenti
     */
    function elimina($id) {

        $anagrafe = lista();

        // logica per eliminare dal db        
        if (isset($anagrafe[$id])) {

            unset($anagrafe[$id]);
            $h = fopen('./anagrafe.db', 'w+');

            if ($h === false) {

                return false;

            } else {

                fwrite($h, serialize($anagrafe));
                fclose($h);

                return true;
            }
        } else {

            return false;
        }
    }

    /**
     * aggiorna un cane nell'anagrafe
     * @param string $id l'id del cane da aggiornare
     * @param string $nome il nuovo nome del cane
     * @param string $eta la nuova eta del cane
     * @return boolean true se l'aggiornamento è andato a buon fine, false altrimenti
     */
    function modifica($id, $nome, $eta) {

        $anagrafe = lista();

        if (isset($anagrafe[$id])) {

            // aggiungi all'id nome ed età
            $anagrafe[$id] = [
                'nome' => $nome,
                'eta' => $eta
            ];

            $h = fopen('./anagrafe.db', 'w+');

            // logica per modificare dati del db 
            if ($h === false) {

                return false;

            } else {

                fwrite($h, serialize($anagrafe));
                fclose($h);

                return true;
            }
        } else {

            return false;
        }
    }
