<?php
require "connection_bd.php";
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM monitor WHERE id=$id;");
header("Location: monitor.php", 301);
