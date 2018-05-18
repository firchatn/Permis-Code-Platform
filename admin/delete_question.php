<?php
require "connection_bd.php";
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM question WHERE id=$id;");
header("Location: question.php", 301);
