<?php

$item = htmlspecialchars($_GET['itemname']);

$status = htmlspecialchars($_GET['status']);



require('dbConnect.php');

$db = get_db();



$sql = 'UPDATE items '

        . 'SET status = :status '

        . 'WHERE item = :itemname';



$stmt = $db->prepare($sql);



$stmt->bindValue(':status', $status, PDO::PARAM_STR);

$stmt->bindValue(':itemname', $item, PDO::PARAM_INT);

$stmt->execute();

 

echo $stmt->rowCount();



$new_page = "index.php";

header("Location: $new_page");

die();

?>