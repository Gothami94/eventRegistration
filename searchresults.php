<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Customers</title>
       <link href="css/searchresult.css" rel="stylesheet">
    </head>
    <body>
        <?php 
       
        $host = "localhost";
        $user = "root";
        $password = "";
        $database_name = "eventreg";
        $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ));

        $search=$_POST['search'];
        $query = $pdo->prepare("select cus_id,cus_name,user_name,provider from customer where cus_name LIKE '%$search%' LIMIT 0 , 10");
        $query->bindValue(1, "%$search%", PDO::PARAM_STR);
        $query->execute();

        if (!$query->rowCount() == 0) {
        echo "<div class ='table'>";
        echo "<table >";	
        echo "
        <tr>
        <td class='td th'>Customer ID Name</td>
        <td class='td th'>Customer Name</td>
        <td class='td th'>User Name</td>
        <td class='td th'>provider</td>  
        </tr>";				
        while ($results = $query->fetch()) {

        echo "<tr><td class='td' >";			
        echo $results['cus_id'];

        echo "</td><td class='td' >";			
        echo $results['cus_name'];

        echo "</td><td class='td' >";			
        echo $results['user_name'];

        echo "</td><td class='td'>";
        echo $results['provider'];

        }
        echo "</td></table> </div>";		
        } else {
        echo 'did not found ';
        }
        ?>
        <br><br> <a href="home.php"><button class="btn">Home</button></a>

    </body>
</html>