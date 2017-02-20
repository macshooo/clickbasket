<?php
  $consumerdata = $this->session->userdata('consumerdata');
?>
<nav class="navbar navbar-inverse navbar-main navbar-pad" style="box-shadow: 0px 0px 0px 0px !important;">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('maincontroller'); ?>">
        <img src="<?php echo base_url('assets/img/logo-w-2.png');?>" style="width:100%;" alt="Image Alternative text" title="Image Title" />
      </a>
    </div>
    <div class="rel">
      <!--Bootstrap Custom Search input-->
      <div class="col-md-8" style="margin-top:8px;">
        <div id="custom-search-input">
          <div class="input-group col-lg-12">
            <input type="text" name="searchData" style="width:100%;" id="searchData" class="form-control" placeholder="Search for a product" onkeyup="ajaxSearch();" />
            <span class="input-group-btn">
              <button class="btn btn-info btn-lg" type="button">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </div>
        <div class="col-md-12">
          <div id="suggestions">
            <div id="autoSuggestionsList" class="searchrespond"></div>
          </div>
        </div>
      </div>
      <!--Bootstrap Custom Search input-->
      <?php if(!empty($this->session->userdata('market'))){?>
      <a id="p1" href="<?php echo site_url('secondarycontroller/selectmarket');?>">
        <div class="navbar-theme-img text-center" alt="Image Alternative text" title="Select Market" style="font-style: verdana; background-color:#365271; margin-top:8px; padding:5px; color:white;  border-radius: 5px; border: 2px solid #FFFFFF; height:35px;" /><?= $marketinfo->store_name;?></div>
      </a>
      <a id="p2" style="display:none;" href="<?php echo site_url('secondarycontroller/selectmarket');?>">
        <div class="navbar-theme-img text-center" alt="Image Alternative text" title="Select Market" style="font-style: verdana; background-color:#365271;  margin-top:8px; padding:5px; color:white;  border-radius: 5px; border: 2px solid #FFFFFF; height:35px;" />SELECT MARKET</div>
      </a>
        <?php }else{?>
       <a href="<?php echo site_url('secondarycontroller/selectmarket');?>">
        <div class="navbar-theme-img text-center" alt="Image Alternative text" title="Select Market" style="font-style: verdana; background-color:#365271;  margin-top:8px; padding:5px; color:white;  border-radius: 5px; border: 2px solid #FFFFFF; height:35px;" />SELECT MARKET</div>
       </a>
      <?php }?>
    </div>
  </div>
</nav>
<nav class="navbar-inverse navbar-main yamm" style="background-color:; z-index: 2;">
  <div class="container">
    <div class="collapse navbar-collapse navbar-collapse-no-pad"  id="main-nav-collapse">
      <ul class="nav navbar-nav navbar-nav-lg">
        <?php $this->load->view('navigation/categoryblock.php'); ?>
      </ul>
        <ul class="nav navbar-nav navbar-right navbar-right-no-mar navbar-nav-lg">
        <?php if($this->session->userdata('logged_in')!= TRUE){?>
          <li><a href="<?php echo site_url('secondarycontroller'); ?>"><span >Hello, Sign in</span>Your Account</a>
          </li>
        <?php }else{ ?>
          <li class="dropdown"><a href="#" data-toggle="dropdown"><i class="drop-caret" data-toggle="dropdown"></i><span>Welcome</span><?= $userinfo->consumer_fname ?></a>
            <ul class="dropdown-menu" role="menu" style="background-color:white;">
              <li><a href="<?php echo site_url('secondarycontroller/profile');?>"><i class="fa fa-user"></i> Manage my account</a></li>
              <li><a href="<?php echo site_url('secondarycontroller/orderhistory');?>"><i class="fa fa-inbox"></i> My Orders</a></li>
              <!-- <li><a href="<?php echo site_url('secondarycontroller/wishlist');?>"><i class="fa fa-heart"></i> Wishlist</a></li> -->
              <li class="divider"></li>
              <li><a href="<?php echo site_url('secondarycontroller/logout');?>"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
          </li>
        <?php } ?>
        <?php $marketinfo_?>
        <li class="dropdown visible-xs"><a href="#" data-toggle="dropdown"><i class="drop-caret" data-toggle="dropdown"></i><span>&nbsp</span>Select Market</a>
            <ul class="dropdown-menu" role="menu" style="background-color:white;">
              <?php foreach ($marketlist as $market){?>
              <li><a href="<?php echo site_url('maincontroller/getMarket?id='.$market->store_id);?>"><?php echo $market->store_name;?></a></li>
              <?php }?>
            </ul>
          </li>
        <li><a href="<?php echo site_url('listproductscontroller/shoppingcart') ?>"><span ></span><i class="fa fa-shopping-cart"></i></a>
        </li>
       </ul>
     </div>
  </div>
</nav>
