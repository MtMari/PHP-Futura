<?php
    // echo print_r($_POST, True);

    /**SWITCH:
     * in base al valore passato in post, includo la pagina corrispondente > i valori non vanno tra [] perché non stiamo targhettizzando l'array in sé, ma la dicitura
     *  !! Ricordati di aggiungere break, oppure ti printa tutto
    */

    switch (isset ($_POST["figura"])) {
        case $_POST["figura"] == 'triangolo':
            include("area_tr.php");
            break;
        case $_POST["figura"] == 'area_rettangolo':
            include("area_rtt.php");
            break;
        case $_POST["figura"] == 'area_cerchio':
            include("area_cr.php");
            break;         
    }