<?php
require "connection_bd.php";
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM levels WHERE id=$id;");
header("Location: level.php", 301);
