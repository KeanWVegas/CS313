<?php

session_start();
if (isset($_POST['submit'])) { 
    $_SESSION['address'][] = $_POST['address'];
}
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
    <form action='confirmation.php' method='post'>
        Street Address:
        <input type="text" name="address" value="address" onfocus=""><br>
        City:
        <input type="text" name="address" value="address" onfocus=""><br>
        State:
        <input type="text" name="address" value="address" onfocus=""><br>
        Zip Code:
        <input type="text" name="address" value="address" onfocus=""><br>    
        
        <input type="button" onclick="window.location.href = 'index.php';" value="Return Home"><br>
    
        <button type="submit" name='submit' >Complete Checkout</button>
        
    </form>
    
</body>