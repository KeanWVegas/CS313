<?php    
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $db = pg_pconnect("host=ec2-54-163-230-199.compute-1.amazonaws.com port=5432 dbname=d7bihr2q4jfbob user=dkqfstgvudohch password=8f311282575d69028cc57c8d3ec16dcb5f1c3af3ef91bded21fd0f7bc94f2061");
        if (!$db) {
            echo "An error occured in connecting to the database\n";
            exit;
        } 
        
        $status = htmlspecialchars($_POST['status']);
        $item = htmlspecialchars($_POST['item']);        

        $insertquery = "INSERT INTO lists (status, item, userid) VALUES (:status, :item, 3)";
    
        $stmt = $db->prepare($insertquery);

        $stmt->bindValue(':status', $status, PDO::PARAM_STR);
        $stmt->bindValue(':item', $item, PDO::PARAM_STR);
        $stmt->execute();
        
        $new_page = "index.php";
        header("Location: $new_page");
        die();*/
    ?>