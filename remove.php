<!DOCTYPE html>
<html>

    <head>
        <link href="css/remove.css" rel="stylesheet">
        <style>


        </style>
    </head>
    <body>
        <?php
        $conn=mysqli_connect("localhost","root","","eventreg");
        // Check connection
        if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $getid = $_GET['id'];

        mysqli_query($conn,"DELETE from customer  where cus_id='$getid'");

        echo "<p>Succesfully User Removed<p>";

        echo '<br><br><a href="home.php"><button class="btn">Home</button></a>';


        mysqli_close($conn);
        ?>
