<?php

session_start();

?>
<!DOCTYPE html>
<html>
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
// Set a default total
$total = 0;
foreach ( $_SESSION['cart'] as $ino ) {
    ?>
<tr>
    <td>
        Name: <?php echo $items[$ino]['name']; ?>
    </td>
    <td>
        Price: <?php echo $items[$ino]["price"]; ?>
    </td>
    <td>
        <button type='submit' name='delete' value='<?php echo $ino; ?>'>Remove</button>
    </td>
</tr>
<?php
    $total += $items[$ino]['price'];
} // end foreach
?>

Total: $<?php echo $total; ?>

</body></html>