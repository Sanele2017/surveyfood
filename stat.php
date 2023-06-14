<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "surveys";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Check the connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }


// calculate total number of surveys
    $query = "SELECT COUNT(*) AS count FROM userdata";
    $Results = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($Results)){

       $output = $row['count'];
           
    echo $output;
    }
    


    // calclulate avarage age
    $sql1 = "SELECT age FROM userdata";
    $result = $conn->query($sql1);

        if ($result->num_rows > 0) {
        // Initialize variables
            $rowCount = 0;
            $totalSum = 0;

    // Loop through the values and calculate the sum
            while ($row = $result->fetch_assoc()) {
                $rowCount++;
                $totalSum += $row['age']; // Change 'column1' to the desired column name
            }

             // Calculate the average
             $average = $totalSum / $rowCount;
        echo $average;

    // find max age
        // Retrieve the maximum number from a column
        $sqlquery = "SELECT MAX(age) AS max_value FROM userdata";
        $result1 = $conn->query($sqlquery);

        if ($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        $maxValue = $row1['max_value'];  

        echo $maxValue;
        
    //find min age
    // Retrieve the maximum number from a column
        $sql2 = "SELECT MIN(age) AS min_value FROM userdata";
        $result2 = $conn->query($sql2);

        if ($result2->num_rows > 0) {
           $row2 = $result2->fetch_assoc();
           $minValue = $row2['min_value'];   
        }
        echo $minValue;
    }
    // calculate percentage of people who likes Pizza
    
  
}

        
    $conn->close();

    




?>