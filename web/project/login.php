<?PHP
try{
    session_start();
    $name = $_POST["username"];
    $db = get_db();
//select userid from user table where id=:id 
    
    $stmt = $db->prepare('SELECT id FROM users WHERE name=:name');

    $stmt->bindValue(':name, $name');
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["userid"] = $rows[0]['id'];}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}
?>
<!DOCTYPE html>
<html>
    <form name='login' method="POST" action="">
        <input name="username" type="text">
        <input type='submit'>
    </form>
</html>