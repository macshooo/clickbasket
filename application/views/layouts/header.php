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
    <link rel="icon" href="<?php echo base_url('assets/img/tab_icon.png');?>">
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert.css');?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/tab_icon.png');?>">

    <style>
      #anchor-element {
        display: none;
        text-transform: uppercase;
      }

      #anchor-div:hover #anchor-element {
        display: block;
      }

      #custom-search-input{
        border: solid 1px #E4E4E4;
        border-radius: 6px;
        background-color: #fff;
      }

      #custom-search-input input{
        border: 0;
        box-shadow: none;
      }

      #custom-search-input button{
        margin: 2px 0 0 0;
        background: none;
        box-shadow: none;
        border: 0;
        color: #666666;
        padding: 0 8px 0 10px;
        border-left: solid 1px #ccc;
      }

      #custom-search-input button:hover{
        border: 0;
        box-shadow: none;
        border-left: solid 1px #ccc;
      }

      #custom-search-input .glyphicon-search{
        font-size: 23px;
      }

      #autoSuggestionsList > li {
        background: none repeat scroll 0 0;
        list-style: none outside none;
        padding: 3px 15px 3px 15px;
        text-align: left;
      }

      #autoSuggestionsList > li a { color: #000000; }
      /*#autoSuggestionsList a:hover {background-color: yellow; width: 100%;}*/


             /***FEBRUARY 12, 2017 START***/
        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

        fieldset, label { margin: 0; padding: 0; }
        h1 { font-size: 1.5em; margin: 10px; }

        /****** Style Star Rating Widget *****/

        .rating {
          border: none;
          float: left;
        }

        .rating > input { display: none; }
        .rating > label:before {
          margin: 5px;
          font-size: 1.25em;
          font-family: FontAwesome;
          display: inline-block;
          content: "\f005";
        }

        .rating > .half:before {
          content: "\f089";
          position: absolute;
        }

        .rating > label {
          color: #ddd;
         float: right;
        }

        /***** CSS Magic to Highlight Stars on Hover *****/

        .rating > input:checked ~ label, /* show gold star when clicked */
        .rating:not(:checked) > label:hover, /* hover current star */
        .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

        .rating > input:checked + label:hover, /* hover current star when changing rating */
        .rating > input:checked ~ label:hover,
        .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
        .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }

        @media only screen and (orientation: landscape) {

      .searchrespond{
        z-index: 1;
        position: absolute;
        background-color: white;
        width: 96.2%;
        border-radius: 0px 0px 10px 10px;
        margin-top:-3px;
        margin-left: -1px;
       }
      }

       @media only screen and (max-width: 500px) {
       .searchrespond{
            z-index: 1;
            position: absolute;
            background-color: white;
            width: 85%;
            border-radius: 0px 0px 10px 10px;
            margin-top:-3px;
            margin-left: 5px;
           }
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
    <?php
    $market = $this->MarketModel->getMarketById();
    $data['marketinfo'] = $market;
    $marketlist = $this->MarketModel->getMarket();
    $data['marketlist'] = $marketlist;
    $this->load->view('navigation/secondary_nav',$data);?>
    <!--top most navigation -->
