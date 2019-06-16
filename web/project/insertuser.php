<?php

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