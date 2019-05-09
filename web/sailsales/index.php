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
    <form action="" method="post">
        <input type=""                    name="test[]"value="Dreamyboat" > <br>
        <img src="../images/headshot.jpg" name="test[]" id="itemimg" > <br>
        <input type=""                    name="test[]" value="$3.50" ><br>
        Quantity:
        <input type="number"              name="test[]" min="1" max="99" maxlength="2" value="1"><br>
        <input type="submit" value="Add to Cart">
    </form>
    
<?php
    $cookie_name ="cart";
    $cookie_value = $_POST['test']
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    
?>

</body>

</html>
