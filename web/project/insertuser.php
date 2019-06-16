<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    session_start();

    require("dbConnect.php");

    $db = get_db();

    $name = $_POST["name"];
    $stmt = $db->prepare("INSERT INTO users (name) VALUES (':name')");

    $stmt->bindValue(':name', $name);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
     $_SESSION["userid"] = $rows[0]['id'];

    header("Location: index.php");
    die();
?>