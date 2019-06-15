<?PHP
    session_start();
    
    require("dbConnect.php");

    $db = get_db(); 


    $name = $_POST["name"];
    $stmt = $db->prepare('INSERT INTO users (name) VALUES (:name)');

    $stmt->bindValue(':name', $name);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["userid"] = $rows[0]['id'];

    header("Location: index.php");
    die();
?>