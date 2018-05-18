<?php
require 'connection_bd.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nomPhoto=$_FILES['img']['name'];
    $file_tmp_name=$_FILES['img']['tmp_name'];

    $question = $_POST['question'];
    $level = $_POST['level'];
    $choix1 = $_POST['choix1'];
    $choix2 = $_POST['choix2'];
    $choix3 = $_POST['choix3'];
    $reponse = $_POST['reponse'];
    $cours = $_POST['cours'];


    $q =  "insert into question (question,level,choixun,choixdeux,choixtrois,img, reponse, cours) values('$question', '$level', '$choix1', '$choix2', '$choix3', 'images/$nomPhoto', '$reponse', '$cours');";
    mysqli_query($db, $q);
    move_uploaded_file($file_tmp_name, "images/$nomPhoto");
    header("Location: question.php", true, 301);
}
?>
