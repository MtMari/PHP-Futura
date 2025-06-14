<?php

    require_once('lib/config.php');
    require_once("lib/calcolo.php");

    echo '<p>L\' mcm è '
        . mcm($a, $b)
        . '.</p>';