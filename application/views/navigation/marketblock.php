<?php if (isset($marketlist)){
  foreach ($marketlist as $market){ ?>
  <div class="col-md-4">
    <div class="banner banner-o-hid" style="background-image:url(<?= $this->config->item('panel_url').'assets/images/store_image/'.$market->store_image?>.)">
      <!-- <div class="banner banner-o-hid" style="background-image:url(<?php echo base_url('assets/img/711_banner.png');?>)"> -->
    <!-- <div class="banner banner-o-hid" style="background-color:#009688;"> -->
      <a class="banner-link" href="<?php $attributes = array('class' => 'popup-text'); echo site_url('maincontroller/getMarket?id='.$market->store_id); ?>"></a>
      <div class="banner-caption-left">
        <h5 class="banner-title"><?php echo $market->store_name;?></h5>
        <p class="banner-desc"><?php echo $market->store_address;?></p>
        <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i></p>
      </div>
    </div>
  </div>
<?php }
  }?>
