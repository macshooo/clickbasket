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

    <style>
      #anchor-element {
        display: none;
        text-transform: uppercase;
      }

      #anchor-div:hover #anchor-element {
        display: block;
      }
    </style>
  </head>

  <body>
    <!--navbarbeforemobile-hidden-->
    <?php $this->load->view('navigation/main_nav');?>
    <!--register-->
    <?php $this->load->view('navigation/registermodal');?>
    <!--password recovery-->
    <?php $this->load->view('navigation/passwordrecovery');?>
    <!--Main Navbar-->
    <?php $this->load->view('navigation/secondary_nav');?>
    <!--top most navigation -->
