<html>
    <head>
        <title> Customer Home</title>
        <link href="css/home.css" rel="stylesheet">

    </head>

    <body>
     <div class=form>   
        <div>
            <h1>Customer Management System</h1><br>
        </div>
        <div id="home">
            <form action="searchresults.php" method="post">

                <input type="text" class="txt" id= "search" name="search" placeholder=" Search a Customer "/>

                <input type="submit" class= "search" value="Search" onclick="return function(event)"/>
            </form>

            
            <a href="insert.php"><button class="btn1">Insert Customer</button></a><br> 
            <a href="modify.php"><button class="btn2">Edit/Remove Customer</button></a>


        </div>
        </div>
        <script>
            $(function () {
                $("#search").bind("keyup", function (event) {
                    var regex = /^[a-zA-Z\s]+$/;
                    if (regex.test($("#search").val())) {
                        $('.validation').html('');
                    } else {
                        return confirm('Enter Name');


                    }
                });

            });
        </script>
    

    </body>
</html> 