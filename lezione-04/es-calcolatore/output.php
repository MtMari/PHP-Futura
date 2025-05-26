<?php

    require_once("libraries.php");

   if( isset( $_POST[ "raggio" ])) {
    $raggio = $_POST[ "raggio" ]; 
    echo a_cr($raggio);    
    // echo print_r($_POST, True);
   } else {
    echo 'a';
   }
   



