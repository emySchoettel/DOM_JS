<?php
header('Content-type: text/xml');
$tab = array(
    array(
        'id' => 1,
        'nom' => 'schoettel',
        'prenom' => 'emy',
        'ville' => 'strasbourg'
    ),
    array(
        'id' => 2,
        'nom' => "schoettel",
        'prenom' => 'luc',
        'ville' => "colmar"
    )
);  

var_dump($tab);
echo ($tab);
?>    

    