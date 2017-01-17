<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="en">
<head>
	<title>Namel Malini Theatre</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/styleCSS.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/signup.css">


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
<body style="background:url(<?php echo base_url(); ?>public/images/bg.jpg) no-repeat center fixed;">


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
		<div class="col-xs-2 sidenav">
		</div>

		<div class="col-xs-8 text-left">
      <div class="col-sm-12 form-box" style="background-color:#ffffff !important;">
        <center><h3 style="color:#555;">UpdateEvent</h3></center>
        <?php if (isset($message)) { ?>
          <CENTER><h3 style="color:green;"><?php  print_r ($message); ?></h3></CENTER><br>
        <?php } ?>
        <br>
			<form method="post" action="#" name="updateEvent" style="color:#555;">
        <div class="form-group">
          <div class="col-sm-4" style="font-size:15px;">
            <b>Event Id</b><span class="error">*</span>
          </div><div class="col-sm-8">
            <input type="text" class="form-control" id="id" name="event_id" value="<?php  print_r ($table[0]->event_id); ?>" readonly="">
          </div><br>
        </div>

        <div class="form-group">
          <div class="col-sm-4" style="font-size:15px;">
            <b>Event Name</b><span class="error">*</span>
          </div><div class="col-sm-8">
            <input type="text" class="form-control" id="name" name="event_name" value="<?php  print_r ($table[0]->event_name); ?>" readonly="">
          </div><br>
        </div>

        <div class="form-group">
          <div class="col-sm-4" style="font-size:15px;">
            <b>Event Provider</b><span class="error">*</span>
          </div><div class="col-sm-8">
            <input type="text" class="form-control" id="provider" name="event_provider" value="<?php  print_r ($table[0]->event_provider); ?>" readonly="">
          </div><br>
        </div>

        <div class="form-group">
          <div class="col-xs-4" style="font-size:15px;">
           <b>Category</b><span class="error">*</span>
          </div><div class="col-xs-8">
            <input type="text" class="form-control" id="category" name="category" value="<?php  print_r ($table[0]->category); ?>" readonly="">

          </div><br>
        </div>

        <div class="form-group">
          <div class="col-xs-4" style="font-size:15px;">
            <b>Date</b><span class="error">*</span>
          </div><div class="col-xs-8">
            <input type="date" class="form-control" id="date" value="<?php  print_r ($table[0]->e_date); ?>" readonly="">
          </div><br>
        </div>

        <div class="form-group">
          <div class="col-xs-4" style="font-size:15px;">
             <b>Start time<b><span class="error">*</span>
          </div><div class="col-xs-8">
            <input type="time" class="form-control" id="stime" value="<?php  print_r ($table[0]->start_time); ?>" readonly="">
          </div><br>
        </div>

        <div class="form-group">
          <div class="col-xs-4" style="font-size:15px;">
            <b>End time<b><span class="error">*</span>
          </div><div class="col-xs-8">
            <input type="time" class="form-control" id="etime" value="<?php  print_r ($table[0]->end_time); ?>" readonly="">
          </div><br>
        </div>

        <a href="<?php echo base_url(); ?>index.php/Register/event" class="button2">Back</a> </center>

			</form>
    </div>

		</div>

		<div class="col-xs-2 sidenav">
		</div>
  </div>
	</div>
</div>


</body>
</html>
