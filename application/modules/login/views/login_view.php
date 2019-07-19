<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> Sistem Aplikasi Inventory </title>
   
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
 
    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/css/themes/all-themes.css" rel="stylesheet" />
    <style>
        .bg { background:url('assets/images/backlogin.jpg') center; height: 100vh; background-size: cover; }
            .login {}
            .login a {}
            .login input { background: #fff; border: none; margin: 10px 0px; padding:20px;     height: 50px; }
             
            .login-social ul { list-style-type: none; margin: 0; padding: 0;}
            .login-social ul li { float: left; text-align: center;  margin-top: 20px;  }
            .login-social ul li a { display: block; width:35px; height: 35px;   margin: 5px;  color: #fff; font-size: 21px;  line-height: 35px;}
            .login-social ul li.facebook { background: #3B5998  ; }
            .login-social ul li.google { background: #dd4b39 ; }
            .login-social ul li.twitter { background: #00aced ;}
    </style>
    
</head>
<body>
        <form id="sign_in" action="<?php echo base_url('login/autentikasi'); ?>" method="POST" enctype="multipart/form-data">
        <div class="container-fluid"> 
           <div class="row ">
               <div class="col-sm-6 bg">
                   
               </div>
               <div class="col-sm-6 bg-dark text-white">
                   <div class="row">
                       <div class="col-md-12 col-sm-10 offset-sm-1 offset-md-2">
                           <h4 align="center">Sistem Aplikasi Inventory Martools.</h4>
                           <p align="center">Aplikasi inventory management system yang dirancang untuk mengatur inventaris stok barang.</p>
                       
                          <div class="login">
                           
                             
                           <form action="">
                                
                               <input type="text" name="username" id="username" class="form-control" required placeholder="Username">
                               <input type="password" name="password" id="password" class="form-control" required placeholder="Password">
                                
                               <button class="btn btn-block bg-blue waves-effect" type="submit">Masuk</button>
                        </form>
                        
                          </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>	 
        </form>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url(); ?>assets/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/flot-charts/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/js/admin.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/pages/charts/chartjs.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/pages/index.js"></script>
 
    <script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
</body>

</html>