<?php
require "connection_bd.php";
$id = $_GET['id'];



$nom = $_POST['nom'];


$q =  "UPDATE `levels` SET `nom`='$nom' WHERE `id`='$id'";
mysqli_query($db, $q);

header("Location: level.php", true, 301);



