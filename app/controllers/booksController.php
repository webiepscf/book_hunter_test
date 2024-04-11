<?php

function indexAction(PDO $connexion)
{
    include_once '../app/models/booksModel.php';
    $books = findAll($connexion);

    global $content;
    ob_start();
    include_once '../app/views/books/index.php';
    $content = ob_get_clean();
}


function showAction(PDO $connexion, $id)
{
    include_once '../app/models/booksModel.php';
    $book = findOneById($connexion, $id);

    global $content;
    ob_start();
    include_once '../app/views/books/show.php';
    $content = ob_get_clean();
}
