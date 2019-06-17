<?php            
        session_start();

        require ("dbConnect.php");

        $db = get_db();
 
        $name = htmlspecialchars($_POST['name']);       
        
        echo $name;

        $insertquery = "INSERT INTO users (name) VALUES (:name)";

        $stmt = $db->prepare($insertquery);

        $stmt->bindValue(':name', $name);
        $stmt->execute();
        
        header("Location: index.php");
        die();

    ?>
