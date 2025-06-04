<?php

    // librerie
    require_once("lib/render.php");
    require_once("lib/calcolo.php");

    calcoloTempo($distanza, $velocita);

    $content = '';
    calcoloRender($content, $dati);