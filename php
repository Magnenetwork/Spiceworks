 <?php

        $servername = "localhost";
        $username = "magne";
        $password = "%password%";

        // Create connection
        $conn = pg_connect ("host=%ip% dbname=%dbname%");

        // Check connection
        if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
 ?>
<html>
        <head>
                        <link rel="stylesheet" href="styles.css">
                        <title> Result </title>
        </head>
        <body>
                        Results for: "<?php echo $_POST["field"]; ?>" <br> <br>
        </body>
</html>
