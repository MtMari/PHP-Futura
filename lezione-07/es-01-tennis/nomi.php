<?php

    /**OPZIONI:
     * - Novak Djokovic
     * - Jannik Sinner
     * - Carlos Alcaraz
     * - Daniil Medvedev
     */


    //  array giocatori
    $giocatori = array(
        'opz1' => 'Novak Djokovic',
        'opz2' => 'Jannik Sinner',
        'opz3' => 'Carlos Alcaraz',
        'opz4' => 'Daniil Medvedev'
    );

    // parsing tpl
    $tpl = file_get_contents('nomi.html');

    // echo $tpl;

    // creo il menu select: per ogni valore dell'array, crea una riga della select(option) con value la key dell'array

    function opzioni($tpl, $giocatori) {
        foreach($giocatori as $k => $v) {
            $tpl .= '<option value=' . $k . '">' . $v . '</option>';
        }
        return $tpl;
    }

    // per sostituire {{opzione}} con le opzioni e quindi collegarle effettivamente al tag select
    $tmp='';
    $tpl = str_replace('{{opzione}}', opzioni($tmp, $giocatori), $tpl);

    echo $tpl;