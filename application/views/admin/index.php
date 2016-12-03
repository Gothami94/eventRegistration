<html lang="en">
    <head>
        
    </head>
    <body>
        <section id="container" class="">
            
            <section id="main-content">
                <section class="wrapper">            
                    <!--overview start-->
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                                <li><i class="fa fa-laptop"></i>Dashboard</li>						  	
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <a href="<?php echo base_url();?>index.php/events/getEvents" class="">
                            <div class="info-box blue-bg">
                                <i class="fa fa-film"></i>
                                <div class="count"><?php echo count($countevent);?></div>
                                <div class="title">NEW EVENTS</div>						
                            </div><!--/.info-box-->	
                            </a>
                        </div><!--/.col-->

                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <a href="<?php echo base_url();?>index.php/events/getNewTicket" class="">
                            <div class="info-box brown-bg">
                                <i class="fa fa-ticket"></i>
                                <div class="count"><?php echo count($countticket) ?></div>
                                <div class="title">NEW TICKET BOOKING</div>						
                            </div><!--/.info-box-->	
                            </a>
                        </div><!--/.col-->	

                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <a href="<?php echo base_url();?>index.php/events/getNewProviders" class="">
                            <div class="info-box dark-bg">
                                <i class="fa fa-cubes"></i>
                                <div class="count"><?php echo count($countprovider) ?></div>
                                <div class="title">NEW PROVIDERS</div>						
                            </div><!--/.info-box-->
                            </a>
                        </div><!--/.col-->

                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <a href="<?php echo base_url();?>index.php/events/getTodayEvents" class="">
                            <div class="info-box green-bg">
                                <i class="fa fa-life-ring"></i>
                                <div class="count"><?php echo count($counttoday) ?></div>
                                <div class="title">TODAY EVENTS</div>						
                            </div><!--/.info-box-->
                            </a>
                        </div><!--/.col-->

                    </div>
                </section>
            </section>
         </section>
    </body>
</html>
