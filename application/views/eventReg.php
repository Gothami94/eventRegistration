<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
  <title>Namel Malini Theatre</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/styleCSS.css">
    <style>
        .error {color: #FF0000;}
        .button3{
            background-color: #00008b;
            border: none;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>

</head>
  <body style="background:url(../../public/images/bg.jpg) no-repeat center fixed;">


    <div class="container-fluid text-center">
      <div class="row content">
        <div class="col-xs-4 sidenav">
        </div>

        <div class="col-xs-4 text-left">
            <br><br>
          <center><h3 style="color:#ffffff;">Add Event</h3></center>

            <form method="post" action="<?php echo base_url(); ?>index.php/Register/event" name="updateEvent" style="color:#ffffff;">
                <div class="form-group">
                    <label>Event Name</label><span class="error">*</span><br>
                    <input type="text" class="form-control" id="name" name="event_name" placeholder="event name" required>
                </div>
                <div class="form-group">
                    <label>Event Provider</label><span class="error">*</span><br>
                    <input type="text" class="form-control" id="provider" name="event_provider" placeholder="event provider" required>
                </div>
                <div class="form-group">
                    <label>Category</label><span class="error">*</span><br>
                    <select  name="category" class="form-control" required>
                        <option value="Dancing Show">Dancing Show</option>
                        <option value="Cultural Show">Cultural Show</option>
                        <option value="Movi">Movie</option>
                        <option value="Stage Drama">Stage Drama</option>
                        <option value="Music Event">Music Event</option>
                        <option value="Occasion">Occasion</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Date</label> <span class="error">*</span><br>
                    <input type="date" class="form-control" id="date" name="e_date" required>
                </div>
                <div class="form-group">
                    <label>Start time</label><span class="error">*</span><br>
                    <input type="time" class="form-control" id="stime" name="start_time" required>

                </div>
                <div class="form-group">
                    <label>End time</label><span class="error">*</span><br>
                    <input type="time" class="form-control" id="etime" name="end_time" required>

                </div>
                <button type="submit"  name="submit" class="button">Register</button>


                </form>

        </div>
          <div class="col-xs-1 sidenav">
          </div>

          <div class="col-xs-3 sidenav">
              <form action="<?php echo base_url(); ?>index.php/Register/search" method="post">
                  <input type="text" class="form-control" name="term" placeholder="event name">
                  <button type="submit"  name="search" class="button3">Search</button>
              </form>
          </div>
      </div>
    </div>

    <div class="container-fluid text-center">
        <div class="row content">


        <center><h3 style="color:#ffffff;">Show Student</h3></center>

                  <center><table  style="color:#ffffff;">
                          <tr style= "border-bottom:1px solid #000000;height:10px">
                              <th style= "width:150px">Event Name</th>
                              <th style= "width:150px">Event Provider</th>
                              <th style= "width:150px">Category</th>
                              <th style= "width:150px">Date</th>
                              <th style= "width:150px">Start time</th>
                              <th style= "width:150px">End time</th>
                              <th style= "width:60px">Update</th>
                              <th style= "width:60px">Delete</th>
                          </tr>


              <?php
                  // display records if there are records to display

                  if (count($table) > 0) {
                      $i=count($table);
                      $j=0;
                      while ($i) {
                          // set up a row for each record
                          echo "<tr>";
                          echo "<td>"; print_r ($table[$j]->event_name); echo "</td>";
                          echo "<td>"; print_r ($table[$j]->event_provider); echo "</td>";
                          echo "<td>"; print_r ($table[$j]->category); echo "</td>";
                          echo "<td>"; print_r ($table[$j]->e_date); echo "</td>";
                          echo "<td>"; print_r ($table[$j]->start_time); echo "</td>";
                          echo "<td>"; print_r ($table[$j]->end_time); echo "</td>";
                          echo "<td><a href='";?><?php echo base_url(); echo "index.php/Update/sel_event/";  print_r ($table[$j]->event_id ); echo "' class='button1'>Update</a></td>";
                          echo "<td><a href='delete_event.php?id="; print_r ($table[$j]->event_id); echo "' class='button2'>Delete</a></td>";
                          echo "</tr>";
                          $i-=1;
                          $j+=1;
                      }

                      echo "</table></center>";
                  } // if there are no records in the database, display an alert message
                  else {
                      echo "No results to display!";
                  }


              ?>

              </div>
          </div>


      </div>
    </div>


  </body>
</html>
