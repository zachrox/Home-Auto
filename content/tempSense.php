<?php
    $servername = "localhost";
    $username = "root";
    $password = "ADMIN";
    $dbname = "8266Data";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM 8266Data.TempData ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["Temp"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>