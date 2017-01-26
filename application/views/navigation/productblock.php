<?php foreach ($listproducts as $product) {?>
  <div class="col-md-4">
    <div class="product">
      <ul class="product-labels"></ul>
        <div class="product-img-wrap">
          <img class="product-img-primary" src="<?php echo base_url('assets/img/1.png');?>" alt="Image Alternative text" title="Image Title" />
          <img class="product-img-alt" src="<?php echo base_url('assets/img/500x500.png');?>" alt="Image Alternative text" title="Image Title" />
        </div>
        <a class="product-link" href="<?php echo site_url('listproductscontroller/product/index?id='.$product->prod_id); ?>"></a>
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
          <!-- <span class="starRating">
            <input id="rating5" type="radio" name="rating" value="5">
            <label for="rating5">5</label>
            <input id="rating4" type="radio" name="rating" value="4">
            <label for="rating4">4</label>
            <input id="rating3" type="radio" name="rating" value="3">
            <label for="rating3">3</label>
            <input id="rating2" type="radio" name="rating" value="2">
            <label for="rating2">2</label>
            <input id="rating1" type="radio" name="rating" value="1">
            <label for="rating1">1</label>
          </span> -->
          <h5 class="product-caption-title"><?php echo $product->prod_name;?></h5>
          <div class="product-caption-price">
            <span class="product-caption-price-new"><?php echo $product->storeprod_price;?></span>
          </div>
          <ul class="product-caption-feature-list">
            <li>Free Shipping</li>
          </ul>
        </div>
      </div>
  </div>
<?php }?>
