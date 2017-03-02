<div class="global-wrapper clearfix" id="global-wrapper">
  <div class="container">
    <header class="page-header">
      <ol class="breadcrumb page-breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#"><?php echo $product_info->category_name;?></a></li>
        <li><a href="#"><?php echo $product_info->subcategory_name;?></a></li>
        <li class="active"><?php echo $product_info->prod_name;?></li>
      </ol>
    </header>
    <div class="row">
      <div class="col-md-7">
        <div class="product-page-product-wrap jqzoom-stage jqzoom-stage-lg">
          <div class="clearfix">
            <a href="<?= $this->config->item('panel_url').'assets/images/prod_image/'.$product_info->storeprod_image?>" id="jqzoom" data-rel="gal-1">
              <img src="<?= $this->config->item('panel_url').'assets/images/prod_image/'.$product_info->storeprod_image?>" alt="Image Alternative text" title="Image Title" />
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="_box-highlight">
          <div class="row">
            <fieldset class="rating">
              <input type="radio" id="star5" onclick="rateThis(5,<?php echo $product_info->storeprodsub_id;?>);" name="rating" value="5" <?= (round($productrating_info->Ratings)=='5')?'checked':''?>/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
              <input type="radio" id="star4" onclick="rateThis(4,<?php echo $product_info->storeprodsub_id;?>);" name="rating" value="4" <?= (round($productrating_info->Ratings)=='4')?'checked':''?>/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
              <input type="radio" id="star3" onclick="rateThis(3,<?php echo $product_info->storeprodsub_id;?>);" name="rating" value="3" <?= (round($productrating_info->Ratings)=='3')?'checked':''?>/><label class = "full" for="star3" title="Meh - 3 stars"></label>
              <input type="radio" id="star2" onclick="rateThis(2,<?php echo $product_info->storeprodsub_id;?>);" name="rating" value="2" <?= (round($productrating_info->Ratings)=='2')?'checked':''?>/><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
              <input type="radio" id="star1" onclick="rateThis(1,<?php echo $product_info->storeprodsub_id;?>);" name="rating" value="1" <?= (round($productrating_info->Ratings)=='1')?'checked':''?>/><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
            </fieldset>
          </div>
          <p>Customer reviews: <?= $productrating_count?></p>
          <p class="product-page-product-rating-sign"><a href="#"></a></p>
          <?php
            if ($product_info->BALANCE == '0'){
              echo '<span class="label label-danger">No Stock</span>';
            }else if($product_info->BALANCE <= '20'){
              echo '<span class="label label-warning">Low Stock</span>';
            }
          ?>
          <h2><?= $product_info->prod_name;?></h2>
          <?php if (isset($discounts)){
            $date = date("Y-m-d");
            if($discounts->date_start <= $date && $discounts->date_end >= $date){
              if($discounts->discount_type == 'percentage'){
                $discount = $discounts->discount / 100;
                $discountrate = $product_info->storeprod_price * $discount;
                $newprice = $product_info->storeprod_price - $discountrate;
                echo '<span class="label label-danger">'.floor($discounts->discount).'% off!</span><br>';
                echo '<del>&#8369;'.$product_info->storeprod_price.'</del>';
                echo '<p class="product-page-price" id="price_'.$product_info->prod_id.'">&#8369;'.round($newprice, 2).'</p>';
              }else{
                $newprice = $product_info->storeprod_price - $discounts->discount;
                echo '<span class="label label-danger">&#8369;'.$discounts->discount.' off!</span><br>';
                echo '<del>&#8369;'.$product_info->storeprod_price.'</del>';
                echo '<p class="product-page-price" id="price_'.$product_info->prod_id.'">&#8369;'.round($newprice, 2).'</p>';
              }
            }else{
              echo '<p class="product-page-price" id="price_'.$product_info->prod_id.'">&#8369;'.$product_info->storeprod_price.'</p>';
            }
          }else{
            echo '<p class="product-page-price" id="price_'.$product_info->prod_id.'">&#8369;'.$product_info->storeprod_price.'</p>';
          }?>
          <!-- <p class="text-muted text-sm">Free Shipping</p> -->
          <p class="product-page-desc-lg"><?= $product_info->prod_desc;?></p>
          <ul class="product-page-actions-list">
            <li class="product-page-qty-item">
              <button class="product-page-qty product-page-qty-minus">-</button>
              <input class="product-page-qty product-page-qty-input qty" id="qty_<?php echo $product_info->prod_id;?>" type="text" value="1" />
              <button class="product-page-qty product-page-qty-plus">+</button>
              <!--Identifying the current stock-->
              <input type="hidden" id="max_<?= $product_info->storeprod_id;?>" value="<?= $product_info->BALANCE; ?>">
            </li>
            <li>
              <?php if ($product_info->BALANCE > '1'){ ?>
                <button class="btn btn-lg btn-primary" value="<?= $product_info->prod_id;?>" name="<?= $product_info->prod_name;?>" id = "addtocart"><i class="fa fa-shopping-cart"></i>Add to Cart</button><?php
              } ?>
            </li>
            <!-- <li><a class="btn btn-lg btn-default" href="#"><i class="fa fa-star"></i>Wishlist</a></li> -->
          </ul>
        </div>
        <br/>
      </div>
    </div>
    <div class="gap"></div>
    <!-- <div class="tabbable product-tabs">
      <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#tab-1" data-toggle="tab">Description</a></li>
        <li><a href="#tab-2" data-toggle="tab">Additional Information</a></li>
        <li><a href="#tab-3" data-toggle="tab">Rating and Reviews</a></li>
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
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                  </ul>
                  <p class="product-review-meta">by Minnie Aviles on 08/14/2015</p>
                  <p class="product-review-body">Eleifend ante sollicitudin lorem convallis consequat libero lacus rutrum nec lacinia dis rutrum cubilia condimentum elementum eget aliquam fusce molestie</p>
                  <p class="text-success"><strong><i class="fa fa-check"></i> I would recommend this to a friend!</strong></p>
                  <ul class="list-inline product-review-actions">
                    <li><a href="#"><i class="fa fa-flag"></i> Flag this review</a></li>
                    <li><a href="#"><i class="fa fa-comment"></i> Comment review</a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <h3 class="product-tab-rating-title">Overall Customer Rating:</h3>
              <ul class="product-page-product-rating product-rating-big">
                <li class="rated"><i class="fa fa-star"></i></li>
                <li class="rated"><i class="fa fa-star"></i></li>
                <li class="rated"><i class="fa fa-star"></i></li>
                <li class="rated"><i class="fa fa-star"></i></li>
                <li class="rated"><i class="fa fa-star"></i></li>
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
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li class="last"><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="gap"></div> -->
<!--
    <h3 class="widget-title">Related Products</h3>
      <div class="owl-carousel owl-loaded owl-nav-out" data-options='{"items":5,"loop":true,"nav":true}'>
        <div class="owl-item">
          <div class="product  owl-item-slide">
            <ul class="product-labels"></ul>
            <div class="product-img-wrap">
              <img class="product-img" src="<?php echo base_url().'assets/img/product_img/3.png'; ?>" alt="Image Alternative text" title="Image Title" />
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
              <h5 class="product-caption-title">Apple</h5>
              <div class="product-caption-price"><span class="product-caption-price-new">$99</span>
              </div>
              <ul class="product-caption-feature-list">
                <li>1 left</li>
                <li>Free Shipping</li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->
      <div class="gap"></div>
  </div>
  <div class="gap"></div>
</div>
