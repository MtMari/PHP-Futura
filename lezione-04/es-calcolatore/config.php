<?php
    echo print_r($_POST, True);
    
/*     while(isset($_POST['tr'])) {
        include("area_tr.php");
    }
    include( "area_cr.php"); */
    
    if( isset( $_POST['tr'])) {
        include("area_tr.php");
    // } elseif (isset(['figura'][ $_POST['a_rtt']] )) {
    //     include("area_rtt.php");
    } else {
        include( "area_cr.php");
    }