<?php

namespace Controllers\PagesController;

use \PDO;

function homeAction(PDO $connexion)
{
    // Je vais chercher les derniers Books et Authors pour la vue 'home'
    include_once '../app/models/booksModel.php';
    $books = \Models\BooksModel\findAll($connexion, [
        'limit' => 3,
        'order_by' => 'title',
        'order_direction' => "ASC"
    ]);

    include_once '../app/models/authorsModel.php';
    $authors = \Models\AuthorsModel\findAll($connexion, 5);

    // Je charge la vue 'home'
    global $content;
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}
