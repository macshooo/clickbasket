<?php foreach ($listproducts as $product): $date = date("Y-m-d");?>
  <div class="col-md-4">
    <div class="product">
      <?php if (isset($product->discount)){
        if($product->date_start <= $date && $product->date_end >= $date){
          if($product->discount_type == 'percentage'){
            echo '<ul class="product-labels">
                    <li>'.round($product->discount).'% off</li>
                  </ul>';
          }else{
            echo '<ul class="product-labels">
                    <li>&#8369;'.$product->discount.' off</li>
                  </ul>';
          }
        }
      }?>
      <div class="product-img-wrap">
        <img class="product-img-primary" style="max-width:200px; max-height:200px;" src="<?= $this->config->item('panel_url').'assets/images/prod_image/'.$product->storeprod_image?>" alt="Image Alternative text" title="Image Title" />
        <img class="product-img-alt" style="max-width:200px; max-height:200px" src="<?= $this->config->item('panel_url').'assets/images/prod_image/'.$product->storeprod_image?>" alt="Image Alternative text" title="Image Title" />
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
          if($product->date_start <= $date && $product->date_end >= $date){
            if($product->discount_type == 'percentage'){
              $discount = $product->discount / 100;
              $discountrate = $product->storeprod_price * $discount;
              $newprice = $product->storeprod_price - $discountrate;
              echo '<div class="product-caption-price">
                      <del>&#8369;'.$product->storeprod_price.'</del>
                      &#8369;<span class="product-caption-price-new">'.round($newprice, 2).'</span>
                    </div>';
            }else{
              $newprice = $product->storeprod_price - $product->discount;
              echo '<div class="product-caption-price">
                      <del>&#8369;'.$product->storeprod_price.'</del>
                      &#8369;<span class="product-caption-price-new">'.$newprice.'</span>
                      </div>';
            }
          }else{
            echo '<div class="product-caption-price">
                  &#8369;<span class="product-caption-price-new">'.$product->storeprod_price.'</span>
                  </div>';
          }
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
