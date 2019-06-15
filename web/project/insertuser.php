<?PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    session_start();
    
    require("dbConnect.php");

    $db = get_db();
//select userid from user table where id=:id
    $name = $_POST["name"];
    

    $check = $db->prepare("SELECT name FROM users WHERE (name=':name')");
    $check->bindValue(':name', $name);
    $check->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $checkresult = $row[0]['id'];
    $returncount = count($row);

    if ($returncount >= 1) {
        echo "This username is taken."
    }
    else {

    
    $stmt = $db->prepare('INSERT INTO users (name) VALUES (:name)');

    $stmt->bindValue(':name', $name);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["userid"] = $rows[0]['id'];

    header("Location: index.php");
    die();
    }
?>