<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $receivedData =$_POST;
    $ts = $receivedData['timestamp'];
$dataDoZwrotu=date('d.m.Y H:i:s', $ts);

$tab =[];
$tab['data'] = $dataDoZwrotu;


echo json_encode($tab); //wyrzucenie na ekran json z tablica $tab zamieniana na json
}

