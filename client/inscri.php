<?php
require 'connection_bd.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nomPhoto=$_FILES['img']['name'];
    $file_tmp_name=$_FILES['img']['tmp_name'];

    $nom = $_POST['nom'];
    $cin = $_POST['cin'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date = date('Y-m-d');

    $q =  "insert into client (nom,prenom,cin,email,password,datei,img) values('$nom', '$prenom', '$cin', '$email', '$password',  '$date', 'images/$nomPhoto');";
    mysqli_query($db, $q);
    move_uploaded_file($file_tmp_name, "images/$nomPhoto");
    header("Location: index.php", true, 301);
}
?>
