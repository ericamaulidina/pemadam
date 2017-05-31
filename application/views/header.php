
<!DOCTYPE HTML>
<html>
    <head>
        <title>Pemadam Kelaparan Header</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
                                       Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <!-- Custom Theme files -->
        <link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <!--js-->
        <script src="<?php echo base_url();?>/assets/js/jquery-2.1.1.min.js"></script> 
        <!--icons-css-->
        <link href="<?php echo base_url();?>/assets/css/font-awesome.css" rel="stylesheet"> 
        <!--Google Fonts-->
        <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>

        <!--static chart-->
        <script src="<?php echo base_url();?>/assets/js/Chart.min.js"></script>
        <!--//charts-->


        <!--skycons-icons-->
        <script src="<?php echo base_url();?>/assets/js/skycons.js"></script>
        <!--//skycons-icons-->


    </head>
    <body>	
        <div class="page-container">	
            <div class="left-content">
                <div class="mother-grid-inner">
                    <!--header start here-->
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo-name">
                                <a href="<?php echo base_url().'MyController/beranda/'?><?php echo $this->session->userdata('username') ?>"> 
                                    <h1>Pemadam Kelaparan</h1> 
                                </a> 								
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="header-right">
                            
                            <!--notification menu end -->
                            <div class="profile_details">		
                            <ul>
                                <li class="dropdown profile_details_drop">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <div class="profile_img">	
                                            <span class="prfil-img"> </span> 

                                            <div class="user-name">

                                                <td>
                                                    <p> <?php echo $this->session->userdata('username') ?> </p>
                                                </td>

                                                <span>Administrator</span>

                                            </div>

                                            <i class="fa fa-angle-down lnr"></i>
                                            <i class="fa fa-angle-up lnr"></i>
                                            <div class="clearfix"></div>	
                                        </div>	
                                    </a>
                                    <ul class="dropdown-menu drp-mnu"> 
                                        
                                        <li> <a href="<?php echo base_url().'MyController/logout'?>" ><i class="fa fa-sign-out"></i> Logout</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                            <div class="clearfix"> </div>				
                        </div>
                        <div class="clearfix"> </div>	
                    </div>
                    <!--heder end here-->
                    <!-- script-for sticky-nav -->
                    <script>
                        $(document).ready(function() {
                            var navoffeset=$(".header-main").offset().top;
                            $(window).scroll(function(){
                                var scrollpos=$(window).scrollTop(); 
                                if(scrollpos >=navoffeset){
                                    $(".header-main").addClass("fixed");
                                }else{
                                    $(".header-main").removeClass("fixed");
                                }
                            });

                        });
                    </script>
                    <!-- /script-for sticky-nav -->
                    <!--inner block start here-->