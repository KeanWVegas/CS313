<?php
    require ("dbConnect.php");
    $db = get_db();   

    session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Grocery Sorcery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body style="max-width:960px; margin:auto;">
 

  

    <h1>Grocery Sorcery</h1>
    <h3>The eezypeezy grocery list</h3>
    

    <?php
        
        $id = $_SESSION['userid'];
        
        
    
        if (!$id) {
                    
            echo "Please sign in to continue";
            echo "   <div class='container' display>
       <!-- Trigger the modal with a button -->
       <button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Sign In</button>

       <!-- Modal -->
       <div class='modal fade' id='myModal' role='dialog'>
           <div class='modal-dialog'>

               <!-- Modal content-->
               <div class='modal-content'>
                   <div class='modal-header'>
                       <button type='button' class='close' data-dismiss='modal'>&times;</button>
                       <h4 class='Modal Header'>Sign In</h4>
                   </div>
                   <div class='modal-body'>
                   
                       <form name='login' method='POST' action='login.php'>
                            <h5> Username: </h5>
                            <input name='name' type='text'>
                            <input class='btn btn-default' type='submit'>
                        </form>
                   </div>
                   <div class='modal-footer'>
                       <p> Don't have an account? </p>
                       <button type='button' class='btn btn-default' onclick=window.location.href='signup.php'>Sign Up</button>
                   </div>
               </div>
           </div>
       </div>";
            die();
        }
        
        echo "<form name='insert' method='POST' action='insert.php'>
        <select name='status' class='btn btn-default'>
            <option value='Need' selected>Need</option>
            <option value='Cart'>Cart</option>
            <option value='Have'>Have</option>
        </select>
        <input type='text' name='item' class='btn btn-default' value='Item Name' onfocus=this.value=''>
        <input class='btn btn-default' type='submit' value='Submit'>
        </form>";
    
        
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
