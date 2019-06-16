<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    require("dbConnect.php");

    $db = get_db();

    $name = $_POST['name'];
    
    $insertsql = "INSERT INTO users (name) VALUES (':name')";
    $stmt = $db->prepare($insertsql);

    $stmt->bindValue(':name', $name);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header("Location: index.php");
    die();
    }
?>