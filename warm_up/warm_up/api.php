<?php


$tab = [];

$tab['czas'] = '01.01.2030';
$tab['czasTimetamp'] = time();
$tab['losowaLiczba'] = mt_rand(0, 100);

echo json_encode($tab); //wyrzucenie na ekran json z tablica $tab zamieniana na json

//echo '<pre>';
//print_r($tab);

