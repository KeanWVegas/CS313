<?php
           

    require ("dbConnect.php");
    $db = get_db();   

    session_start();
?>

<h1>Grocery Sorcery</h1>
    <h3>The eezypeezy grocery list</h3>

<form name='login' method='POST' action='insertuser.php'>
    <h5> Enter a username: </h5>
     <input name='name' type='text'>
     <input class='btn btn-default' type='submit'>
</form>