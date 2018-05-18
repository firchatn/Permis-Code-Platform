<?php
require 'connection_bd.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $u=$_POST['email'];
    $p=$_POST['password'];
    $resultat=mysqli_query($db, "select * from admin where email = '$u' and password = '$p';");
    if ($resultat && $resultat->num_rows > 0) {
        header("Location: home.html", true, 301);
    } else {
        header("Location: errorlogin.php", true, 301);
    }
}
?>