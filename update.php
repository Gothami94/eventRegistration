
<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/update.css" rel="stylesheet">
       
        <title>Update form </title>


        <?php
        $conn=mysqli_connect("localhost","root","","eventreg");

        if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $getid = $_GET['id'];

        $result = mysqli_query($conn,"SELECT * FROM customer where cus_id= '$getid' ");

        $customer = mysqli_fetch_array($result);

        if (!$customer) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
        }

        mysqli_close($conn);
        ?>


    </head>
    <body>

        <div class="container">
            <div class="page-header">
                <h1>Customer Change Details Form</h1>
            </div>


            <form method="POST" action="updateuser.php">
                <table>

                    <tr> 
                        <td><label class= "lbl" >Customer ID </label>  </td>

                        <td>   <input type="text"  name="cus_id" id="cus_id" value="<?php echo $customer['cus_id']?>"> </td>
                    </tr>
                    <tr> 
                        <td>  <label class= "lbl" >Customer Name </label> </td>
                        <td>    <input type="text"  name="cus_name" id="cus_name" value="<?php echo $customer['cus_name']?>"> </td>
                    </tr> 

                    <tr> 
                        <td>      <label class= "lbl" >User Name </label>  </td>
                        <td>     <input type="text"  name="user_name" id="user_name" value="<?php echo $customer['user_name']?>"> </td>
                    </tr> 

                    <tr> 
                        <td>      <label class= "lbl" >provider</label>  </td>
                        <td>     <input type="text"  name="provider" id="provider" value="<?php echo $customer['provider']?>"> </td>
                    </tr>


                </table>
                <br><br>  <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right" >

            </form>

        </div>
       
       
    </body>
</html>