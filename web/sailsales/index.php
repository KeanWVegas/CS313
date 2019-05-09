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
        Dreamyboat <br>
        <img src="../images/headshot.jpg" id="itemimg"> <br>
        Price: $3.50 <br>
        Quantity:
        <input type="number" name="sailboat01" min="1" max="99" maxlength="2" value="1"><br>
        <input type="submit">
    </form>
    
    <?php

    // Start the session
    session_start();

    if (isset($POST['Submit'])) {
    $_SESSION['sailboat01'] = $_POST['sailboat01'];    
    }
?>

</body></html>