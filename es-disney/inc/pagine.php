<?php

    // pages array

    /** content:    title
     *              h1
     *              description
     *              path: <a> back to welcome page
     *              [WELCOME.HTML: add 'menu' and intro]
     * template:    index.html
     * 
     * ADD DEFAULT ->-> bool: !isset $_REQUEST[] && $pages[$_REQUEST[]] => Error 404 + redirect
     * 
     * 
     * CHARACTERS: Sola(John Carter), Amelia(il pianeta del tesoro)
    */


    $pages = array(
        'sola' => array(
            'content' => array(
                'title'         => 'Sola - John Carter',
                'h1'            => "Sola from 'John Carter'",
                'description'   => 'Sola is a kind and gentle Green Martian Thark, which makes her a pariah in the cruel Thark society. She is often at odds with the Thark way of life because she thinks with her heart, not her head. Sola is the runt of the litter and is given the responsibility of stewarding John Carter after he is adopted by the tribe.',
                'path'          => '<a href=./welcome.html>HOME</a>'
            ),
            'template' => './tpl/index.html'
        ),
        'amelia' => array(
            'content' => array(
                'title'         => 'Amelia Smollet - Treasure Planet',
                'h1'            => "Amelia Smollet from 'Treasure Planet'",
                'description'   => 'Amelia Smollet is a Terran Royal Navy officer who captained the RLS Legacy on the voyage to Treasure Planet. Though she carried the title of captain during the voyage and had previously served in the Interstellar Navy, she and her First Mate, Mr. Arrow, had resigned due to finding the Navy too bureaucratic. Five years after the journey to Treasure Planet, Amelia had been reinstated in the navy and was now an admiral, charged with overseeing officer exams at the Port Ivy naval academy with the RLS Lyonesse as her flagship.',
                'path'          => '<a href=./welcome.html>HOMEPAGE</a>'
            ),
            'template' => './tpl/index.html'
        ),
        'welcome' => array(
            'content' => array(
                'title' => 'Homepage',
                'h1'    => 'Disney caharacters',
                'intro' => 'Pick a character:',
            ),
            'template' => './tpl/welcome.html'
        ),        
        'default' => array(
            'content' => array(
                'title'         => 'Not Found',
                'h1'            => 'Error 404',
                'description'   => 'Page Not Found',
                'path'          => '<a href=./welcome.html>Go back to the Homepage</a>'

            ),
            'template' => './tpl/index.html'
        )
        );

/*         $menu = array(
        'welcome' => array(
            'content' => array(
                'title' => 'Homepage',
                'h1'    => 'Disney caharacters',
                'intro' => 'Pick a character:',
            ),
            'template' => './tpl/welcome.html'
        )
        ); */

        // da riscrivere
        if(!isset ($_REQUEST) && !isset($pages[$_REQUEST])) {
            echo render(
                $pages['default']['template'], 
                $pages['default']['content']
            );
        }