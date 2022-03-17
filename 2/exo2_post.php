<?php
    if(isset($_POST['marque']) || isset($_POST['modele']) || isset($_POST['couleur']) || isset($_POST['km']) || isset($_POST['annee']) || isset($_POST['prix'])){
        echo "Marque: ". $_POST['marque']. "<br>";
        echo "Modèle: ". $_POST['modele']. "<br>";
        echo "Couleur: ". $_POST['couleur']. "<br>";
        echo "Kilometrage: ". $_POST['km']. "km" ."<br>";
        echo "Année: ". $_POST['annee']. "<br>";
        echo "Prix: ". $_POST['prix']. "€";
    }
?>