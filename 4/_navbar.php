<?php 
    require '../6/includes/db.php';
    if(isset($_GET['message'])){
        $message = $_GET['message'];
        echo $message;
    } 
?>
<div id="navbar">
    <ul>
        <li><a href="../1/index.php">Exercice 1</a></li>
        <li><a href="../2/index.php">Exercice 2</a></li>
        <li><a href="../3/index.php">Exercice 3</a></li>
        <li><a href="../4/index.php">Exercice 4</a></li>
        <li><a href="../5/index.php">Exercice 5</a></li>
        <li><a href="../6/index.php">Exercice 6</a></li>
        <li><a href="../7/index.php">Exercice 7</a></li>
        <li><a href="../8/index.php">Exercice 8</a></li>
        <li><a href="../9/index.php">Exercice 9</a></li>
        <li><a href="../10/index.php">Exercice 10</a></li>
        <li><a href="../11/index.php">Exercice 11</a></li>
    </ul>
</div>