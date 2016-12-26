<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<nav class="navbar navbar-inverse navbar-main navbar-pad">
  <div class="container">
     <!--NAVIGATION LOGO-->
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

            <!--SELECT VENDOR BUTTON-->
            <a href="<?php echo site_url('secondarycontroller/selectmarket'); ?>">
             <img class="navbar-theme-img" src="<?php echo base_url().'assets/img/select_vendor_img.png';?>" alt="Image Alternative text" title="Select Market" />
            </a>

            <!--CHANGE VENDOR HOVER BUTTON-->
             <!-- <div id="anchor-div">
                 <img class="navbar-theme-img" src="<?php echo base_url().'assets/img/select_vendor_img.png';?>" alt="Image Alternative text" title="Select Market" />
                 <a href="<?php echo site_url('secondarycontroller/profile'); ?>"><p id="anchor-element" ><img img class="navbar-theme-img" src="<?php echo base_url().'assets/img/vendor.png';?>" alt="Image Alternative text" title="Select Market" /></p></a>
             </div>

             <div id="anchor-div-navbar">
             <img img class="navbar-theme-img" src="<?php echo base_url().'assets/img/vendor.png';?>">
                 <a href="<?php echo site_url('secondarycontroller/profile'); ?>"><p id="anchor-element-navbar" ><img class="navbar-theme-img" src="<?php echo base_url().'assets/img/select_vendor_img.png';?>" alt="Image Alternative text" title="Select Market" /></p></a>
             </div> -->

         </div>

    </div>
</nav>

<nav class="navbar-inverse navbar-main yamm">
            <div class="container">
                <div class="collapse navbar-collapse navbar-collapse-no-pad" id="main-nav-collapse">
                    <ul class="nav navbar-nav navbar-nav-lg">
                        <li class="dropdown yamm-fw"><a href="#"><span>&nbsp;</span>Fruits<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Apple</a>
                                                </li>
                                                <li><a href="#">Avocado</a>
                                                </li>
                                                <li><a href="#">Banana</a>
                                                </li>
                                                <li><a href="#">Citrus</a>
                                                </li>
                                                <li><a href="#">Coach</a>
                                                </li>
                                                <li><a href="#">Adidas</a>
                                                </li>
                                                <li><a href="#">Zara</a>
                                                </li>
                                                <li><hr/><a href="<?php echo site_url('listproductscontroller')?>">View All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <img class="dropdown-menu-theme-image" src="<?php echo base_url().'assets/img/fruit_banner.png';?>" alt="Image Alternative text" title="Image Title" />
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw"><a href="#"><span>&nbsp;</span>Vegetables<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Apple</a>
                                                </li>
                                                <li><a href="#">Avocado</a>
                                                </li>
                                                <li><a href="#">Banana</a>
                                                </li>
                                                <li><a href="#">Citrus</a>
                                                </li>
                                                <li><a href="#">Coach</a>
                                                </li>
                                                <li><a href="#">Adidas</a>
                                                </li>
                                                <li><a href="#">Zara</a>
                                                </li>
                                                <li><a href="#">View All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <img class="dropdown-menu-theme-image" src="<?php echo base_url().'assets/img/vegetable_banner.png';?>" alt="Image Alternative text" title="Image Title" />
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw"><a href="#"><span>&nbsp;</span>Meats<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Apple</a>
                                                </li>
                                                <li><a href="#">Avocado</a>
                                                </li>
                                                <li><a href="#">Banana</a>
                                                </li>
                                                <li><a href="#">Citrus</a>
                                                </li>
                                                <li><a href="#">Coach</a>
                                                </li>
                                                <li><a href="#">Adidas</a>
                                                </li>
                                                <li><a href="#">Zara</a>
                                                </li>
                                                <li><a href="#">View All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <img class="dropdown-menu-theme-image" src="<?php echo base_url().'assets/img/meat_banner.png';?>" alt="Image Alternative text" title="Image Title" />
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw"><a href="#"><span>&nbsp;</span>Seafoods<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Apple</a>
                                                </li>
                                                <li><a href="#">Avocado</a>
                                                </li>
                                                <li><a href="#">Banana</a>
                                                </li>
                                                <li><a href="#">Citrus</a>
                                                </li>
                                                <li><a href="#">Coach</a>
                                                </li>
                                                <li><a href="#">Adidas</a>
                                                </li>
                                                <li><a href="#">Zara</a>
                                                </li>
                                                <li><a href="#">View All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <img class="dropdown-menu-theme-image" src="<?php echo base_url().'assets/img/seafood_banner.png';?>" alt="Image Alternative text" title="Image Title" />
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw"><a href="#"><span>&nbsp;</span>Dairy<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Apple</a>
                                                </li>
                                                <li><a href="#">Avocado</a>
                                                </li>
                                                <li><a href="#">Banana</a>
                                                </li>
                                                <li><a href="#">Citrus</a>
                                                </li>
                                                <li><a href="#">Coach</a>
                                                </li>
                                                <li><a href="#">Adidas</a>
                                                </li>
                                                <li><a href="#">Zara</a>
                                                </li>
                                                <li><a href="#">View All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <img class="dropdown-menu-theme-image" src="<?php echo base_url().'assets/img/dairy_banner.png';?>" alt="Image Alternative text" title="Image Title" />
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw"><a href="#"><span>&nbsp;</span>Beverage<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Apple</a>
                                                </li>
                                                <li><a href="#">Avocado</a>
                                                </li>
                                                <li><a href="#">Banana</a>
                                                </li>
                                                <li><a href="#">Citrus</a>
                                                </li>
                                                <li><a href="#">Coach</a>
                                                </li>
                                                <li><a href="#">Adidas</a>
                                                </li>
                                                <li><a href="#">Zara</a>
                                                </li>
                                                <li><a href="#">View All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <img class="dropdown-menu-theme-image" src="<?php echo base_url().'assets/img/beverage_banner.png';?>" alt="Image Alternative text" title="Image Title" />
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw"><a href="#"><span>&nbsp;</span>Beer & Wine<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Apple</a>
                                                </li>
                                                <li><a href="#">Avocado</a>
                                                </li>
                                                <li><a href="#">Banana</a>
                                                </li>
                                                <li><a href="#">Citrus</a>
                                                </li>
                                                <li><a href="#">Coach</a>
                                                </li>
                                                <li><a href="#">Adidas</a>
                                                </li>
                                                <li><a href="#">Zara</a>
                                                </li>
                                                <li><a href="#">View All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <img class="dropdown-menu-theme-image" src="<?php echo base_url().'assets/img/wine_banner.png';?>" alt="Image Alternative text" title="Image Title" />
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw"><a href="#"><span>&nbsp;</span>Grocery<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Apple</a>
                                                </li>
                                                <li><a href="#">Avocado</a>
                                                </li>
                                                <li><a href="#">Banana</a>
                                                </li>
                                                <li><a href="#">Citrus</a>
                                                </li>
                                                <li><a href="#">Coach</a>
                                                </li>
                                                <li><a href="#">Adidas</a>
                                                </li>
                                                <li><a href="#">Zara</a>
                                                </li>
                                                <li><a href="#">View All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <img class="dropdown-menu-theme-image" src="<?php echo base_url().'assets/img/grocery_banner.png';?>" alt="Image Alternative text" title="Image Title" />
                                </li>
                            </ul>
                        </li>
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
                                        <p class="dropdown-menu-shipping-cart-item"><a href="#">Yow Nigga an delivery mo ky naa na! #csgo</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
