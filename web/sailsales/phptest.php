<?php
    $cookie_name ="cart";
    $cookie_value = $_POST['test']
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    
?>