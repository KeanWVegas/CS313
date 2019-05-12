<?php
session_start ();

$items = array (
    '001' => array (
        'name' => 'Yacht',
        'price' => '3.50'
    ),
    '002' => array (
        'name' => 'Fishing Boat',
        'price' => '2.50'
    ),
    '003' => array (
        'name' => 'Sail Boat',
        'price' => '1.50'
    )
);

// Add Item
if (isset ( $_POST ["add"] )) {
    // Check the item is not already in the cart
    if (!in_array($_POST ["add"], $_SESSION['cart'])) {
        // Add new item to cart
        $_SESSION ['cart'][] = $_POST["add"];
    }
}

// Remove Item
else if (isset ( $_POST ['remove'] )) { // a remove button has been clicked
    // Remove the item from the cart
    if (false !== $key = array_search($_POST['remove'], $_SESSION['cart'])) {
        unset($_SESSION['cart'][$key]);
    }
}
?>

<head>
    <title>Sail Sales Home</title>
</head>
<header>
    <h1>Sails for Sale</h1>
    <h2>Sell your sails at sale prices!</h2>
    <a href="cart.php">Cart</a>

</header>

<body>
    <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>
        <?php
        foreach ( $items as $ino => $item ) {
            $title = $item ['name'];
            $price = $item ['price'];

            echo " <p>$title</p>";
            echo "<p>\$$price</p>";
            echo "<button type='submit' name='add' value='$ino'>Add to Cart</button> ";
        }
        ?>

    </form>

    
    <h1>Cart:</h1>
<?php
// Set a default total
$total = 0;
foreach ( $_SESSION['cart'] as $ino ) {
    ?>
<tr>
    <td>
        Name: <?php echo $items[$ino]['name']; ?><br>
    </td>
    <td>
        Price: <?php echo $items[$ino]["price"]; ?><br>
    </td>
    <td>
        <button type='submit' name='remove' value='<?php echo $ino; ?>'>Remove</button><br><br>
    </td>
</tr>
<?php
    $total += $items[$ino]['price'];
}
?>

Total: $<?php echo $total; ?>

</body>
