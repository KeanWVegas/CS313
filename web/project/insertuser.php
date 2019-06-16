<?php
    
    require("dbConnect.php");

    $db = get_db();

    $name = $_POST['name'];
    
    $insertsql = "INSERT INTO users (name) VALUES (':name')";
    $stmt = $db->prepare($insertsql);

    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["userid"] = $rows[0]['id'];

    header("Location: index.php");
    die();
    }
?>