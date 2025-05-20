<?php

    /**
     * FUNZIONI MATEMATICHE
     */

     /** A triangolo: b * a / 2
       * A rettangolo: b * a
       * A cerchio: piGreco * r^2 
       */

    $base = $_POST["base"];
    $altezza = $_POST["altezza"];
    $raggio = $_POST["raggio"]; 

     function a_tr( $base, $altezza ) {
        return $base * $altezza / 2;
     }

     function a_rtt( $base, $altezza ) {
        return $base * $altezza;
     }

     function a_cr( $raggio ) {
        return 3.14 * ( $raggio ** 2 );
     }