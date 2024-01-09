<?php

/*Create un array associativo $corsoHackademy con chiavi: “docenti”, “studenti”, “argomenti”
  con valore associato rispettivamente array contenenti i docenti, alcuni nomi di vostri colleghi, argomenti trattati durante il corso
  Usate questo array per stampare in console una frase di presentazione a piacere:
*/


$corsoHackademy = ["docenti" => ["Mattia","Emanuele"], "studenti" => ["Diego","Piero","Giancarlo"], "argomenti" => ["html","css","bootstrap","javascript","php"]];





$frase_da_stampare = "Ciao sono". " ". $corsoHackademy['studenti'][0] . " ". "e sto studiando" . " ". $corsoHackademy['argomenti'][4]. " ". "con il proff.". " ". $corsoHackademy['docenti'][1];

echo($frase_da_stampare);


