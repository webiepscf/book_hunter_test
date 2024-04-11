<?php

namespace Models\CategoriesModel;

use \PDO;

function findAll(PDO $connexion): array
{
    $sql = "SELECT *
            FROM categories
            ORDER BY name ASC;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
