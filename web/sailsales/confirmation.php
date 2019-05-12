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
<p> I was unable to figure out what I was doing wrong when trying to print my sessioned address array. As you can see, the array is 4 fields big, as indicated by the amount of addresses being displayed. Here is a snippetmy code in case you can see what I'm doing wrong: foreach($_SESSION['address'] as $key => $print) {
                print "Address: ".$_SESSION['address']['street']. "<br>";
            }</p>
<body>
<?php
            foreach($_SESSION['address'] as $key => $print) {
                print_r ($_SESSION['address']['street']);
                print_r ($_SESSION['address']['city']);
            }
        ?>
</body>