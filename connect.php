<?php
        if(isset($_POST['surname'])|| isset($_POST['firstName'])|| isset($_POST['phoneNumber'])|| isset($_POST['datum'])|| isset($_POST['age']) || isset($_POST['food']) || isset($_POST['rating']) || isset($_POST['ratings']) || isset($_POST['ratings1']) || isset($_POST['rating1'])){
            $surname = $_POST['surname'];
            $firstName = $_POST['firstName'];
            $phoneNumber = $_POST['phoneNumber'];
            $datum = $_POST['datum'];
            $age = $_POST['age'];
            $food = $_POST['food'];
            $rating = $_POST['rating'];
            $ratings = $_POST['ratings'];
            $ratings1 = $_POST['ratings1'];
            $rating1 = $_POST['rating1'];


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

        // Perform database operations
        foreach ($food as $item)
        {
            foreach ($rating as $items){
                    foreach ($rating as $movies){
                                foreach ($rating1 as $tv){
                                            foreach ($ratings1 as $radio){
                    
                                             $sql = "INSERT INTO userdata (surname, firstName, phoneNumber, datum, age, favfood, eatout, watchmovies, watchtv, listenradio) VALUES ('$surname', '$firstName', '$phoneNumber', '$datum', '$age', '$item', $items, '$movies', '$tv', '$radio')";
                                             if ($conn->query($sql) === TRUE) {
                                                  echo "";
                                             } else {
                                                 echo "Error: " . $sql . "<br>" . $conn->error;
                                             }
        }
    }
    }
    }
    }
    

        // Close the connection
        $conn->close();

        }
        
?>