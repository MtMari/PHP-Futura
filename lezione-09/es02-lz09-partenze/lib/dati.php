<?php

    /**
     * libreria per la gestione dei dati degli ospiti
     */

    namespace Dati;

    /**
     * aggiunge un'ospite
     * @param string $nome
     * @param string $telefono
     * @param string $camera
     * @return boolean true se l'aggiunta è andata a buon fine, false altrimenti
     */

    function aggiungi($nome, $telefono, $camera, $arrivo, $partenza) {

        $dati_ospiti = lista();

        $id = md5('ospiti-'.microtime(true).rand(0, 1000));

        $dati_ospiti[$id] = [
            'nome'      => $nome,
            'telefono'  => $telefono,
            'camera'    => $camera,
            'arrivo'    => $arrivo,
            'partenza'  => $partenza
        ];

        $h = fopen('./ospiti.db', 'w+');

        if ($h === false) {

            return false;

        } else {

            fwrite($h, serialize($dati_ospiti));

            fclose($h);

            return true;

        }
    }

    /**
     * restituisce la lista dei dati degli ospiti
     * @return array un array associativo con i dati degli ospiti
     */

    function lista() {

        if (!file_exists('./ospiti.db')) {

            return [];

        } else {

            return unserialize(file_get_contents('./ospiti.db'));

        }
    }

    /**
     * elimina un ospite
     * @param string $id l'id dell'ospite da eliminare
     * @return boolean true se l'eliminazione è andata a buon fine, false altrimenti
     */

    function elimina($id) {

        $dati_ospiti = lista();

        if (isset($dati_ospiti[$id])) {

            unset($dati_ospiti[$id]);

            $h = fopen('./ospiti.db', 'w+');

            if ($h === false) {

                return false;

            } else {

                fwrite($h, serialize($dati_ospiti));

                fclose($h);

                return true;
            }
        } else {

            return false;
        }
    }

    /**
     * aggiorna i dati di un ospite
     * @param string $id l'id dell'ospite d'aggiornare
     * @param string $nome il nuovo nome dell'ospite
     * @param string $telefono del nuovo ospite
     * @param string $camera del nuovo ospite
     * @return boolean true se l'aggiornamento è andato a buon fine, false altrimenti
     */

    function modifica($id, $nome, $telefono, $camera, $arrivo, $partenza) {

        $dati_ospiti = lista();

        if (isset($dati_ospiti[$id])) {

            $dati_ospiti[$id] = [
                'nome'      => $nome,
                'telefono'  => $telefono,
                'camera'    => $camera,
                'arrivo'    => $arrivo,
                'partenza'  => $partenza
            ];

            $h = fopen('./ospiti.db', 'w+');

            if ($h === false) {

                return false;

            } else {

                fwrite($h, serialize($dati_ospiti));

                fclose($h);

                return true;
            }
        } else {
            
            return false;
        }
    }
