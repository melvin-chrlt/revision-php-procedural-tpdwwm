<?php

    declare(strict_types=1);
    require '../6/includes/db.php';

    if (empty($_POST['nom_de_ligne']) || empty($_POST['terminus_a']) || empty($_POST['terminus_b'])) {
        header('Location:addLines.php?error=missingInput');
        exit();
    } else {
        $nom = htmlspecialchars(trim($_POST['nom_de_ligne']));
        $terminusA = htmlspecialchars(trim($_POST['terminus_a']));  
        $terminusB = htmlspecialchars(trim($_POST['terminus_b']));
    }
    
    if (strlen($nom) < 3 || strlen($nom) > 100) {
        header("Location:index.php?message=<div>Line name must be more than 2 characters...</div>");
        exit();
    }

    if (strlen($terminusA) < 3 || strlen($terminusA) > 100) {
        header("Location:index.php?message=<div>Terminus name must be more than 2 characters...</div>");
        exit();
    }
    
    if (strlen($terminusB) < 3 || strlen($terminusB) > 100) {
        header("Location:index.php?message=<div>Terminus name must be more than 2 characters...</div>");
        exit();
    }

    try {
        $sqlInsertLines = 'INSERT INTO lignes (nom_de_ligne,terminus_a,terminus_b) VALUES (:nom_de_ligne, :terminus_a, :terminus_b)';
        $reqInsertLines = $db->prepare($sqlInsertLines);
        $reqInsertLines->execute(
            [':nom_de_ligne' => $nom, ':terminus_a' => $terminusA, ':terminus_b' => $terminusB]
        );
    
        $insert = $db->lastInsertId();
        header('Location:../8/index.php?id='.$insert);
    } catch (PDOException $e) {
        echo 'Erreur :'.$e->getMessage().$e->getCode();
    }