<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
    <link rel="stylesheet" href="exo1.css">
</head>

<body>
    <?php
        include '../4/_navbar.php';
        //include_once '../5/_alert.php';
    ?>
    <h1>Exercice 1 : Identité</h1>
    <p>A l'aide d'un formulaire HTML et de PHP, affichez les données qu'un utilisateur aura rempli dans un formulaire via une requête POST SUR LA MEME PAGE</p>
    <small>Ne pas oublier de préparer le cas où les données sont non renseignées et/ou n'ont pas encore pu être remplies</small>

    <div>
        <form action="index.php" method="POST">
            <label for="nom">Nom *</label>
            <input type="text" name="nom" required>
            
            <label for="prenom">Prénom *</label>
            <input type="text" name="prenom" required>
            
            <select name="genre" required>
                <option value="">--Choisissez votre genre--</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="Autre">Autre</option>
            </select>
            
            <label for="adresse">Adresse *</label>
            <input type="text" name="adresse" required>
            
            <label for="ville">Ville *</label>
            <input type="text" name="ville" required>
            
            <label for="code_postal">Code Postal *</label>
            <input type="text" name="code_postal" required>
    
            <button type="submit">ENVOYER</button>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['genre']) || isset($_POST['adresse']) || isset($_POST['ville']) || isset($_POST['code_postal'])){
        echo "Nom: ". strtoupper($_POST['nom']). "<br>";
        echo "Prénom: ". $_POST['prenom']. "<br>";
        echo "Genre: ". $_POST['genre']. "<br>";
        echo "Adresse: ". $_POST['adresse']. "<br>";
        echo "Ville: ". $_POST['ville']. "<br>";
        echo "Code Postal: ". $_POST['code_postal'];
    }
?>