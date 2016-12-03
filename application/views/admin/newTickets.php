<html lang="en">
    <head>
        
    </head>
    <body>
         <section id="container" class="">
           

            <section id="main-content" style="text-align:center; position:relative; top: 100px">
                <p class="h1" style="text-align:center;">NEW TICKETS</p>
                <table  class="table table-inverse">
                    <thead class="thead-inverse">
                        <tr>


                            <th></th>
                            <th><b>Price</b></th>
                            <th><b>Start Date</b></th>
                            <th><b>End Date</b></th>
                            <th><b>State</b></th>
                            <th><b>Available</b></th>
                            

                        </tr>
                    </thead>
                    <?php foreach ($countticket as $key => $ticket) { ?>

                        <tr>
                            <td><a href='#' onClick=showConfirm(<?php $ticket->ticket_id ?>)>confirm</td>

                            <td><b><?php echo $ticket->price ?></b></td>
                            <td><b><?php echo $ticket->start_date ?></b></td>
                            <td><b><?php echo $ticket->end_date ?></b></td>
                            <td><b><?php echo $ticket->state ?></b></td>
                            <td><b><?php echo $ticket->available ?></b></td>
                            
                        </tr>


                    <?php } ?> 
                </table>
            </section>      
            <!--main content end-->
        </section>
    </body>
</html>
