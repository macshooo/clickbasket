<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
  <nav class="navbar navbar-inverse navbar-main navbar-pad">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url('maincontroller') ?>">
          <img src="<?php echo base_url().'assets/img/logo-w-2.png';?>" style="width:100%;" alt="Image Alternative text" title="Image Title" />
        </a>
        </div>
          <div class="rel">
            <form class="navbar-form navbar-left navbar-main-search navbar-main-search-category" role="search">
              <select class="navbar-main-search-category-select">
                <option>All Departmens</option>
                <option>Appilances</option>
                <option>Apps & Games</option>
                <option>Arts, Crafts & Sewing</option>
                <option>Automotive</option>
                <option>Baby</option>
                <option>Books</option>
                <option>CDs & Vinyl</option>
                <option>Cell Phones & Accessories</option>
                <option>Clothing, Shoes & Jewelry</option>
              </select>
              <div class="form-group">
                <input id="searchBar" class="form-control" type="text" placeholder="Search the Entire Store..." />
              </div>
              <a class="fa fa-search navbar-main-search-submit" href="#"></a>
            </form>
            <a href="<?php echo site_url('secondarycontroller/selectmarket'); ?>">
              <img class="navbar-theme-img" src="<?php echo base_url().'assets/img/select_vendor_img.png';?>" alt="Image Alternative text" title="Select Market" />
            </a>
          </div>
      </div>
  </nav>
  <nav class="navbar-inverse navbar-main yamm">
    <div class="container">
      <div class="collapse navbar-collapse navbar-collapse-no-pad" id="main-nav-collapse">
        <ul class="nav navbar-nav navbar-nav-lg">
          <?php $this->load->view('navigation/categoryblock.php'); ?>
        </ul>
        <ul class="nav navbar-nav navbar-right navbar-right-no-mar navbar-nav-lg">
          <?php if($this->session->userdata('logged_in') != TRUE){?>
            <li><a href="<?php echo site_url('secondarycontroller'); ?>"><span >Hello, Sign in</span>Your Account</a>
            </li>
          <?php } else if($this->session->userdata('logged_in') == TRUE) {?>
            <li class="dropdown"><a href="#" data-toggle="dropdown"><span>Welcome</span><?= $this->session->userdata('name') ?></a>
              <ul class="dropdown-menu">
                <li><a href= "<?php echo site_url('secondarycontroller/profile');?>"><i class="fa fa-user"></i> Manage my account</a></li>
                <li><a href="#"><i class="fa fa-inbox"></i> My Orders</a></li>
                <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo site_url('secondarycontroller/logout');?>"><i class="fa fa-sign-out"></i> Logout</a></li>
              </ul>
            </li>
          <?php } ?>
          <li><a href="<?php echo site_url('listproductscontroller/shoppingcart') ?>"><span ></span><i class="fa fa-shopping-cart"></i></a>
          </li>
          <li class="dropdown"><a href="<?php echo site_url('#') ?>"><span ></span><i class="fa fa-globe"></i></a>
            <ul class="dropdown-menu dropdown-menu-shipping-cart">
              <li>
                <div class="dropdown-menu-shipping-cart-inner">
                  <p class="dropdown-menu-shipping-cart-price">December 13, 2016</p>
                  <p class="dropdown-menu-shipping-cart-item"><a href="#">Yow Nigga an delivery mo ky naa na! #csgo</a></p>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
