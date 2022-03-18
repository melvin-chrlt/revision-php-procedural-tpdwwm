<?php

try{
    $id = $_GET['id'];
    $sqlTransports = 'SELECT * FROM lignes WHERE id = :id';
    $reqTransports = $db->prepare($sqlTransports);
    $reqTransports->bindValue(':id', $id);
    $reqTransports->execute();

    $transport = $reqTransports->fetch();   
} catch (PDOException $e){
    echo 'Erreur : '.$e->getMessage();
}