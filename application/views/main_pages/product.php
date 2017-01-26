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
              <a href="<?php echo base_url('assets/img/500x500.png');?>" id="jqzoom" data-rel="gal-1">
                <img src="<?php echo base_url('assets/img/500x500.png');?>" alt="Image Alternative text" title="Image Title" />
              </a>
            </div>
          </div>

      </div>
      <div class="col-md-5">
        <div class="_box-highlight">
          <ul class="product-page-product-rating">
            <li class="rated"><i class="fa fa-star"></i></li>
            <li class="rated"><i class="fa fa-star"></i></li>
            <li class="rated"><i class="fa fa-star"></i></li>
            <li class="rated"><i class="fa fa-star"></i></li>
            <li class="rated"><i class="fa fa-star"></i></li>
          </ul>
          <p class="product-page-product-rating-sign"><a href="#">238 customer reviews</a></p>
          <?php
            if ($product_info->inventory_stock == '0'){
              echo '<span class="label label-danger">No Stock</span>';
            }else if($product_info->inventory_stock <= '5'){
              echo '<span class="label label-warning">Low Stock</span>';
            }
          ?>
          <h1><?php echo $product_info->prod_name; ?></h1>
          <p class="product-page-price">&#8369;<?php echo $product_info->storeprod_price; ?></p>
          <p class="text-muted text-sm">Free Shipping</p>
          <p class="product-page-desc-lg">Meet a stunning mobile computing experience in a very thin and lightweight Apple tablet PC. The iPad Air is powerful and efficient at the same time, thanks to its A7 chip and M7 motion coprocessor, on which the iOS 7 is running.</p>
          <ul class="product-page-actions-list">
            <li class="product-page-qty-item">
              <button class="product-page-qty product-page-qty-minus">-</button>
              <input class="product-page-qty product-page-qty-input qty " id="qty_<?php echo $product_info->storeprod_id;?>" type="text" value="1" />
              <button class="product-page-qty product-page-qty-plus">+</button>
            </li>
            <li>
              <?php if ($product_info->inventory_stock > '1'){ ?>
                <button class="btn btn-lg btn-primary" value="<?php echo $product_info->storeprod_id;?>" name="<?php echo $product_info->prod_name;?>" id = "addtocart"><i class="fa fa-shopping-cart"></i>Add to Cart</button><?php
              } ?>
            </li>
            <li><a class="btn btn-lg btn-default" href="#"><i class="fa fa-star"></i>Wishlist</a></li>
          </ul>
        </div>
        <br/>
      </div>
    </div>
    <div class="gap"></div>
    <div class="tabbable product-tabs">
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
    <div class="gap"></div>
  </div>
  <div class="gap"></div>
</div>
