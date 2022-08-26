<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '');
    }
    
    catch(PDOexception $e) {
    print("error") . $e->getMessage() . "<br/>";
    die();
    }

$id = $_GET['id'];

$reqProjets = $pdo->prepare('SELECT * FROM projets WHERE id_categories = '.$id.'');

$reqProjets->execute();

$reqA = $pdo->prepare('SELECT * FROM projets');

$reqA->execute();

if($id == 5) {
    while($d = $reqA->fetch()) {
        echo '<div class="cardprojets" id='.$d['id'].'>';
        echo '<div class="cardimg">';
        echo '<img src="public/'.$d['img'].'" alt="image projet" />';
        echo '<div class="cardtitle">';
        echo '<div class="cardtitlecontent">';
        echo '<h2>'.$d['title'].'</h2>';
        echo '<span>'.$d['date'].'</span>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

else {

if ($reqProjets->rowCount() == 0) {
    echo '<div class="cardprojetsnope">';
    echo '<h2 class="titlenope">Hello !</h2>';
    echo "<p class='nop'>Il n'y a pas encore de projet dans cette catégorie.</p>";
    echo '<div class="cardimgnope">';
    echo '<img src="public/img/turtle.png" alt="image projet" />';
    echo '</div>';
    echo '</div>';
    }
    else {
while($d = $reqProjets->fetch()) {
    echo '<div class="cardprojets" id='.$d['id'].'>';
    echo '<div class="cardimg">';
    echo '<img src="public/'.$d['img'].'" alt="image projet" />';
    echo '<div class="cardtitle">';
    echo '<div class="cardtitlecontent">';
    echo '<h2>'.$d['title'].'</h2>';
    echo '<span>'.$d['date'].'</span>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
}

}

?>