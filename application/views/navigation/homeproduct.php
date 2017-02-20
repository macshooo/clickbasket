<?php foreach($homeProducts as $product):?>
  <div class="owl-item">
    <!-- <ul class="product-labels">
        <li>hot</li>
    </ul> -->
    <div class="product owl-item-slide">
      <ul class="product-labels"></ul>
      <div class="product-img-wrap">
        <img class="product-img" src="<?= $this->config->item('panel_url').'assets/images/prod_image/'.$product->storeprod_image?>" alt="Image Alternative text" title="Image Title" />
      </div>
      <a class="product-link" href="#"></a>
      <div class="product-caption">
        <ul class="product-caption-rating">
          <li <?= (round($product->storeprod_rating)>='1')? 'class="rated";':''?>/><i class="fa fa-star"></i></li>
          <li <?= (round($product->storeprod_rating)>='2')? 'class="rated";':''?>/><i class="fa fa-star"></i></li>
          <li <?= (round($product->storeprod_rating)>='3')? 'class="rated";':''?>/><i class="fa fa-star"></i></li>
          <li <?= (round($product->storeprod_rating)>='4')? 'class="rated";':''?>/><i class="fa fa-star"></i></li>
          <li <?= (round($product->storeprod_rating)>='5')? 'class="rated";':''?>/><i class="fa fa-star"></i></li>
        </ul>
        <h5 class="product-caption-title"><?= $product->prod_name;?></h5>
        <div class="product-caption-price">&#8369;<span class="product-caption-price-new"><?= $product->storeprod_price;?></span>
        </div>
      </div>
    </div>
  </div>
<?php endforeach;?>
