<!DOCTYPE HTML>
<html>
<head>
    <title>Welcome | ClickBasket</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url().'assets/img/tab_icon.png';?>">
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/styles.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/mystyles.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/sweetalert.css';?>">

    <script src="<?php echo base_url().'assets/js/jquery-3.1.1.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery-3.1.1.min.js';?>"></script>
    <script src="//netsh.pp.ua/upwork-demo/1/js/typeahead.js"></script>    

    <script>
        $(document).ready(function() {

            $('#searchBar').typeahead({
                name: 'city',
                remote: 'city.php?query=%QUERY'

            });

        })
    </script>
    
</head>

<body>



     <!--navbarbeforemobile-hidden-->
        <?php $this->load->view('navigation/main_nav');?>
        <!--login-->

        <?php //$this->load->view('navigation/loginmodal');?>

        <!--register-->
        <?php $this->load->view('navigation/registermodal');?>
        <!--password recovery-->
        <?php $this->load->view('navigation/passwordrecovery');?>
        
        <!--Main Navbar-->
        <?php $this->load->view('navigation/secondary_nav');?>

<!--top most navigation -->

