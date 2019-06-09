<?php
     $db = pg_pconnect("host=ec2-54-163-230-199.compute-1.amazonaws.com port=5432 dbname=d7bihr2q4jfbob user=dkqfstgvudohch password=8f311282575d69028cc57c8d3ec16dcb5f1c3af3ef91bded21fd0f7bc94f2061");
        if (!$db) {
            echo "An error occured in connecting to the database\n";
            exit;
        }     
?>

<!DOCTYPE html>
<html>

<head>
    <title>Grocery Sorcery</title>
</head>

<body>
    <h1>Grocery Sorcery</h1>
    <h3>The eezypeezylemonsqueezy way to track your groceries</h3>
    
    <form name="insert" method="POST" action="insertForm.php">
        <select name='status'>
            <option value='need' selected>Need</option>
            <option value='cart'>Cart</option>
            <option value='have'>Have</option>
        </select>
        <input type="text" value="Item Name" onfocus="">
        <input type="submit" value='Submit'>
    </form>
    <?php
        
        $result = pg_query($db, "SELECT * FROM public.lists");
    
        if (!result) {
            echo "An error occured in querying the database\n";
            exit;
        }   
    
        echo "<table>";
            echo "<tr>";
                echo "<td align='center' width='200'>Status</td>";
                echo "<td align='center' width='200'>Item</td>";
            echo "</tr>";
    
        while($row = pg_fetch_assoc($result)) {
                echo "<tr>";
                    echo "<td align='center' width='200'>" . $row['status'] . "</td>";
                    echo "<td align='center' width='200'>" . $row['item'] . "</td>";
                echo "</tr>";
        }
        echo "</table>";
    
    
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
    ?>
          
</body>
</html>
