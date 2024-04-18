<?php

namespace Controllers\CategoriesController;

use \PDO, Models\CategoriesModel, Models\BooksModel;

function showAction(PDO $connexion, int $id)
{
    include_once '../app/models/categoriesModel.php';
    $category = CategoriesModel\findOneById($connexion, $id);

    include_once '../app/models/booksModel.php';
    $books = BooksModel\findAllByCategoryId($connexion, $id);

    global $content;
    ob_start();
    include '../app/views/categories/show.php';
    $content = ob_get_clean();
}
