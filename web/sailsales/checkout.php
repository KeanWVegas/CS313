<?php

session_start();

?>
<head>
    <title>Sail Sales Cart</title>
</head>
<header>
    <h1>Sails for Sale</h1>
    <h2>Sell your sails at sale prices!</h2>

</header>

<body>
    <h2> Please enter your shipping address</h2>
    <form action='/confirmation.php' method='post'>
        Street Address:
        <input type="text" name="street"><br>
        City:
        <input type="text" name="city"><br>
        State:
        <input type="text" name="state"><br>
        Zip Code:
        <input type="text" name="zip"> <br>    
        
        <input type="button" onclick="window.location.href = '/index.php';" value="return">Return Home</a><br>
    
        <button type="submit" name='submit' >Complete Checkout</button>
        
    </form>
    
</body>