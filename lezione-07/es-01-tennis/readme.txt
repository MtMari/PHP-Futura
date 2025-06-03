CONSEGNA:
_1: 
- Scrivere un programma che chieda all'utente di inserire i nomi di quattro giocatori di tennis (HTML:ok-PHP:ok)
- e presenti una proposta di accoppiamenti per una partita in doppio.  (HTML:-PHP:)

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
1- crea files principali
2- refactoring aggiungendo render.php
3- dividi tutto per cartelle -!!!-> sistema paths 
4- aggiungi array pagine con rispettivi placeholders e funzioni
5- rivedi css


ERRORI:
- css/style.css: classe 'large' non funzionante;
