<?php
require "connection_bd.php";
$id = $_GET['id'];



$nom = $_POST['nom'];
$cin = $_POST['cin'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];

$q =  "UPDATE `client` SET `nom`='$nom',`prenom`='$prenom',`cin`='$cin',`email`='$email',`password`='$password' WHERE `id`='$id'";
mysqli_query($db, $q);

header("Location: client.php", true, 301);



