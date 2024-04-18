<?php

use Controllers\BooksController;
use Controllers\CategoriesController;

if (isset($_GET['bookID'])) :
    include_once '../app/controllers/booksController.php';
    BooksController\showAction($connexion, $_GET['bookID']);

elseif (isset($_GET['categoryID'])) :
    include_once '../app/controllers/categoriesController.php';
    CategoriesController\showAction($connexion, $_GET['categoryID']);

else :
    include_once '../app/controllers/booksController.php';
    BooksController\indexAction($connexion);
endif;
