
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "permis");
//$p=$_COOKIE['level'];
$p = $_GET['id'];
$result = $conn->query("SELECT id, question, reponse,choixun, choixdeux, choixtrois, img, cours FROM question where level = '$p'");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["id"] . '",';
    $outp .= '"question":"'   . $rs["question"]        . '",';
    $outp .= '"reponse":"'. $rs["reponse"]     . '",';
    $outp .= '"choixun":"'. $rs["choixun"]     . '",';
    $outp .= '"choixdeux":"'. $rs["choixdeux"]     . '",';
    $outp .= '"choixtrois":"'. $rs["choixtrois"]     . '",';
    $outp .= '"cours":"'. $rs["cours"]     . '",';
    $outp .= '"img":"'. $rs["img"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
