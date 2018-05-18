<?php
require 'connection_bd.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nomPhoto=$_FILES['img']['name'];
    $file_tmp_name=$_FILES['img']['tmp_name'];

    $nom = $_POST['nom'];


    $q =  "insert into levels (nom,img) values('$nom', 'images/$nomPhoto');";
    mysqli_query($db, $q);
    move_uploaded_file($file_tmp_name, "images/$nomPhoto");
    header("Location: level.php", true, 301);
}
?>
