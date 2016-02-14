<?php

$name ='';
$author= '';

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $tab =[];
    $tab['name'] = trim($_GET['name']);;
    $tab['author'] = trim($_GET['author']);;
    $tab['description'] = trim($_GET['description']);;


    echo json_encode($tab); //wyrzucenie na ekran json z tablica $tab zamieniana na json
}

//formularz do dodania ksiazki tu

?>

    <form method="GET">

        <fieldset>
            <legend>Name</legend>
            <p>
                <label>
                    <input type="text" name="name" placeholder="dodaj tytul ksiazki">
                </label>
            </p>

            <legend>Author</legend>
            <p>
                <label>
                    <input type="text" name="author" placeholder="autor">
                </label>
            </p>

            <legend>Description</legend>
            <p>
                <label>
                    <input type="text" name="description" placeholder="opis">
                </label>
            </p>


            <input type="submit" name="dodaj" placeholder="dodaj">

        </fieldset>

