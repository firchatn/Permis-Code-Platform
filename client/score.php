<?php
require 'connection_bd.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    
    $p=$_COOKIE['client'];
 

    $resultat =(mysqli_query($db, "SELECT * FROM client where email = '$p';"));
while ($ligne =  mysqli_fetch_array($resultat)) {
     $client = $ligne['id'];
}

    $level = $_COOKIE['level'];
    $score = $_POST['score'];


    $q =  "insert into score (client,level,point) values('$client', '$level', '$score' );";
    mysqli_query($db, $q);
    
   header("Location: lessons.php", true, 301);
}
?>
