<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Customer Update</title>
        <link href="css/updateuser.css" rel="stylesheet">
    </head>
    <body>
        <?php

        $conn=mysqli_connect("localhost","root","","eventreg");
        
        if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $cus_id = $_POST['cus_id'];
        $cus_name = $_POST['cus_name'];
        $user_name = $_POST['user_name'];
        $provider = $_POST['provider'];


        $query= "UPDATE customer SET cus_id ='$cus_id', cus_name='$cus_name',user_name='$user_name',  provider ='$provider'  WHERE cus_id='$cus_id'";

        mysqli_query($conn,$query) or die("Die");

        if ($conn->query($query) === TRUE) {
        echo "<p>Succesfully Updated<p>";

        } else {
        echo "Error record updating : " . $conn->error;
        }

        mysqli_close($conn);

        echo '<br><br><a href="home.php"><button class="btn">Home</button></a>';

        ?>
    </body>
</html>