<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
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
        $Name = $_REQUEST['Name'];
        $People = $_REQUEST['People'];
        $Date = strtotime($_REQUEST['Date']);
        $Date = date('Y-m-d H:i:s', $date);
        


        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO reserve (Name, People, Date) VALUES ('$Name', '$People', '$Date')";
        
    

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>We're delighted to confirm your reservation ."
                . " Your table is all set for a wonderful dining"
                . " We look forward to welcoming you</h3>";

            echo nl2br("\n$Name");
            echo nl2br("\n$People");
            echo nl2br("\n$Date");
            

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