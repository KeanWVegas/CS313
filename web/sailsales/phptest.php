<?php
    $form_array = array("item", "productimg", "price", "quantity")
    $cookie_name ="cart";
    $cookie_value = "quantity"
    setcookie($cookie_name, $cookie_value, $form_array, time() + (86400 * 30), "/");
    
    error_reporting(E_ALL);
    ini_set("display_errors", 1);s
?>