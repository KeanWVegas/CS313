<?php

session_start();

// Remove Item
if (isset ( $_POST ['remove'] ))
    //If remove is posted, search for item key and remove it
    if (false !== $key = array_search($_POST['remove'], $_SESSION['cart'])) {
        unset($_SESSION['cart'][$key]);
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
<h1>Cart:</h1>

<?php
// Display cart items
//Need to set base total
$total = 0;
//Loop through items, display, create remove button (assign item key value)
foreach ( $_SESSION['cart'] as $additem ) {
    ?>
<tr>
    <td>
        Name: <?php echo $_SESSION['items'][$additem]['name']; ?><br>
    </td>
    <td>
        Price: <?php echo $_SESSION['items'][$additem]["price"]; ?><br>
    </td>
    <td>
        <form action='' method='post'>
        <button type='submit' name='remove' value='<?php echo $additem; ?>'>Remove</button><br><br>
        </form>
    </td>
</tr>

<?php
    //Calculate and display total
    $total += $items[$additem]['price'];
}
?>

Total: $<?php echo $total; ?><br><br>
    
<button onclick="window.location.href = 'checkout.php';">Complete Checkout</button>

</body>
