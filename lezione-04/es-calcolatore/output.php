<?php

    require_once("libraries.php");
     //echo print_r($_POST, True);


   if( isset( $_POST["base_tr"])) {
        $base_tr = $_POST["base_tr"];
        $altezza_tr = $_POST["altezza_tr"];
        echo 'L\'area del tuo triangolo è: '
          . a_tr($base_tr, $altezza_tr)
          . '.';
     } elseif( isset( $_POST["base_rtt"])) {
        $base_rtt = $_POST["base_rtt"];
        $altezza_rtt = $_POST["altezza_rtt"];
        echo 'L\'area del tuo rettangolo è: '
          . a_rtt($base_rtt, $altezza_rtt)
          . '.';
     } elseif( isset( $_POST[ "raggio" ])) {
        $raggio = $_POST[ "raggio" ]; 
        echo 'L\'area del tuo cerchio è: '
          . a_cr($raggio)
          . '.';
     }
   
   
   
 



