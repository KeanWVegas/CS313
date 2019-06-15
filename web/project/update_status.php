<?php

$item = htmlspecialchars($_GET['itemname']);

$status = htmlspecialchars($_GET['status']);



require('dbConnect.php');

$db = get_db();


if ($status != 'Remove') {
    
$sql = 'UPDATE lists '

        . 'SET status = :status '

        . 'WHERE item = :itemname';



$stmt = $db->prepare($sql);



$stmt->bindValue(':status', $status, PDO::PARAM_STR);

$stmt->bindValue(':itemname', $item, PDO::PARAM_INT);

$stmt->execute();
}


else {
$sql = 'DELETE FROM lists WHERE item = :itemname';

$stmt = $db->prepare($sql);

$stmt->bindValue(':itemname', $item, PDO::PARAM_INT);

$stmt->execute();
}

echo $stmt->rowCount();



$new_page = "index.php";

header("Location: $new_page");

die();

?>