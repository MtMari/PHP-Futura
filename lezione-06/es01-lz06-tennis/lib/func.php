<?php
    
    // func render

/*     function render($tmp, $array) {
        $template = file_get_contents($content);

        foreach ($squadre as $key => $value) {
            $template = str_replace('{{' . $key .'}}', $value,  $template);
        }
        return $template;        

    } */
    
    // funzione {{squadre}}

    function squadre($template, $squadre) {
        $template = file_get_contents('tpl/coppie.html');
        
        foreach ($squadre as $k => $v) {
            $template = str_replace('{{' . $k .'}}', $v,  $template);
        }
        return $template;
    }