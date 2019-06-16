<?php
        
    require ("dbConnect.php");
    $db = get_db();   

    session_start();
?>
<head>
    <title> Grocery Sorcery Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
</head>
<body style='max-width:960px; margin:auto;'>
<h1>Grocery Sorcery</h1>
    <h3>The eezypeezy grocery list</h3>

<form name='createuser' method='POST' action='insertuser.php'>
    <h4> Enter a username: </h4>
     <input class='btn btn-default' name='name' type='text'>
     <input class='btn btn-default' type='submit'>
</form>
</body>