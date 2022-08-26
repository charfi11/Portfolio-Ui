<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '');
    }
    
    catch(PDOexception $e) {
    print("error") . $e->getMessage() . "<br/>";
    die();
    }

$id = $_GET['id'];

$reqProjets = $pdo->prepare('SELECT * FROM projets WHERE id = '.$id.'');

$reqProjets->execute();

while($d = $reqProjets->fetch()) {
    echo '<div class="modal">';

    echo '<div class="close"><span id="cross" title="fermer">x</span></div>';

    echo '<div class="modalcontent">';

    echo '<div class="modaltitle">';
    echo '<h2>'.$d['title'].'</h2>';
    echo '</div>';

    echo '<div class="modalbody">';

    echo '<div class="modalimg">';
    echo '<img src="public/'.$d['img'].'" alt="image projet" />';
    echo '</div>';

    echo '<div class="modalmiddle">';
    echo '<div class="modaldesc">';
    echo '<small>'.$d['date'].'</small>';
    echo '<p>'.utf8_encode($d['description']).'</p>';
    echo '</div>';

    echo '<div class="colors">';

    $a = json_decode($d['colors']);

    foreach ($a as $c) {
    echo '<div class="intcolors">';
    echo '<span style="background-color:'.$c.'; width:8em; height:8em"></span>';
    echo '<span style="color:'.$c.'">'.$c.'</span>';
    echo '</div>';
    }

    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

?>