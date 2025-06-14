<?php

    switch (isset($_POST["programma"])) {
        case $_POST["programma"] == "area":
            include('area/index.php');
            break;
        case $_POST["programma"] == "mcm":
            include('mcm/index.php');
            break;
        default:
            echo '<p>Pagina non trovata</p>';
            break;
    }