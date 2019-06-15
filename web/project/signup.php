<?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

    require ("dbConnect.php");
    $db = get_db();   

    session_start();


     echo "<form name='login' method='POST' action='insertuser.php'>";
     echo "<input name='name' type='text'>";
     echo "<input class='btn btn-default' type='submit'>";

?>