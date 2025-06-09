<?php   

    // render functions: RENDER and ??RENDER-MENU (both return and parse template!!)

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

    // menu: stampa str_replace con li+$key, return content parsato
    function menu($template, $array) {
        $content = file_get_contents($template);

        foreach($array as $key => $value) {
            $content = str_replace('{{menu}}', '<li><a href="./' . $key . '.html</li><br>', $content);
        }
        return $content;
    }