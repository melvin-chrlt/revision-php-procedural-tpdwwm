<?php

    declare(strict_types=1);
    require '../6/includes/db.php';

    if (empty($_POST['nom_de_ligne']) || empty($_POST['terminus_a']) || empty($_POST['terminus_b'])) {
        header('Location:index.php?error=missingInput');
        exit();
    } else {
        $nom = htmlspecialchars(trim($_POST['nom_de_ligne']));
        $terminusA = htmlspecialchars(trim($_POST['terminus_a']));  
        $terminusB = htmlspecialchars(trim($_POST['terminus_b']));
        $lineID = htmlspecialchars(trim($_POST['id']));
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
        $sqlInsertLines = 'UPDATE lignes SET nom_de_ligne=:nom_de_ligne, terminus_a=:terminus_a, terminus_b=:terminus_b WHERE id=:id';
        $reqInsertLines = $db->prepare($sqlInsertLines);
        $reqInsertLines->execute(
            [':nom_de_ligne' => $nom, ':terminus_a' => $terminusA, ':terminus_b' => $terminusB, ':id' => $lineID]
        );
    
        header("Location:../8/index.php?success=editSuccess&id={$lineID}");
} catch (PDOException $e) {
    echo 'Erreur : '.$e->getMessage();
    echo "<meta http-equiv='refresh' content='3;URL=index.php?id={$lineID}'>";
}