<?php

declare(strict_types=1);

require '../6/includes/db.php';

$id = filter_input(INPUT_POST, 'id');

try {
    $sqlDeleteLines = 'DELETE FROM lignes WHERE id = :id';
    $reqDeleteLines = $db->prepare($sqlDeleteLines);
    $reqDeleteLines->bindValue(':id', $id, PDO::PARAM_STR);
    $reqDeleteLines->execute();

    header('Location:../8/index.php?success=deleteSuccess');
} catch (\PDOException $e) {
    echo 'Erreur :'.$e->getMessage();
}