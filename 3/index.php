<?php
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
    <link rel="stylesheet" href="../1/exo1.css">  
</head>

<body>
    <?php
        include '../4/_navbar.php';
        //include_once '../5/_alert.php';
    ?>
    <h1>Exercice 3 : Inscription</h1>
    <p>A l'aide d'un formulaire HTML et de PHP, simulez un formulaire d'inscription (avec hashage du mot de passe)
        via une requête POST sur une page d'affichage et une page de processing. Si la connexion est effective alors on
        affiche un message de bienvenue à l'utilisateur contenant son username.</p>
    <small>Ne pas oublier de préparer le cas où les données sont non renseignées et/ou n'ont pas encore pu être
        remplies. Ne pas oublier d'initialiser la session. (Ici on part du principe qu'on est connectés dès que l'on
        s'inscrit.)</small>
    <small>Afficher le formulaire s'il n'y a pas d'utilisateur connecté.</small>
    <small>Ne pas afficher le formulaire s'il est connecté</small>
    <p><b>BONUS : vérifier que le username fait plus de 3 caractères et que le mot de passe en fait au moins 6</b></p>
    <p><b>BONUS : inclure un lien qui permet de se déconnecter</b></p>

    <div>
        <form action="exo3_post.php" method="POST">
            <label for="email">Email *</label>
            <input type="text" name="email" required>

            <label for="username">Username *</label>
            <input type="text" name="username" required>
            
            <label for="password">Password *</label>
            <input type="password" name="password" required>
            
            <label for="password2">Confirm password *</label>
            <input type="password" name="password2" required>
            
            <button type="submit">ENVOYER</button>
        </form>
    </div>
</body>

</html>