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
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/signup.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">

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

    <body>

        <div class="top-content" style="margin-bottom:-50px !important;">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text" style="margin-top:-60px;">
                            <center>
                                <img class="img1" src="<?php echo base_url(); ?>public/images/logo.png" style="height:50px; width:50px;" class="img-responsive" />
                            </center>
                            <h1>Namel Malani Punchi Theatre | Online</h1>
                            <div class="description">
                            	<p>
                                    Sign Up here
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        <?php if (isset($message)) { ?>
                          <CENTER><h3 style="color:green;">Your accout created successfully!</h3></CENTER><br>
                        <?php } ?>


                          <div class="form-bottom" >
                            <form method="post" action="<?php echo base_url(); ?>index.php/SignUp/sign" name="signUp">
                                <div class="form-group">
                                    <div class="col-sm-4" style="font-size:15px;"><label> Name</label><span class="error">*</span></div>
                                    <div class="col-sm-8"><input type="text" class="form-control" id="name" name="cus_name" placeholder="Name" required></div><br>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4" style="font-size:15px;"><label>User Name</label><span class="error">*</span></div>
                                    <div class="col-sm-8"><input type="text" class="form-control" id="user_name" name="user_name" placeholder="User name" required></div><br>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4" style="font-size:15px;"><label>Password</label> <span class="error">*</span></div>
                                    <div class="col-sm-8"><input type="password" class="form-control" id="passwrd" name="password"  placeholder="*******" required></div><br>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4" style="font-size:15px;"><label>Contact Number</label><span class="error">*</span></div>
                                    <div class="col-sm-8"><input type="text" class="form-control" id="contact_nmber" name="contact_nmbr"  placeholder="Contact number" required></div><br>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4" style="font-size:15px;"><label>Email</label><span class="error">*</span></div>
                                    <div class="col-sm-8"><input type="text" class="form-control" id="email" name="email"  placeholder="Email" required></div><br>

                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4" style="font-size:15px;"><label>Provider</label><span class="error">*</span></div>
                                    <div class="col-sm-8"><select  name="provider" class="form-control" required>
                                        <option value="NULL">If you are a provider select a category</option>
                                        <option value="Catering">Catering</option>
                                        <option value="Sounds and Lightning">Sounds and Lightning</option>
                                        <option value="Photography">Photography</option>
                                        <option value="Decoration">Decoration</option>
                                        <option value="Invitation">Invitation</option>
                                    </select></div><br><br>
                                </div>

                                <button type="submit" name="submit" class="btn">Sign up!</button>

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
