<?php    
        $db = pg_pconnect("host=ec2-54-163-230-199.compute-1.amazonaws.com port=5432 dbname=d7bihr2q4jfbob user=dkqfstgvudohch password=8f311282575d69028cc57c8d3ec16dcb5f1c3af3ef91bded21fd0f7bc94f2061");
        if (!$db) {
            echo "An error occured in connecting to the database\n";
            exit;
        } 
        
        $status = htmlspecialchars($_GET['status']);
        $item = htmlspecialchars($_GET['item']);
        
        $insertquery = "INSERT INTO lists (status, item, userid) VALUES (:status, :item)";

        $stmt = $db->prepare($insertquery);
        
        $stmt->bindValue(':status', $status, PDO::PARAM_STR);
        $stmt->bindValue(':item', $item, PDO::PARAM_STR);
        $stmt->execute();

        $new_page = "items.php";
header("Location: $new_page");
die();
    ?>