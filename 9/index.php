<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9</title>
    <link rel="stylesheet" href="../1/exo1.css">
</head>

<body>
    <?php
        include '../4/_navbar.php';
        //include_once '../5/_alert.php';
        include '../6/_sqlFetchTransports.php';
        include '../8/_sqlFetchLigne.php';
    ?>
    <h1>Exercice 9 : Edition simple de la BDD</h1>
    <p>A partir de la connexion réalisée à l'exercice 6 et des apprentissages des exercices précédents, utilisez un formulaire pour éditer les lignes de transport dans la base de données.</p>
    <small>Utilisez un système de bloc try/catch afin de réaliser vos opérations SQL.Sécurisez le tout avec des requêtes préparées. N'oubliez pas l'instruction WHERE sous peine de tout modifier</small>
    <p><b>Bonus : Ajoutez des messages d'erreur sur la page pour renforcer l'expérience utilisateur</b></p>

    <div>
        <form action="editLines.php" method="POST">
            <h3>Modifier une ligne</h3>
            <label for="nom_de_ligne">Nom de la ligne *</label>
            <input type="text" name="nom_de_ligne" value="<?php echo $transport['nom_de_ligne']; ?>" required>
            
            <label for="terminus_a">Terminus A *</label>
            <input type="text" name="terminus_a" value="<?php echo $transport['terminus_a']; ?>" required>
            
            <label for="terminus_b">Terminus B *</label>
            <input type="text" name="terminus_b" value="<?php echo $transport['terminus_b']; ?>" required>

            <input type="hidden" name="id" value="<?php echo $transport['id']; ?>">
            <button type="submit">ENVOYER</button>
        </form>
    </div>
</body>

</html>