<?php
ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

    require ("dbConnect.php");
    $db = get_db();   

    session_start();

    echo $_SESSION['userid'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Grocery Sorcery</title>
</head>

<body>
    <h1>Grocery Sorcery</h1>
    <h3>The eezypeezylemonsqueezy way to track your groceries</h3>
    
    <form name="insert" method="POST" action="insert.php">
        <select name='status'>
            <option value='need' selected>Need</option>
            <option value='cart'>Cart</option>
            <option value='have'>Have</option>
        </select>
        <input type="text" name='item' value="Item Name" onfocus="this.value=''">
        <input type="submit" value='Submit'>
    </form>

          
</body>
</html>
