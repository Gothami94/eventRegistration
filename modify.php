

<!DOCTYPE html>
<html >
    <head>
        <link href="css/modify.css" rel="stylesheet">

        <title>Modify User Details</title>
        



        <?php
        $conn=mysqli_connect("localhost","root","","eventreg");

        if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($conn,"SELECT * FROM customer");



        mysqli_close($conn);
        ?>
    </head>

    <body>

        <div class="table" >


            <table bgcolor="yellow">
                <thead>
                    <tr>
                        <td class='td th'>Customer ID</td>
                        <td class='td th'>Customer Name</td>
                        <td class='td th'>User Name</td>
                        <td class='td th'>Edit</td>
                        <td class='td th'>Remove</td>

                    </tr>
                </thead>

                <tbody>

                    <?php
                    while($row = mysqli_fetch_array($result)) {
                    echo '<tr>';
                    echo '<td class="td">'.$row['cus_id'].'</td>';
                    echo '<td class="td">'.$row['cus_name'].'</td>';
                    echo '<td class="td">'.$row['user_name'].'</td>';

                    echo '<td class="td0"><a href="update.php?id='.$row['cus_id'].'" >Edit</a></td>';

                    echo '<td class="td0"><a href="remove.php?id='.$row['cus_id'].'" >Delete</a></td>';

                    echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <br><br> <a href="home.php"><button class="btn">Home</button></a>
    </body>
</html>