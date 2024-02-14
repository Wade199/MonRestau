<?php
function ajouter_vue () {
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur';
    $compteur = 1;
    if(file_exists($fichier)){
        // si le fichier existe on incrémente 
        $compteur = (int)file_get_contents($fichier);
        $compteur++;
    }
    file_get_contents ($fichier, $compteur);

}
 



?>