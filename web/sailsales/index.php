<!DOCTYPE html>
<html>

<head>
    <title>Sail Sales Home</title>
</head>
<header>
    <h1>Sails for Sale</h1>
    <h2>Sell your sails at sale prices!</h2>

</header>

<body>
    <form action="/phptest.php" method="post">
        <input type="" value="Dreamyboat" name="item"> <br>
        <img src="../images/headshot.jpg" id="itemimg" name="productimg"> <br>
        <input type="" value="$3.50" name="price"><br>
        Quantity:
        <input type="number" name="quantity" min="1" max="99" maxlength="2" value="1"><br>
        <input type="submit" value="Add to Cart">
    </form>


</body>

</html>
