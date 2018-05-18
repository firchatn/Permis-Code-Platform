<?php

$db = new mysqli("localhost", "root", "", "permis");
if ($db->connect_errno) {
    die("Erreur connection Base de données");
}
