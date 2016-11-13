<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Costomer Insert</title>
        <link href="css/insertcustomer.css" rel="stylesheet">
        

    </head>
    <body>
        <?php

        $db = mysqli_connect("localhost", "root", "", "eventreg");


        if($db === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $cus_id = mysqli_real_escape_string($db, $_POST['cus_id']);
        $cus_name = mysqli_real_escape_string($db, $_POST['cus_name']);
        $user_name = mysqli_real_escape_string($db, $_POST['user_name']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $provider = mysqli_real_escape_string($db, $_POST['provider']);

        $sql = "INSERT INTO customer (cus_id, cus_name,user_name,password,provider
        ) VALUES ('$cus_id', '$cus_name', '$user_name','$password','$provider'
        );";
        if(mysqli_query($db, $sql)){
        echo "<p>Costomer added successfully</p>";
        echo '<br><br><a href="home.php"><button class="btn">Home</button></a>';
        } else{
        echo "<p>Error! Try Again<p>";
        echo '<br><br><a href="insert.php"><button class="btn2">Try Again</button></a>';
        }


        mysqli_close($db);


        ?>


    </body>
</html>