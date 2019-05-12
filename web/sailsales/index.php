<?php
session_start ();

$_SESSION['items'] = $items = array (
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
    //add items in array to session cart
    if (!in_array($_POST ["add"], $_SESSION['cart'])) {
        $_SESSION ['cart'][] = $_POST["add"];
    }
}

// Remove Item
if (isset ( $_POST ['remove'] ))
    //If remove is posted, search for item key and remove it
    if (false !== $key = array_search($_POST['remove'], $_SESSION['cart'])) {
        unset($_SESSION['cart'][$key]);
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
    <form action='' method='post'>

        <?php
        foreach ( $items as $additem => $item ) {
            $title = $item ['name'];
            $price = $item ['price'];

            echo " <p>$title</p>";
            echo "<p>\$$price</p>";
            echo "<button type='submit' name='add' value='$additem'>Add to Cart</button> ";
        }
        ?>
    </form>

</body>
