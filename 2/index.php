<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
    <link rel="stylesheet" href="../1/exo1.css">
</head>

<body>
    <?php
        include '../4/_navbar.php';
        //include_once '../5/_alert.php';
    ?>
    <h1>Exercice 2 : Voiture</h1>
    <h2>Formulaire</h2>

    <p>A l'aide d'un formulaire HTML et de PHP, affichez les données qu'un concessionnaire aura rempli dans un formulaire via une requête POST SUR UNE AUTRE PAGE : Ce formulaire contiendra un champ pour : la marque, le modèle, la couleur, le kilometrage, l'année et le prix.</p>
    <small>Vous appliquerez les vérifications nécessaires pour éviter les messages d'erreur</small>

    <div>
        <form action="exo2_post.php" method="POST">
            <label for="marque">Marque *</label>
            <input type="text" name="marque" required>
            
            <label for="modele">Modèle *</label>
            <input type="text" name="modele" required>
            
            <label for="couleur">Couleur *</label>
            <input type="text" name="couleur" required>
            
            <label for="km">Kilometrage *</label>
            <input type="number" name="km" required>
            
            <label for="annee">Année *</label>
            <input type="number" name="annee" required>
            
            <label for="prix">Prix *</label>
            <input type="number" name="prix" required>

            <button type="submit">ENVOYER</button>
        </form>
    </div>
</body>
</html>

<?php 
    require 'exo2_post.php';
?>