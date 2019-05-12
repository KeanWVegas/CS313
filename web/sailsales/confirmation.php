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
<?php
    foreach($_SESSION['address'] as $key => $print) {
                print_r ($_SESSION['address']['street']);
                print_r ($_SESSION['address']['city']);
            }
    
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
</tr>

<?php
    //Calculate and display total
    $total += $items[$additem]['price'];
}
?>

Total: $<?php echo $total; ?><br><br>
</body>