 <body>
     <div class="global-wrapper clearfix" id="global-wrapper">
        <div class="container-fluid">
            <div class="row">
            <!--PROFILE MENU START-->
            <?php $this->load->view('navigation/profilemenu');?>
            <!--PROFILE MENU END-->

                    <div class="col-md-9">
                      <header class="page-header">
                      </header>
                        <div class="box-lg">
                          <h3>My Wishlist</h3>
                            <h5></h5>
                              <hr />
                             <div class="owl-carousel owl-loaded owl-nav-out" data-options='{"items":5,"loop":true,"nav":true}'>
                                <div class="owl-item">
                                    <div class="product  owl-item-slide">
                                        <ul class="product-labels"></ul>
                                        <div class="product-img-wrap">
                                            <img class="product-img" src="<?php echo base_url().'assets/img/luz.jpg';?>" alt="Image Alternative text" title="Image Title" />
                                        </div>
                                        <a class="product-link" href="#"></a>
                                        <div class="product-caption">
                                            <ul class="product-caption-rating">
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                            <h5 class="product-caption-title">Kopiko</h5>
                                            <div class="product-caption-price"><span class="product-caption-price-new">59</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        <div class="gap gap-small"></div>
    </div>
</body>
