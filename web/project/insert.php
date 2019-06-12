<?php    
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);   
        
        session_start();

        require ("dbConnect.php");

        $db = get_db();
try{
        $status = htmlspecialchars($_POST['status']);
        $item = htmlspecialchars($_POST['item']); 
        $id = $_SESSION['userid'];       
        
        $insertquery = "INSERT INTO lists (status, item, userid) VALUES (:status, :item, :id)";

        $stmt = $db->prepare($insertquery);

        $stmt->bindValue(':status', $status);
        $stmt->bindValue(':item', $item);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        
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
