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
<h1>Cart:</h1>

<?php
// Display cart items
//Need to set base total
$total = 0;
//Loop through items, display, create remove button (assign item key value)
foreach ( $_SESSION['cart'] as $ino ) {
    ?>
<tr>
    <td>
        Name: <?php echo $_SESSION['items'][$ino]['name']; ?><br>
    </td>
    <td>
        Price: <?php echo $_SESSION['items'][$ino]["price"]; ?><br>
    </td>
    <td>
        <form action='' method='post'>
        <button type='submit' name='remove' value='<?php echo $ino; ?>'>Remove</button><br><br>
        </form>
    </td>
</tr>

<?php
    //Calculate and display total
    $total += $items[$ino]['price'];
}
?>

Total: $<?php echo $total; ?><br><br>
    
<button type="submit" name='submit' onclick="window.location.href = '/checkout.php';">Complete Checkout</button>

</body>
