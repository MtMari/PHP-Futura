CONSEGNA:
_2:
- Scrivere un programma che calcoli il tempo di percorrenza di un viaggio dati la distanza in Km e la velocità media in Km/h.

!!-Utilizzare i template per l'HTML, una libreria per il rendering, e una libreria per il calcolo del tempo. 

MAPPA:

- input.html (tpl) + input.php <-R- lib/render.php
	|POST
	v
- output.php + output.html(tpl) <-R- lib/render.php, lib/calcolo.php
	|									M
	|link								|_R_lib/calcolo.php(variabili condivise)
	|
- input.html (tpl) + input.php <-R- lib/render.php


PASSI:
1-OK- crea file principali a coppie (1:ok-2:ok)
2- aggiungi array pagine
3-OK- refactoring
4-NO- converti i dati


distanza = velocità * tempo

tempo = distanza / velocità
T= x metr * 600 = secondi
V= x km/h * 1000m / 3600s = m/s
D = 1km == 1000m