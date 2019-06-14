<?php

$id = htmlspecialchars($_GET['id']);

$status = htmlspecialchars($_GET['status']);



require('dbConnect.php');

$db = get_db();



$sql = 'UPDATE items '

        . 'SET stat = :status '

        . 'WHERE id = :id';



$stmt = $db->prepare($sql);



$stmt->bindValue(':status', $status, PDO::PARAM_STR);

$stmt->bindValue(':id', $id, PDO::PARAM_INT);

$stmt->execute();

 

echo $stmt->rowCount();



$new_page = "items.php";

header("Location: $new_page");

die();

?>