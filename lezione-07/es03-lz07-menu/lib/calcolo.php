<?php

    function totale(){

        global $piatti;
        
        $output = 0;

        $output += $piatti['primo'][$_REQUEST['primo']] 
                + $piatti['secondo'][$_REQUEST['secondo']]
                + $piatti['dolce'][$_REQUEST['dolce']];
        
        
        return $output;
    }