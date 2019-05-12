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
   echo '<pre>' , var_dump($_SESSION['address'][]) , '</pre>';
    ?>
</body>