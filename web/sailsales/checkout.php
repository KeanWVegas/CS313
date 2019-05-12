<?php

session_start();

$_SESSION['address'] = $address = array (
    'street' => $_POST['street'], 
    'city'   => $_POST['city'], 
    'state'  => $_POST['state'], 
    'zip'    => $_POST['zip']
    );

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
        <input type="text" name="street" value="address" onfocus="this.value=''"><br>
        City:
        <input type="text" name="city" value="address" onfocus="this.value=''"><br>
        State:
        <input type="text" name="state" value="address" onfocus="this.value=''"><br>
        Zip Code:
        <input type="text" name="zip" value="address" onfocus="this.value=''"><br>    
        <input type="button" onclick="window.location.href = 'index.php';" value="Return Home"><br>
    
        <button type="submit" name='submit' >Complete Checkout</button>
        
    </form>
</body>