<?php

try {
$pdo = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '');
}

catch(PDOexception $e) {
print("error") . $e->getMessage() . "<br/>";
die();
}

?>