<div class="global-wrapper clearfix" id="global-wrapper">
  <div class="owl-carousel owl-loaded owl-nav-dots-inner" data-options='{"items":1,"loop":true,"autoplay":true,"autoplayTimeout":5000}'>
    <div class="owl-item">
      <div class="slider-item" style="background-image:url(<?php echo base_url().'assets/img/market_slide_banner/1.png';?>);">
        <div class="container">
          <div class="slider-item-inner">
            <div class="slider-item-caption-left slider-item-caption-white" style="text-shadow: 2px 2px 4px #000000;">
              <p class="slider-item-caption-desc">Welcome To</p>
              <h4 class="slider-item-caption-title">Click<b style="color:#E65100">Basket</b></h4>
            </div>
            <!-- <img class="slider-item-img-right" src="img/test_slider/14-i.png" alt="Image Alternative text" title="Image Title" style="top: 55%; width: 56%;" /> -->
          </div>
        </div>
      </div>
    </div>
        <div class="owl-item">
      <div class="slider-item" style="background-image:url(<?php echo base_url().'assets/img/market_slide_banner/2.png';?>);">
        <div class="container">
          <div class="slider-item-inner">
            <div class="slider-item-caption-left slider-item-caption-white" style="text-shadow: 2px 2px 4px #000000;">
              <!-- <p class="slider-item-caption-desc">Sky's the limit!</p> -->
              <h4 class="slider-item-caption-title">Access to all <b style="color:#E65100">Devices</b></h4>
            </div>
            <!-- <img class="slider-item-img-right" src="img/test_slider/14-i.png" alt="Image Alternative text" title="Image Title" style="top: 55%; width: 56%;" /> -->
          </div>
        </div>
      </div>
    </div>
        <div class="owl-item">
      <div class="slider-item" style="background-image:url(<?php echo base_url().'assets/img/market_slide_banner/3.png';?>);">
        <div class="container">
          <div class="slider-item-inner">
            <div class="slider-item-caption-left slider-item-caption-white" style="text-shadow: 2px 2px 4px #000000;">
              <p class="slider-item-caption-desc"></p>
              <h4 class="slider-item-caption-title">Register For <b style="color:#E65100">Free</b></h4>
             <a class="btn btn-lg btn-ghost btn-white" href="<?php echo site_url('secondarycontroller/register'); ?>">Register Now</a>
            </div>
            <!-- <img class="slider-item-img-right" src="img/test_slider/14-i.png" alt="Image Alternative text" title="Image Title" style="top: 55%; width: 56%;" /> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="gap"></div>
  <div class="container">
        <hr>

        <h3 class="widget-title">Top By Rating</h3>
        <div class="owl-carousel owl-loaded owl-nav-out" data-options='{"items":5,"loop":true,"nav":true,"autoplay":true,"autoplayTimeout":5000}'>
          <?php $this->load->view('navigation/homeproduct');?>
        </div>
        <div class="gap"></div>
            <!-- <div class="row" data-gutter="15">
                <div class="col-md-4">
                    <div class="banner" style="background-color:#83599A;">
                        <a class="banner-link" href="#"></a>
                        <div class="banner-caption-top-left">
                            <h5 class="banner-title">Backpack Collection</h5>
                            <p class="banner-desc">Don't Be Vague. Ask for Backpack .</p>
                            <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                            </p>
                        </div>
                        <img class="banner-img" src="<?php echo base_url().'assets/img/test_banner/1-i.png';?>" alt="Image Alternative text" title="Image Title" style="bottom: -8px; right: -32px;" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner" style="background-color:#EF4D9C;">
                        <a class="banner-link" href="#"></a>
                        <div class="banner-caption-top-right">
                            <h5 class="banner-title">Best 2015 Tablets</h5>
                            <p class="banner-desc">Double the Pleasure, Double the Tablets.</p>
                            <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                            </p>
                        </div>
                        <img class="banner-img" src="<?php echo base_url().'assets/img/test_banner/2-i.png';?>" alt="Image Alternative text" title="Image Title" style="bottom: -22px; left: 0; width: 235px;" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner" style="background-color:#FEA92E;">
                        <a class="banner-link" href="#"></a>
                        <div class="banner-caption-bottom-left">
                            <h5 class="banner-title">Top Glasses</h5>
                            <p class="banner-desc">My Goodness, My Glasses!</p>
                            <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                            </p>
                        </div>
                        <img class="banner-img" src="<?php echo base_url().'assets/img/test_banner/3-i.png';?>" alt="Image Alternative text" title="Image Title" style="top: -4px; right: -15px; width: 220px;" />
                    </div>
                </div>
            </div>
            <div class="gap"></div>
       <!--  <div class="gap"></div>  -->
    </div>
