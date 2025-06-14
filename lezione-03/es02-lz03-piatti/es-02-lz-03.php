<?php

/**Scrivere un file PHP in cui sia presente un array associativo di [piatti] con [nome], lista degli [ingredienti], e [prezzo].
 *  Scrivere un file HTML dove sia possibile selezionare tramite tendina un primo e un secondo, 
 * dopodiché inviarli al PHP che dovrà scrivere nome dei piatti selezionati, lista degli ingredienti e prezzo. 
 */

       
// echo print_r($_POST, True);
    $piatti = array(
        'primo' => array(
            1 => array(
                'nome' => 'Tortelloni Ricotta e Spinaci',
                'ingredienti' => array('pasta', 'ricotta', 'spinaci'),
                'prezzo' => 12.00
            ),
            2 => array(
                'nome' => 'Insalata di pasta',
                'ingredienti' => array('pasta', 'uova', 'pomodorini', 'insalata', 'acciughe', 'capperi'),
                'prezzo' => 10.00
            ),
            3 => array(
                'nome' => 'Tortellini in Brodo',
                'ingredienti' => array('pasta', 'carne', 'brodo di carne'),
                'prezzo' => 12.00
            ),
            4 => array(
                'nome' => 'Tagliatelle al Ragù',
                'ingredienti' => array('pasta', 'ricotta', 'spinaci'),
                'prezzo' => 12.00
            )
        ),
        'secondo' => array(
            1 => array(
                'nome' => 'Cotoletta alla Milanese con Patate',
                'ingredienti' => array('pollo impanato', 'patate'),
                'prezzo' => 11.00
            ),
            2 => array(
                'nome' => 'Arrosto con Patate',
                'ingredienti' => array('pollo', 'patate'),
                'prezzo' => 10.00
            ),
            3 => array(
                'nome' => 'Cotoletta di Fungo Porcino',
                'ingredienti' => array('Porcino impanato'),
                'prezzo' => 13.00
            )
        )
    );
    
      
    echo '<p>Il piatto "<b>' 
        . ($piatti['primo'][$_POST['pippo']]['nome'])
        . '</b>" ha come ingredienti: <b>'
        . implode(", ", ($piatti['primo'][$_POST['pippo']]['ingredienti']))             //implode: [separatore in string] + [array da unire]
        . '</b>. '
        . 'Il costo è di: <b>'
        . ($piatti['primo'][$_POST['pippo']]['prezzo'])
        . '€</b>.</p>';

    echo '<p>Il piatto "<b>' 
        . ($piatti['secondo'][$_POST['pippo']]['nome'])
        . '</b>" ha come ingredienti: <b>'
        . implode(", ", ($piatti['secondo'][$_POST['pippo']]['ingredienti']))
        . '</b>. '
        . 'Il costo è di: <b>'
        . ($piatti['secondo'][$_POST['pippo']]['prezzo'])
        . '€</b>.</p>';