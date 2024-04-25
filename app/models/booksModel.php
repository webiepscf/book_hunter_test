<?php

namespace Models\BooksModel;

use \PDO;

function findAll(PDO $connexion, array $params_user = []): array
{

    $params_default = [
        'limit' => 10,
        'order_by' => 'created_at',
        'order_direction' => 'DESC',
        'offset' => 0
    ];
    $params = array_merge($params_default, $params_user);

    $sql = "SELECT *
            FROM books
            ORDER BY "
        . htmlentities($params['order_by'])
        . " "
        . htmlentities($params['order_direction'])
        . "
            LIMIT :limit
            OFFSET :offset;";

    $rs =  $connexion->prepare($sql);
    $rs->bindValue(':limit', $params['limit'], PDO::PARAM_INT);
    $rs->bindValue(':offset', $params['offset'], PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, int $id): array
{
    $sql = "SELECT *
            FROM books
            WHERE id = :id;";

    $rs = $connexion->prepare($sql);  // RecordsSet
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}


function findAllByCategoryId(PDO $connexion, int $id): array
{
    $sql = "SELECT *
            FROM books
            WHERE category_id = :id
            ORDER BY title ASC;";

    $rs = $connexion->prepare($sql);  // RecordsSet
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findAllByAuthorId(PDO $connexion, int $id): array
{
    $sql = "SELECT *
            FROM books
            WHERE author_id = :id
            ORDER BY title ASC;";

    $rs = $connexion->prepare($sql);  // RecordsSet
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
