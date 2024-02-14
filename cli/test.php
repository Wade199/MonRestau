<?php
$fichier =  __DIR__ . DIRECTORY_SEPARATOR .'demo.test';
echo file_exists ($fichier);






// ecriture dans un fichier
/*$size = @file_put_contents($fichier, 'marc comment ça va ?');
if ($size === false) {
    echo 'Impossible d\'écrire dans le fichier';
}else{
    echo 'Ecriture réussie';
}*/
