<?php

include('./connexion/pdo.php');

$reqAll = $pdo->prepare('SELECT * FROM projets');

$reqAll->execute();


$reqCategories = $pdo->prepare('SELECT * FROM categories');

$reqCategories->execute();


$req = $pdo->prepare('SELECT * FROM projets INNER JOIN categories ON projets.id_categories = categories.id');

$req->execute();

?>