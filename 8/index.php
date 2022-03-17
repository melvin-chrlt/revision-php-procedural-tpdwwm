<?php
    //require '../8/_viewLines.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
    <link rel="stylesheet" href="../1/exo1.css">
</head>

<body>
    <?php
        include '../4/_navbar.php';
        require '../6/includes/db.php';
        //include_once '../5/_alert.php';
        require '../6/_sqlFetchTransports.php';
    ?>
    <h1>Exercice 8 : Affichage des données de la BDD</h1>
    <p>A partir de la connexion réalisée à l'exercice 6 et des apprentissages des exercices précédents, affichez l'ensemble des lignes de transports disponibles dans votre base de données dans un tableau HTML. A chaque ligne de transport, il devra y avoir deux actions possibles dans le tableau, éditer et supprimer (Bien que non fonctionnelles).</p>
    <small>Il est peut-être temps de définir un mode de récupération par défaut des données par PDO afin d'éviter d'avoir un tableau doublé.</small>
    <p><b>Bonus : ajoutez un champ de recherche pour filtrer les résultats par leur nom (A l'aide de l'instruction LIKE %recherche% dans une requête SQL)</b></p>

    <div>
        <h3>Ligne(s) disponible :</h3>
    </div>
<?php if (!empty($transports)) {
    foreach ($transports as $trans) { ?>
    <div>
        <p>Nom de la ligne : <?php echo $trans['nom_de_ligne']; ?></p>
        <p>Terminus A : <?php echo $trans['terminus_a']; ?></p>
        <p>Terminus B : <?php echo $trans['terminus_b']; ?></p>
    </div>
    <?php }
    } else { ?>
    <div>
        <p>Il n'y a pas de ligne</p>
    </div>
<?php } ?>
</body>

</html>