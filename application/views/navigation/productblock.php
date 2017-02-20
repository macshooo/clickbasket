<?php foreach ($listproducts as $product):?>
  <div class="col-md-4">
    <div class="product">
      <?php if (isset($product->discount)){
        echo '<ul class="product-labels">
                <li>'.$product->discount.'% off</li>
              </ul>';
        }?>
      <div class="product-img-wrap">
        <img class="product-img-primary" src="<?= $this->config->item('panel_url').'assets/images/prod_image/'.$product->storeprod_image?>" alt="Image Alternative text" title="Image Title" />
        <img class="product-img-alt" src="<?= $this->config->item('panel_url').'assets/images/prod_image/'.$product->storeprod_image?>" alt="Image Alternative text" title="Image Title" />
      </div>
      <a class="product-link" href="<?php echo site_url('listproductscontroller/product/index?id='.$product->prod_id); ?>"></a>
      <div class="product-caption">
        <ul class="product-caption-rating">
          <li <?= (round($product->storeprod_rating)>='1')? 'class="rated";':''?>/><i class="fa fa-star"></i></li>
          <li <?= (round($product->storeprod_rating)>='2')? 'class="rated";':''?>/><i class="fa fa-star"></i></li>
          <li <?= (round($product->storeprod_rating)>='3')? 'class="rated";':''?>/><i class="fa fa-star"></i></li>
          <li <?= (round($product->storeprod_rating)>='4')? 'class="rated";':''?>/><i class="fa fa-star"></i></li>
          <li <?= (round($product->storeprod_rating)>='5')? 'class="rated";':''?>/><i class="fa fa-star"></i></li>
        </ul>
        <h5 class="product-caption-title"><?= $product->prod_name;?></h5>
        <?php if (isset($product->discount)){
                $discount = $product->discount / 100;
                $discountrate = $product->storeprod_price * $discount;
                $newprice = $product->storeprod_price - $discountrate;
                echo '<div class="product-caption-price">
                        <del>&#8369;'.$product->storeprod_price.'</del>
                        &#8369;<span class="product-caption-price-new">'.$newprice.'</span>
                        </div>';
                }else{
                  echo '<div class="product-caption-price">
                          &#8369;<span class="product-caption-price-new">'.$product->storeprod_price.'</span>
                        </div>';
          }?>
        <!-- <ul class="product-caption-feature-list">
          <li>Free Shipping</li>
        </ul> -->
      </div>
    </div>
  </div>
<?php endforeach;?>
