<?php

   require_once( "libraries.php");


/*    $base = $_POST["base"];
   $altezza = $_POST["altezza"];
   $raggio = $_POST["raggio"]; */



  /*  if (isset( $_POST["raggio"])) {
    echo '<p>L\'area è: ' 
        . a_cr( $raggio )
        . '.</p>';
   } elseif ( isset( [$_POST["base"]][$_POST["altezza"]] )) {
    echo '<p>L\'area è: '
        . a_tr( $base, $altezza )
        . '.</p>';
   } */

    if ( isset( $_POST["tr"][$_POST["base"]][ $_POST["altezza"]] )) {
        echo '<p>L\'area è: ' 
            . a_tr( $base, $altezza )
            . '.</p>';
    } else {
        echo 'a';
    }
   
   
   
   
  /*  (isset( $_POST["raggio"])) {
    echo '<p>L\'area è: '
        . a_cr( $raggio )
        . '.</p>';
   } */