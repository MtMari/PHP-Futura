<?php

    if (isset($_POST['distanza'])){
        $distanza = $_POST["distanza"];
        $velocita = $_POST["velocita"];

        $dati = array(
            'distanza' =>  $_POST["distanza"],
            'velocita' =>  $_POST["velocita"],
            'tempo' => calcoloTempo($distanza, $velocita)
        );
    }