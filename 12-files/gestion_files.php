<?php

// 1 : on ouvre le fichier

$monfichier = fopen('compteur.txt', 'r+');


// 2 : on lit la première ligne du fichier
$ligne = fgets($monfichier);


// 3 : quand on a fini de l'utiliser, on ferme le fichier

fclose($monfichier);


$monfichier2 = fopen('compteur2.txt', 'r+');

$pages_vues = fgets($monfichier2); // On lit la première ligne (nombre de pages vues)

$pages_vues += 1; // On augmente de 1 ce nombre de pages vues

fseek($monfichier2, 0); // On remet le curseur au début du fichier

fputs($monfichier2, $pages_vues); // On écrit le nouveau nombre de pages vues



fclose($monfichier2);



echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';


?>