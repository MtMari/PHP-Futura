<?php

    namespace Render;

    function render($template, $array){

        $contenuto = file_get_contents($template);

        foreach($array as $key => $value){

            $contenuto = str_replace('{{' . $key . '}}', $value, $contenuto);                
            
        }
        return $contenuto;
    }


    function opzioniSelect($array){

        $opzioni = '';

        foreach($array as $key => $value){
            
            $opzioni .= '<option value="' . $key . '">' . $key . '</option>';   

        }
        return $opzioni;
    }

    function lista(){

        global $piatti;

        $output = '<ul>';

        $output .= '<li>PRIMO: ' . $_REQUEST['primo'] . ', ' . $piatti['primo'][$_REQUEST['primo']] . '€,</li>'
                .  '<li>SECONDO: ' . $_REQUEST['secondo'] . ', ' . $piatti['secondo'][$_REQUEST['secondo']] . '€,</li>'
                . '<li>DOLCE: ' . $_REQUEST['dolce'] . ', ' . $piatti['dolce'][$_REQUEST['dolce']] . '€.</li>'
                . '</ul>';
        return $output;
    }