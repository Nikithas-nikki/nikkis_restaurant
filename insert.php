<!DOCTYPE html>
<html>

<head>
    <title>Insert Page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => 
        // database name => ourrestaurant
        $conn = mysqli_connect("localhost", "root", "", "ourrestaurant");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $Email = $_REQUEST['Email'];


        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO subcribe VALUES ('$Email')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>Your Email Subscription is Successful."
                . " Thank you for subscribing to Culinary Kaleidoscope newsletter!"
                . " Get ready to receive the latest news, exclusive offers, and mouthwatering updates straight to your inbox.</h3>";

            echo nl2br("\n$Email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
