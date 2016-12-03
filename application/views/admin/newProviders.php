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
                            <th><b>provider</b></th>
                            <th><b>Contact number</b></th>
                            <th><b>Email</b></th>
                            <th><b>Category</b></th>
                            <th><b>description</b></th>
                            <th><b>Web url</b></th>
                            

                        </tr>
                    </thead>
                   <?php  foreach ($countprovider as $key => $provider) { ?>

                        <tr>
                            <td><a href='#' onClick=showConfirm(<?php $event->event_id ?>)>confirm</td>

                            <td><b><?php echo $provider->service_provider ?></b></td>
                            <td><b><?php echo $provider->contact_number ?></b></td>
                            <td><b><?php echo $provider->email ?></b></td>
                            <td><b><?php echo $provider->category ?></b></td>
                            <td><b><?php echo $provider->description ?></b></td>
                            <td><b><?php echo $provider->url ?></b></td>
                            
                        </tr>


                    <?php } ?>
                </table>
            </section>      
            <!--main content end-->
        </section>
    </body>
</html>
