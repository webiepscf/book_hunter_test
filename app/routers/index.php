<?php

use Controllers\BooksController;

if (isset($_GET['bookID'])) {
    include_once '../app/controllers/booksController.php';
    BooksController\showAction($connexion, $_GET['bookID']);
} else {
    include_once '../app/controllers/booksController.php';
    BooksController\indexAction($connexion);
}
