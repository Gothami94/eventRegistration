<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
  <title>Namel Malini Theatre</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/signup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/styleCSS.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/icon.css">


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
        input#search {
          background-image: url(../../public/images/search.jpg);
          background-repeat: no-repeat;
          text-indent: 20px;
        }
    </style>
    <script>
    function hideIcon(self) {
      self.style.backgroundImage = 'none';
    };

    function ConfirmDelete() {
      return confirm("Are you sure you want to delete?");
    };
    </script>

</head>
  <body style="background:url(../../public/images/bg.jpg) no-repeat center fixed;">

    <div class="top-content" style="margin-bottom:-50px !important;">
      <div class="inner-bg">
        <div class="container">
         <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text" style="margin-top:-60px;">
              <center>
                  <img src="<?php echo base_url(); ?>public/images/logo.png" style="height:50px; width:80px;" class="img-responsive" />
              </center>

              <h1>Namel Malani Punchi Theatre | Online </h1>
          </div>
      </div>
      <div class="row content">
          <br><br>
        <div class="col-xs-2 sidenav">
        </div>

        <div class="col-xs-7 text-left">

          <div class="col-sm-12 form-box" style="background-color:#ffffff !important;">
            <center><h3 style="color:#555;">Add Event</h3></center>
            <?php if (isset($message)) { ?>
              <CENTER><h3 style="color:green;"><?php echo "$message"; ?></h3></CENTER><br>
            <?php } ?>
            <br>
            <form method="post" action="<?php echo base_url(); ?>index.php/Register/event" name="regEvent" style="color:#555;">
                <div class="form-group">
                  <div class="col-sm-4" style="font-size:15px;">
                    <b>Event Name</b><span class="error">*</span>
                  </div><div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="event_name" placeholder="Event name" required>
                  </div><br>
                </div>

                <div class="form-group">
                  <div class="col-sm-4" style="font-size:15px;">
                    <b>Event Provider</b><span class="error">*</span>
                  </div><div class="col-sm-8">
                    <input type="text" class="form-control" id="provider" name="event_provider" placeholder="Event provider" required>
                  </div><br>
                </div>

                <div class="form-group">
                  <div class="col-xs-4" style="font-size:15px;">
                   <b>Category</b><span class="error">*</span>
                  </div><div class="col-xs-8">
                    <select  name="category" class="form-control" required>
                        <option value="Dancing Show">Dancing Show</option>
                        <option value="Cultural Show">Cultural Show</option>
                        <option value="Movi">Movie</option>
                        <option value="Stage Drama">Stage Drama</option>
                        <option value="Music Event">Music Event</option>
                        <option value="Occasion">Occasion</option>
                    </select>
                  </div><br>
                </div>

                <div class="form-group">
                  <div class="col-xs-4" style="font-size:15px;">
                    <b>Date</b><span class="error">*</span>
                  </div><div class="col-xs-8">
                    <input type="date" class="form-control" id="date" name="e_date" required>
                  </div><br>
                </div>

                <div class="form-group">
                  <div class="col-xs-4" style="font-size:15px;">
                     <b>Start time<b><span class="error">*</span>
                  </div><div class="col-xs-8">
                    <input type="time" class="form-control" id="stime" name="start_time" required>
                  </div><br>
                </div>

                <div class="form-group">
                  <div class="col-xs-4" style="font-size:15px;">
                    <b>End time<b><span class="error">*</span>
                  </div><div class="col-xs-8">
                    <input type="time" class="form-control" id="etime" name="end_time" required>
                  </div><br>
                </div>

                <center><button type="submit"  name="submit" class="button">Register</button></center>
                <a href="<?php echo base_url(); ?>index.php/Welcome/index"><h5 style="color:#0B07F4"><u>Home page</u></h5></a>


                </form>
              </div>
            </div>

          <div class="col-xs-3">
              <form action="<?php echo base_url(); ?>index.php/Register/search" method="post">
                <div class="icon-addon addon-md">
                    <input type="text" id="search" name="term" onchange="hideIcon(this);" >
                </div>
                  <button type="submit"  name="search" class="button3">Search</button>
              </form>
          </div>


  </div>
</div>

    <div class="container-fluid text-center">
        <div class="row content">


        <center><h3 style="color:#dcdcdc;">Registered Events</h3></center>

                  <center><table  style="color:#dcdcdc;">
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
                          echo "<td><a href='";?><?php echo base_url(); echo "index.php/DeleteEvent/del_event/"; print_r ($table[$j]->event_id); echo "' class='button2' Onclick='return ConfirmDelete()'>Delete</a></td>";
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
