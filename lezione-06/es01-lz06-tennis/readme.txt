CONSEGNA:
_1: 
- Scrivere un programma che chieda all'utente di inserire i nomi di quattro giocatori di tennis (HTML:ok-PHP:ok)
- e presenti una proposta di accoppiamenti per una partita in doppio.  (HTML:ok-PHP:ok)

!!-Utilizzare l'approccio per file, i template HTML per la visualizzazione, e una libreria per il rendering.


MAPPA:

- nomi.php  + nomi.html(tpl) <-R- lib/render.php
    |POST
    v
- coppie.php + coppie.html(tpl) <-R- lib/render.php
    |
    |link
    |
- nomi.php  + nomi.html(tpl) <-R- lib/render.php


PASSI:
1-OK crea files principali
2-OK refactoring aggiungendo render.php
3-OK dividi tutto per cartelle -!!!-> sistema paths 
4- aggiungi array pagine con rispettivi placeholders e funzioni


VALUTARE:

-OK- rivalutare prima parte: attenersi alla consegna
-OK - integrare la funzione squadre(plhlds) con la funzione array_rand