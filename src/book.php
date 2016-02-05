<?php

/*
CREATE TABLE Books(
    id int AUTO_INCREMENT,
    name varchar(255),
    author varchar(255),
    description varchar(255),
    PRIMARY KEY(id)
 );



W	katalogu	<katalog	główny	projektu>/api/src	stwórz	plik	book.php.
W	nim	stwórz	klasę	Book.	Stwórz	do	niej	tabelkę	w	bazie	danych.
Ma	ona	implementować	następujące	funkcjonalności:
• Set	i	get	do	wszystkich	atrybutów	(do	id	tylko	get)
• Konstruktor	nastawiający	id	na	-1	a	resztę	danych	zerujący
• Funkcję	loadFromDB(conn,	id)
• Funkcję	create(conn,	name,	autor)
• Funkcję	update(conn,	name,	autor)
• Funkcję	delteFromDB(conn)	Ręcznie	wprowadź	kilka	książek	do	bazy	danych.
*/

class Book
{

    private $id;
    private $name;
    private $author;
    private $description;


    public function __construct($newId, $newName, $newAuthor, $newDescription)
    {
        $this->id = intval($newId);
        $this->setName($newName);
        $this->setAuthor($newAuthor);
        $this->setDescription($newDescription);
    }

    public function getID()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getDescription()
    {
        return $this->description;
    }


    public function setName($newName)
    {
        if (is_string($newName)) {
            $this->name = $newName;
        }
    }

    public function setAuthor($newAuthor)
    {
        if (is_string($newAuthor)) {
            $this->author = $newAuthor;
        }
    }

    public function setDescription($newDescription)
    {
        if (is_string($newDescription)) {
            $this->description = $newDescription;
        }
    }

}