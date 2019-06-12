<?php    
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);   
        
        require ("dbConnect.php");

        $db = get_db();

        $status = htmlspecialchars($_POST['status']);
        $item = htmlspecialchars($_POST['item']);        
        
        $insertquery = "INSERT INTO lists (status, item, userid) VALUES (:status, :item, 3)";
try{
        $stmt = $db->prepare($insertquery);

        $stmt->bindValue(':status', $status);
        $stmt->bindValue(':item', $item);
        $stmt->execute();}
        
        header("Location: index.php");
        die();

catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

    ?>
