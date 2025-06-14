<?php

    // crea la namespace x il form dell'html
    namespace HTML;


    // come prima cosa, ci serve la funzione per creare i tag del form, successivamente, gestiremo la funzione per riempire il form dei suoi attributi

    // FUNZIONE TAG

    /** la funzione $tag, avrà come argomenti:
     *  - il nome del tag  -> $tag
     *  - gli attributi salvati in un array(vuoto) -> $attr_tag = [] ->->-> RICORDA: $array[]: array con indice vuoto != $array = []: array vuoto
     *  - il contenuto dei tag (a cui associeremo valore vuoto!) -> $content_tag = ''
     *  - return: il form HTML generato
     */

    // array degli attributi del tag -> abbiamo detto che è vuoto, perciò non ci serve, lo riempiamo strada facendo

    function tag($tag, $attr_tag = [], $content_tag = '') {

        // definiamo una variabile a cui concateneremo l'assegnazione delle varie parti del tag
        $tag_line = '<' . $tag;

        // definiamo un costrutto che entrerà in funzione appena appendiamo un componente dell'array
        foreach($attr_tag as $key => $value) {

            /**
             * ...?...:... = Ternary operator(found explanations as ?: too) == 
             * == Ternary operators can be defined as a conditional operator that is reasonable for cutting the lines of codes in your program while accomplishing comparisons as well as conditionals. 
             * This is treated as an alternative method of implementing if-else or even nested if-else statements. This conditional statement takes its execution from LEFT TO RIGHT. Using this ternary operator is not only an efficient solution but the best case with a time-saving approach. It returns a warning while encountering any void value in its conditions.
            */
            

            /** TERNARY OPERATOR '?:'//'()?():()' SYNTAX:
             *      $x ? $y : $z =>=> if $x is True, use $y, else use $z
             * 
             *      SHORT FORM: ?:
             *      $x ?: $z =>=> if $x is True, use $x, else use $z
             */

            //  if valore non è vuoto, esegui la stringa concatenata all' htmlspecialchars($value) concatenato ad una stringa, else stringa vuota
            $tag_line .= ' ' . $key . ( ( ! empty( $value ) ) ? '="' . htmlspecialchars($value) . '"' : '');
        }

        // aggiungi la fine dell'apertura del tag
        $tag_line .= '>';

        /**VALORE PIENO:
         * <tag chiave ="valore">
         * 
         * VALORE VUOTO:
         * <tag chiave>
         */

        // se il contenuto del tag non è vuoto, fai un'associazione concatenata, creando così il tag di chiusura
        if( ! empty($content_tag)) {
            $tag_line .= $content_tag . '</' . $tag . '>';
        }

        /**RISULTATO VALORE PIENO:
         * <tag chiave ="valore">contenuto tag</tag>
         * 
         * RISULTATO VALORE VUOTO:
         * <tag chiave>contenuto</tag>
         * 
         * RISULTATO CONTENUTO VUOTO:
         * <tag chiave ="valore">
         *      oppure
         * <tag chiave>
         */
        $tag_line . PHP_EOL;

        return $tag_line;
    }

    /**ESEMPIO CHIAMATA
     * 
     *  $voci = [];
        foreach ($pagine as $key => $value) {
            $voci[] = HTML\tag(
                'a',
                [ 'href' => './' . $key . '.html' ],
                $value['contenuto']['titolo']
            );
        }
        $p['contenuto']['menu'] = HTML\tag( 'p', [], implode( ' | ', $voci ) );
        
     */


    // FUNZIONE FORM

    /** la funzione $form, avrà come argomenti:
     *  - gli attributi salvati in un array -> $attr_form[]
     *  - i campi del form salvati in un array -> $fields_form[]
     *  - return: il form HTML generato
     */



    // funzione form: prima definiscila vuota
    function form($attr_form = [], $fields_form = []) {

        //definisci l'array form vuoto
        $form = [];
        
        // nell'array form le chiavi sono $name e i valori sono $attributi
        foreach($fields_form as $name => $attributi) {

            // all'array form con INDICE VUOTO, assegni la funzione tag($tag, $attr_tag=[], $content_tag='') 
            $form[] = tag(
                $attributi['field'],        //field lo aggiungiamo noi, come deve essere
                $attributi

            );
        }

        $tag_line = tag('form', $attr_form, implode(PHP_EOL, $form));

        return $tag_line;
    }

    /** come per la funzione tag, anche la funzione form prende come argomenti liste vuote,
     * QUINDI
     * definisci attributi e contenuto nel momento in cui la dichiari ->
     *      ->!! all'interno della stessa funzione usi la funzione tag, dove mancherà l'argomento '$tag'
     */


     
    // array degli attributi del form, che non ti serve -> LO DEFINISCI NEL MOMENTO IN CUI CHIAMI LA FUNZIONE form()

    $attr_prof_form = array(
        [  
            'action' => './main.php',
            'method' => 'post'
        ],
        [
            'nome' =>   [
                            'field' => 'input', 
                            'type' => 'text', 
                            'name' => 'nome', 
                            'required' => '', 
                            'placeholder' => 'nome'
                        ],
            'telefono' =>   [ 
                                'field' => 'input', 
                                'type' => 'text', 
                                'name' => 'telefono', 
                                'required' => '', 
                                'placeholder' => 'telefono'
                            ],
            'salva' =>  [ 
                            'field' => 'input', 
                            'type' => 'submit', 
                            'name' => 'salva', 
                            'value' => 'salva'
                        ], 
        ]
    );


        /**CODICE FORM PROF:
         * <form action="./gestione.html" method="post">
         * <input field="input" type="text" name="nome" required placeholder="nome">
         * <input field="input" type="text" name="telefono" required placeholder="telefono">
         * <input field="input" type="submit" name="salva" value="salva">
         * </form>
         */


        /* 
         CODICE MIO:
            <form action="main.php" method="post">
                <label for="item" name="item"></label>
                <input type="text" name="item" placeholder="Prodotto" required>
                <input type="submit" value="Aggiungi">
            </form>
        */


        $attr_my_form = array(
            [  
                'action' => './main.php',                                //$attr_form = []
                'method' => 'post'
            ],
            [
                'item' =>   [
                                'field' => 'label', 
                                'for' => 'item', 
                                'name' => 'item'
                            ],
                'prodotto' =>   [                                         //$fields_form = [] =>=>=> as $name => $attributi --> !!$attributi['fields'] = 'input', 'label' etc
                                    'field' => 'input', 
                                    'type' => 'text', 
                                    'name' => 'item', 
                                    'required' => '', 
                                    'placeholder' => 'Prodotto'
                                ],
                'add' =>  [ 
                                'field' => 'input', 
                                'type' => 'submit',
                                'value' => 'Aggiungi'
                            ], 
            ]
        );