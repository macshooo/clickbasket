<body>
    <div class="global-wrapper clearfix" id="global-wrapper">
        <div class="container">
            <header class="page-header">
                <ol class="breadcrumb page-breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Electronics</a>
                    </li>
                    <li><a href="#">Computers/Tables</a>
                    </li>
                    <li class="active"><?php echo $product_info->product_name; ?></li>
                </ol>
            </header>
            <div class="row">
                <div class="col-md-7">
                    <div class="jqzoom-left clearfix">
                        <ul class="jqzoom-list">
                            <li>
                                <a class="zoomThumbActive" href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: 'img/500x500.png', largeimage: 'img/800x800.png'}">
                                    <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: 'img/500x500.png', largeimage: 'img/800x800.png'}">
                                    <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: 'img/500x500.png', largeimage: 'img/800x800.png'}">
                                    <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: 'img/500x500.png', largeimage: 'img/800x800.png'}">
                                    <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                </a>
                            </li>
                        </ul>
                        <div class="product-page-product-wrap jqzoom-stage jqzoom-stage-lg">
                            <div class="clearfix">
                                <a href="img/800x800.png" id="jqzoom" data-rel="gal-1">
                                    <img src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="_box-highlight">
                        <ul class="product-page-product-rating">
                            <li class="rated"><i class="fa fa-star"></i>
                            </li>
                            <li class="rated"><i class="fa fa-star"></i>
                            </li>
                            <li class="rated"><i class="fa fa-star"></i>
                            </li>
                            <li class="rated"><i class="fa fa-star"></i>
                            </li>
                            <li class="rated"><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <p class="product-page-product-rating-sign"><a href="#">238 customer reviews</a>
                        </p>
                        <?php 
                            if ($product_info->product_quantity == '0'){
                                echo '<span class="label label-danger">No Stock</span>';
                            }else if($product_info->product_quantity <= '5'){
                                echo '<span class="label label-warning">Low Stock</span>';
                            }
                        ?>
                        <h1><?php echo $product_info->product_name; ?></h1>
                        <p class="product-page-price">$<?php echo $product_info->product_price; ?></p>
                        <p class="text-muted text-sm">Free Shipping</p>
                        <p class="product-page-desc-lg">Meet a stunning mobile computing experience in a very thin and lightweight Apple tablet PC. The iPad Air is powerful and efficient at the same time, thanks to its A7 chip and M7 motion coprocessor, on which the iOS 7 is running.</p>
                        <ul
                        class="product-page-option-list">
                            <li class="clearfix">
                                <h5 class="product-page-option-title">Color</h5>
                                <select class="product-page-option-select">
                                    <option selected>White</option>
                                    <option>Black</option>
                                    <option>Gold</option>
                                </select>
                            </li>
                            </ul>
                            <ul class="product-page-actions-list">
                                <li class="product-page-qty-item">
                                    <button class="product-page-qty product-page-qty-minus">-</button>
                                    <input class="product-page-qty product-page-qty-input qty " id="qty_<?php echo $product_info->product_id;?>" type="text" value="1" />
                                    <button class="product-page-qty product-page-qty-plus">+</button>
                                </li>
                                <li>
                                <?php if ($product_info->product_quantity > '1'){?>
                                    <button class="btn btn-lg btn-primary" value="<?php echo $product_info->product_id;?>" name="<?php echo $product_info->product_name;?>" id = "addtocart"><i class="fa fa-shopping-cart"></i>Add to Cart</button><?php
                                }?>
                                </li>
                                <li><a class="btn btn-lg btn-default" href="#"><i class="fa fa-star"></i>Wishlist</a>
                                </li>
                            </ul>
                    </div>
                    <br/>
                </div>
            </div>
            <div class="gap"></div>
            <div class="tabbable product-tabs">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#tab-1" data-toggle="tab">Description</a>
                    </li>
                    <li><a href="#tab-2" data-toggle="tab">Additional Information</a>
                    </li>
                    <li><a href="#tab-3" data-toggle="tab">Rating and Reviews</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-1">
                        <p>Molestie dictum facilisis faucibus urna proin tristique senectus penatibus montes in dolor potenti dolor maecenas sagittis mollis sed interdum lacus consectetur varius tempor litora tristique potenti congue pulvinar tempus posuere</p>
                        <p>Senectus nisl mattis ad eleifend torquent quisque elit auctor vel</p>
                    </div>
                    <div class="tab-pane fade" id="tab-2">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Weight:</td>
                                    <td>0.3 kg</td>
                                </tr>
                                <tr>
                                    <td>Dimensions:</td>
                                    <td>20 ½" W x 12" H x 10 ¾" D with 9" strap drop and 52" removable, adjustable strap</td>
                                </tr>
                                <tr>
                                    <td>Materials:</td>
                                    <td>100% Cotton</td>
                                </tr>
                                <tr>
                                    <td>Care Tips:</td>
                                    <td>Machine wash cold, gentle cycle, only non-chlorine bleach when needed; line dry</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="tab-3">
                        <div class="row">
                            <div class="col-md-8">
                                <article class="product-review">
                                    <div class="product-review-author">
                                        <img class="product-review-author-img" src="img/70x70.png" alt="Image Alternative text" title="Image Title" />
                                    </div>
                                    <div class="product-review-content-full">
                                        <h5 class="product-review-title">Terrific Buy!</h5>
                                        <ul class="product-page-product-rating">
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <p class="product-review-meta">by Minnie Aviles on 08/14/2015</p>
                                        <p class="product-review-body">Eleifend ante sollicitudin lorem convallis consequat libero lacus rutrum nec lacinia dis rutrum cubilia condimentum elementum eget aliquam fusce molestie</p>
                                        <p class="text-success"><strong><i class="fa fa-check"></i> I would recommend this to a friend!</strong>
                                        </p>
                                        <ul class="list-inline product-review-actions">
                                            <li><a href="#"><i class="fa fa-flag"></i> Flag this review</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-comment"></i> Comment review</a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <article class="product-review">
                                    <div class="product-review-author">
                                        <img class="product-review-author-img" src="img/70x70.png" alt="Image Alternative text" title="Image Title" />
                                    </div>
                                    <div class="product-review-content-full">
                                        <h5 class="product-review-title">Too Big. Unusable.</h5>
                                        <ul class="product-page-product-rating">
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <p class="product-review-meta">by Elizabeth Wallace on 08/14/2015</p>
                                        <p class="product-review-body">Rutrum feugiat tristique ac curae hac aptent cursus feugiat aliquam pharetra dis mattis dolor primis posuere</p>
                                        <p class="text-danger"><strong><i class="fa fa-close"></i> No, I would not recommend this to a friend.</strong>
                                        </p>
                                        <ul class="list-inline product-review-actions">
                                            <li><a href="#"><i class="fa fa-flag"></i> Flag this review</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-comment"></i> Comment review</a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <article class="product-review">
                                    <div class="product-review-author">
                                        <img class="product-review-author-img" src="img/70x70.png" alt="Image Alternative text" title="Image Title" />
                                    </div>
                                    <div class="product-review-content-full">
                                        <h5 class="product-review-title">Worth it</h5>
                                        <ul class="product-page-product-rating">
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <p class="product-review-meta">by Brandon Burgess on 08/14/2015</p>
                                        <p class="product-review-body">Vitae phasellus lectus primis lectus class conubia id magna cursus conubia proin venenatis suscipit aliquet massa dui odio</p>
                                        <p class="text-success"><strong><i class="fa fa-check"></i> I would recommend this to a friend!</strong>
                                        </p>
                                        <ul class="list-inline product-review-actions">
                                            <li><a href="#"><i class="fa fa-flag"></i> Flag this review</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-comment"></i> Comment review</a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-4">
                                <h3 class="product-tab-rating-title">Overall Customer Rating:</h3>
                                <ul class="product-page-product-rating product-rating-big">
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="count">4.9</li>
                                </ul><small>238 customer reviews</small>
                                <p><strong>98%</strong> of reviewers would recommend this product</p><a class="btn btn-primary" href="#">Write a Review</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="category-pagination-sign">238 customer reviews found. Showing 1 - 5</p>
                            </div>
                            <div class="col-md-6">
                                <nav>
                                    <ul class="pagination category-pagination pull-right">
                                        <li class="active"><a href="#">1</a>
                                        </li>
                                        <li><a href="#">2</a>
                                        </li>
                                        <li><a href="#">3</a>
                                        </li>
                                        <li><a href="#">4</a>
                                        </li>
                                        <li><a href="#">5</a>
                                        </li>
                                        <li class="last"><a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <h3 class="widget-title">You Might Also Like</h3>
            <div class="row" data-gutter="15">
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels"></ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
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
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">Google Nexus 6 XT1103 4G LTE - 32GB - Blue Factory Unlocked GSM</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$124</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels"></ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
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
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">Samsung Galaxy S6 Edge+ Factory Unlocked GSM 32GB</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$107</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels">
                            <li>stuff pick</li>
                        </ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
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
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">Nikon D5200 24.1 MP Digital SLR Camera - Black (Kit w/ 18-55 VR Lens)</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$148</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels">
                            <li>-60%</li>
                            <li>stuff pick</li>
                        </ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
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
                            <h5 class="product-caption-title">Apple iPhone 5s 16GB Factory Unlocked Smartphone Space Gray / Silver / Gold</h5>
                            <div class="product-caption-price"><span class="product-caption-price-old">$103</span><span class="product-caption-price-new">$42</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-gutter="15">
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels">
                            <li>hot</li>
                        </ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
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
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">Samsung Galaxy Note 4 IV 4G FACTORY UNLOCKED Black or White</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$119</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>3 left</li>
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels">
                            <li>-10%</li>
                        </ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
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
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">HTC One M8 32GB Factory Unlocked Smartphone  Gold / Silver Gray</h5>
                            <div class="product-caption-price"><span class="product-caption-price-old">$121</span><span class="product-caption-price-new">$109</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels">
                            <li>stuff pick</li>
                        </ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
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
                            <h5 class="product-caption-title">Lenovo ThinkPad 11e 11.6" Notebook, AMD A4-6210 1.8GHz, 4GB RAM, 500GBHDD, W7Pro</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$90</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels">
                            <li>stuff pick</li>
                            <li>hot</li>
                        </ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
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
                            <h5 class="product-caption-title">LG G3 VS985 - 32GB - Verizon Smartphone - Metallic Black or Silk White - Great</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$104</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>3 left</li>
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-gutter="15">
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels"></ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/461x500.png" alt="Image Alternative text" title="Image Title" />
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
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">GoPro HERO4 Black 4K Action Camera Hero 4 Surf Camcorder . CHDHX-401. NEW</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$78</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>2 left</li>
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels">
                            <li>stuff pick</li>
                        </ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
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
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">Apple 11.6" MacBook Air Notebook Computer MJVM2LL/A (Early 2015)</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$51</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels">
                            <li>-20%</li>
                        </ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
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
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">HP EliteBook 8460p 2.7GHz i7 8GB 160GB DVD Win 7 Pro 64 Laptop Computer CAM B</h5>
                            <div class="product-caption-price"><span class="product-caption-price-old">$78</span><span class="product-caption-price-new">$63</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>5 left</li>
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels"></ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
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
                            <h5 class="product-caption-title">Apple iPhone 5c - 16GB - GSM Factory Unlocked White Blue Green Pink Yellow</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$116</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>
    </div>