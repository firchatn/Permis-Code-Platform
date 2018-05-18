<?php
require "connection_bd.php";
$id = $_GET['id'];



$question = $_POST['question'];
$level = $_POST['level'];
$choixun = $_POST['choix1'];
$choixdeux = $_POST['choix2'];
$choixtrois = $_POST['choix3'];
$reponse = $_POST['reponse'];

$q =  "UPDATE `question` SET `question`='$question',`level`='$level',`choixun`='$choixun',`choixdeux`='$choixdeux',`choixtrois`='$choixtrois',`reponse`='$reponse' WHERE `id`='$id'";
mysqli_query($db, $q);

header("Location: question.php", true, 301);



