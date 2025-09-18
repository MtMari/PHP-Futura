<?php   

    // R/I inc/pagine.php
    require_once('inc/pagine.php');


    // render
    function render($template, $array) {
        $content = file_get_contents($template);

        foreach($array as $key => $value) {
            $content = str_replace('{{' . $key . '}}', $value, $content);
        }
        return $content;
    }

    // menu
    function menuHomepage($array) {

        $output = '<ul>';
        foreach($array as $key => $value) {
            if ($key != 'welcome' && $key != 'default'){
                
                $output .= '<li><a href=./' . $key . '.html>' . $key . '</a></li>';

            }
        }
        $output .= '</ul>';
        return $output;
    }