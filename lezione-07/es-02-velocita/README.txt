CONSEGNA:
_2:
- Scrivere un programma che calcoli il tempo di percorrenza di un viaggio dati la distanza in Km e la velocità media in Km/h.

!!-Utilizzare i template per l'HTML, una libreria per il rendering, e una libreria per il calcolo del tempo. 

MAPPA:

- input.html (tpl) + input.php <-R- lib/render.php, lib/calcolo.php
	|POST
	v
- output.php + output.html(tpl) <-R- lib/render.php, lib/calcolo.php
	|
	|link
	|
- input.html (tpl) + input.php <-R- lib/render.php, lib/calcolo.php


PASSI:
1- crea file principali a coppie (1:ok-2:ok)
2- aggiungi array pagine
3- refactoring
4- converti i dati


distanza = velocità * tempo

tempo = distanza / velocità
T= x metr * 600 = secondi
V= x km/h * 1000m / 3600s = m/s
D = 1km == 1000m