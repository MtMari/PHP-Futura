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

    function tag($tag, $attr_tag = [], $content_tag = '') {

        // definiamo una variabile a cui concateneremo l'assegnazione delle varie parti del tag
        $tag_line = '<' . $tag;

        // definiamo un costrutto che entrerà in funzione appena appendiamo un componente dell'array
        foreach($attr_tag as $key => $value) {

            

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

        // se il contenuto del tag non è vuoto, fai un'associazione concatenata, creando così il tag di chiusura
        if( ! empty($content_tag)) {
            $tag_line .= $content_tag . '</' . $tag . '>';
        }

        $tag_line . PHP_EOL;

        return $tag_line;
    }

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
                $attributi['field'],        //field lo aggiungiamo noi
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