<html lang="en">
    <head>
        
    </head>
    <body>
         <section id="container" class="">
           

            <section id="main-content" style="text-align:center; position:relative; top: 100px">
                <p class="h1" style="text-align:center;">NEW EVENTS</p>
                <table  class="table table-inverse">
                    <thead class="thead-inverse">
                        <tr>


                            <th></th>
                            <th><b>Event Name</b></th>
                            <th><b>Event Provider</b></th>
                            <th><b>Category</b></th>
                            <th><b>Event Date</b></th>
                            <th><b>Start Time</b></th>
                            <th><b>End Time</b></th>

                        </tr>
                    </thead>
                    <?php foreach ($events as $key => $event) { ?>

                        <tr>
                            <td><a href='#' onClick=showConfirm(<?php $event->event_id ?>)>confirm</td>

                            <td><b><?php echo $event->event_name ?></b></td>
                            <td><b><?php echo $event->event_provider ?></b></td>
                            <td><b><?php echo $event->category ?></b></td>
                            <td><b><?php echo $event->e_date ?></b></td>
                            <td><b><?php echo $event->start_time ?></b></td>
                            <td><b><?php echo $event->end_time ?></b></td>
                        </tr>


                    <?php } ?> 
                </table>
            </section>      
            <!--main content end-->
        </section>
    </body>
</html>
