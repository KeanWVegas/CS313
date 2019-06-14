<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$item = htmlspecialchars($_GET['itemname']);

$status = htmlspecialchars($_GET['status']);



require('dbConnect.php');

$db = get_db();


if ($status = 'Remove') {
$sql = 'DELETE FROM lists WHERE item = :item';

$stmt = $db->prepare($sql);

$stmt->bindValue(':status', $status, PDO::PARAM_STR);
$stmt->bindValue(':itemname', $item, PDO::PARAM_INT);

$stmt->execute();
}


else {
$sql = 'UPDATE lists '

        . 'SET status = :status '

        . 'WHERE item = :itemname';



$stmt = $db->prepare($sql);



$stmt->bindValue(':status', $status, PDO::PARAM_STR);

$stmt->bindValue(':itemname', $item, PDO::PARAM_INT);

$stmt->execute();
}

echo $stmt->rowCount();



$new_page = "index.php";

header("Location: $new_page");

die();

?>