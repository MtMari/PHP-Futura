Scrivere:
- OK- una libreria con tre funzioni per il calcolo dell'area di cerchio, triangolo e rettangolo. 
- OK- Scrivere un file index.php che con una tendina faccia scegliere all'utente la figura di cui calcolare l'area. 
- OK- Scrivere un file per ogni figura, che chieda i dati necessari, 
- OK- e includere il file corretto in base al valore selezionato nella tendina. 
===ATTENZIONE=== significa: crea 1 file x ogni figura > ogni file chiede i rispettivi dati E INCLUDE il file corretto in base al valore selezionato in tendina
- OK- Infine fare in modo che, sulla base dei dati passati, il programma visualizzi l'area della figura scelta.

NOTE:

- isset() non può prendere come argomento un'espressione, quindi non accetta il percorso intero per raggiungere il valore desiderato. Per raggirare questo problema devi vedere se la dicitura in sé del POST è quella giusta -> 
    [$_POST["figura"]["triangolo"]] non è accettato
        |
        |
        v
    $_POST["figura"] == 'triangolo' è accettato
- nello SWITCH, 'break' è importante perché altrimenti rischi che ti svolga anche tutte le opzioni successive alla condizione vera