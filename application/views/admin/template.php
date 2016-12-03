<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>admin/img/favicon.png">

        <title>Profile | Creative - Bootstrap 3 Responsive Admin Template</title>

        <!-- Bootstrap CSS -->    
        <link href="<?php echo base_url(); ?>admin/css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="<?php echo base_url(); ?>admin/css/bootstrap-theme.css" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="<?php echo base_url(); ?>admin/css/elegant-icons-style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>admin/css/font-awesome.min.css" rel="stylesheet" />
        <!-- Custom styles -->
        <link href="<?php echo base_url(); ?>admin/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>admin/css/style-responsive.css" rel="stylesheet" />

        <script src="<?php echo base_url(); ?>admin/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>admin/js/bootstrap.min.js"></script>
        <!-- nice scroll -->
        <script src="<?php echo base_url(); ?>admin/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>admin/js/jquery.nicescroll.js" type="text/javascript"></script>
        <!-- jquery knob -->
        <script src="<?php echo base_url(); ?>admin/assets/jquery-knob/js/jquery.knob.js"></script>
        <!--custome script for all page-->
        <script src="<?php echo base_url(); ?>admin/js/scripts.js"></script>
        <script>

            //knob
            $(function() {
                $(".knob").knob({
                    'draw': function() {
                        $(this.i).val(this.cv + '%')
                    }
                })
            });

            //carousel
            $(document).ready(function() {
                $("#owl-slider").owlCarousel({
                    navigation: true,
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true

                });
            });

            //custom select box

            $(function() {
                $('select.styled').customSelect();
            });

            /* ---------- Map ---------- */
            $(function() {
                $('#map').vectorMap({
                    map: 'world_mill_en',
                    series: {
                        regions: [{
                                values: gdpData,
                                scale: ['#000', '#000'],
                                normalizeFunction: 'polynomial'
                            }]
                    },
                    backgroundColor: '#eef3f7',
                    onLabelShow: function(e, el, code) {
                        el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                    }
                });
            });
        </script>
    </head>
    <body>
        <!-- container section start -->
        <section id="container" class="">
            <?php $this->load->view('admin/template/header'); ?>
            <?php $this->load->view('admin/template/nevigation'); ?>


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
        <!-- container section start -->
    </body>
</html>
