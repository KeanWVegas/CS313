<?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

    require ("dbConnect.php");
    $db = get_db();   

    session_start();

    echo $_SESSION['userid'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Grocery Sorcery</title>
</head>

<body>
    <h1>Grocery Sorcery</h1>
    <h3>The eezypeezylemonsqueezy way to track your groceries</h3>
    
    <form name="insert" method="POST" action="insert.php">
        <select name='status'>
            <option value='need' selected>Need</option>
            <option value='cart'>Cart</option>
            <option value='have'>Have</option>
        </select>
        <input type="text" name='item' value="Item Name" onfocus="this.value=''">
        <input type="submit" value='Submit'>
    </form>
    <?php
        
        $id = $_SESSION['userid'];
        
        $result = $db->prepare("SELECT * FROM public.lists WHERE userid = :id");
    
        $result->bindValue(':id', $id);
        $result->execute();
        
        $items = $result->fetchAll(PDO::FETCH_ASSOC);
    
        echo "<table>";
            echo "<tr>";
                echo "<td align='center' width='200'>Status</td>";
                echo "<td align='center' width='200'>Item</td>";
            echo "</tr>";
    
                
                foreach ($items as $item){
                    
                   $itemname = $item['item'];

                   $status = $item['status'];

                    
                echo "<tr>";
                    echo "<td align='center' width='200'>" . $item['status'] . "</td>";
                    echo "<td align='center' width='200'>" . $item['item'] . "</td>";
                    echo "<td align='center' width='200'>";
                        echo "<select onchange='location = this.value;'>";
                            echo "<option value=' '>Status</option>";
                            echo "<option value='update_status.php?status=Need&itemname=$itemname'>Need</option>";
                            echo "<option value='update_status.php?status=Cart&itemname=$itemname'>Cart</option>";
                            echo "<option value='update_status.php?status=Have&itemname=$itemname'>Have</option>";
                            echo "<option value='update_status.php?status=Remove&itemname=$itemname'>Remove</option>";
                        echo "</select>";
                    echo "</td>";
                echo "</tr>";
        }
        echo "</table>";
    
    
            
    ?>
          
</body>
</html>
