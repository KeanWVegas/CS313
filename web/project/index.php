<!DOCTYPE html>
<html>

<head>
    <title>Grocery Sorcery</title>
</head>

<body>
    <h1>Grocery Sorcery</h1>
    <h3>The eezypeezylemonsqueezy way to track your groceries</h3>

    <?php
        $db = pg_connect("host=ec2-54-163-230-199.compute-1.amazonaws.com port=5432 dbname=d7bihr2q4jfbob user=dkqfstgvudohch password=8f311282575d69028cc57c8d3ec16dcb5f1c3af3ef91bded21fd0f7bc94f2061");

        $result = pg_query($db, "SELECT * FROM public.users");
        echo "<table>";
    ?>
</body>

</html>
