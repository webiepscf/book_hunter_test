<?php

use Controllers\BooksController,
    Controllers\CategoriesController,

    Controllers\PagesController;


// PATTERN: /?categoryID=x
// CTRL: categoriesController
// ACTION: showAction
if (isset($_GET['categoryID'])) :
    include_once '../app/controllers/categoriesController.php';
    CategoriesController\showAction($connexion, $_GET['categoryID']);

// ROUTES DES BOOKS
// PREFIX: /?books
elseif (isset($_GET['books'])) :
    include_once '../app/routers/books.php';


// ROUTES DES AUTHORS
// PREFIX: /?authors
elseif (isset($_GET['authors'])) :
    include_once '../app/routers/authors.php';


// PATTERN: /
// CTRL: pagesController
// ACTION: homeAction
else :
    include_once '../app/controllers/pagesController.php';
    PagesController\homeAction($connexion);
endif;
