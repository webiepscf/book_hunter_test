<?php

if (isset($_GET['bookID'])) {
    include_once '../app/controllers/booksController.php';
    showAction($connexion, $_GET['bookID']);
} else {
    include_once '../app/controllers/booksController.php';
    indexAction($connexion);
}
