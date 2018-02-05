<?php
        $servername = "localhost";
        $username = "root";
        $pass = "Pleasekys123";

        $conn = new mysqli($servername, $username, $password);
        
        // Check connection
        if (!$conn) {
            die("Connection failed: " . $conn->connect_error);
        } 
        echo "Connected successfully";
        mysqli_query($conn, "USE rrgUsers;")
        $sql = "SELECT * FROM employees";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
    ?>