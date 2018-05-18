<?php

setcookie("client", "", time() - 3600);
header("Location: index.php", true, 301);
?>