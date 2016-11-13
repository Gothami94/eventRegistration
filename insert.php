<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Customer Details</title>
        <link href="css/insert.css" rel="stylesheet">
       
    </head>
    <body>


        <form  id="form" method ="post" class= "frm" action="insertcustomer.php"><br>


            <div class= "head-form">
                <h2>Customer Details Form</h2>
            </div>
            <table>

                <tr>
                    <td> <label class= "lbl" >Customer ID </label>            </td>

                    <td> <input type="text" name="cus_id" id= "cus_id"  required>
                          <br><br>    </td>

                </tr>

                <tr>
                    <td>  <label class= "lbl" >Customer Name </label>           </td>

                    <td> <input type="text" name ="cus_name" id= "cus_name"  required> 
                        <br><br>           </td>

                </tr> 
                <tr>
                    <td> <label class= "lbl" >User Name </label>            </td>

                    <td>   <input type="text" name ="user_name" id= "user_name" required>
                        <br><br>          </td>

                </tr>
               
                <tr>
                    <td>   <label class= "lbl" >Password </label>   </td>

                    <td> <input type="password" name ="password" id= "password" required><br><br> </td>

                </tr>


                </tr>
                 <tr><td>   <label class= "lbl" >Provider </label>           </td>

                    <td>  <input type="text" name ="provider" id= "provider" ><br><br>           </td>


                </tr>



            </table>
            <br><br> <div class="sub-btn">
                <td> <input type="submit"  class="sub-btn" name="submit" value="Submit"  onclick="return function(event)"/>  </td>




            </div>

        </form>

        <script>
            $(function () {
                $("#cus_id").bind("keyup", function (event) {
                    var regex = /^[0-9]+$/;
                    if (regex.test($("#cus_id").val())) {
                        $('.validation').html('');
                    } else {
                        return confirm('This field can not be empty or must be filled with numbers');


                    }
                });


                $("#cus_name").bind("keyup", function (event) {
                    var regex = /^[a-zA-Z\s]+$/;
                    if (regex.test($("#cus_name").val())) {
                        $('.validation').html('');
                    } else {
                        return confirm('This field can not be empty or must be filled with English letters');


                    }
                });


                $("#user_name").bind("keyup", function (event) {
                    var regex = /^[a-zA-Z\s]+$/;
                    if (regex.test($("#user_name").val())) {
                        $('.validation').html('');
                    } else {
                        return confirm('This field can not be empty or must be filled with English letters');


                    }
                });

                

                $("#provider").bind("keyup", function (event) {
                    var regex = /^[a-zA-Z\s]+$/;
                    if (regex.test($("#provider").val())) {
                        $('.validation').html('');
                    } else {
                        return confirm('This field can not be empty or must be filled with English letters');


                    }
                });


            });



        </script>
    </body>
</html>