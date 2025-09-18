<?php

    function calcoloTempo($distanza, $velocita) {
        $tempo = $distanza / $velocita * 60;
        return $tempo;
    }