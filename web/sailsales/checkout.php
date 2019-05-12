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
    <form action='' method='post'>
        Street Address:
        <input type="text" name="street">
        City:
        <input type="text" name="city">
        State:
        <input type="text" name="state">
        Zip Code:
        <input type="text" name="zip">      
        <button type="submit" name='submit' onclick="window.location.href = '/confirmation.php';">Complete Checkout</button>
        
        <a href="index.php">Return Home</a>
    </form>
    
</body>