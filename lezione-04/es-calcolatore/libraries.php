<?php

   /**
     * FUNZIONI MATEMATICHE
   */

   /** A triangolo: b * a / 2
    * A rettangolo: b * a
    * A cerchio: piGreco * r^2 
   */



   function a_tr( $base_tr, $altezza_tr ) {
      return $base * $altezza / 2;
   }

   function a_rtt( $base_rtt, $altezza_rtt ) {
      return $base * $altezza;
   }

   function a_cr( $raggio ) {
      return 3.14 * ( $raggio ** 2 ); 
   }     