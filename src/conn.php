<?php

session_start();
require_once(dirname(__FILE__)."/config.php");
require_once(dirname(__FILE__)."/book.php");

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbBaseName );

if($conn->connect_errno){//wypisuje nr bledu
    die("Db connection not initialized properly" . $conn->connect_error);
}

echo("Connection initialized properly");

Book::SetConnection($conn);

$book1 = Book::CreateBook("Nowa ksiazka", "Nowy autor", "Nowy opis");
var_dump($book1);
