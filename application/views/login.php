<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Namel Malani Punchi Theatre | Login</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/login-file.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">

        <style>
            .error {color: #FF0000;}
        </style>
    </head>

    <body>

        <div class="top-content" style="margin-bottom:-50px !important;">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text" style="margin-top:-60px;">
                            <center>
                                <img class="img1" src="<?php echo base_url(); ?>public/images/logo.png" style="height:50px; width:50px;" class="img-responsive" />
                            </center>

                            <h1>Namel Malani Punchi Theatre | Online </h1>
                            <div class="description">
                            	<p>
                                    Register on 'Punchi Theatre' and enjoy your self
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box" style="background-color:#ffffff !important;">
                          <?php
                            if ($data) { ?> <CENTER><h3 style="color:green;">You are login successfully!</h3></CENTER><br><?php }?>

                        	<div class="form-top" >
                        		<div class="form-top-left" >
                        		  <h3>Login to our site</h3>
                            	<p>Enter your User-name and password to log on:</p>
                        		</div>

                            </div>
                            <div class="form-bottom" >
			                    <form action="<?php echo base_url(); ?>index.php/Login/login_query" method="post" name="login">
                            <div class="form-group">
                                <div class="col-sm-4" style="font-size:15px;"><label>User Name</label><span class="error">*</span></div>
                                <div class="col-sm-8"><input type="text" class="form-control" id="user_name" name="user_name" placeholder="User name" required></div><br>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4" style="font-size:15px;"><label>Password</label> <span class="error">*</span></div>
                                <div class="col-sm-8"><input type="password" class="form-control" id="passwrd" name="password"  placeholder="*******" required></div><br>
                            </div>
                                    <a href="<?php echo base_url(); ?>index.php/test/view/forget_password"><h5 class="form-top1">Forget your password?</h5></a>
                                    <a href="<?php echo base_url(); ?>index.php/test/view/signUp"><h5 class="form-top1">Create account</h5></a>
			                        <center><button type="submit" class="btn">Sign in!</button></center>
			                    </form>
		                    </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <script src="public/js/jquery.js"></script>
        <script src="public/js/bootstrap.js"></script>
    </body>

</html>
