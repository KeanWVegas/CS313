<?PHP
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);   

    session_start();
    $name = $_POST["username"];
    
    require("dbConnect.php");

    $db = get_db();
//select userid from user table where id=:id 
    
    $stmt = $db->prepare('SELECT id FROM users WHERE name=:name');

    $stmt->bindValue(':name, $name');
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["userid"] = $rows[0]['id'];

?>
<!DOCTYPE html>
<html>
    <form name='login' method="POST" action="">
        <input name="username" type="text">
        <input type='submit'>
    </form>
</html>