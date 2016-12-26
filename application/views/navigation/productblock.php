<?php foreach ($prodlist as $product) {?>
<div class="col-md-4">
    <div class="product">
        <ul class="product-labels"></ul>
        <div class="product-img-wrap">
            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
        </div>
        <a class="product-link" href="<?php echo site_url('listproductscontroller/product/index?id='.$product->product_id); ?>"></a>
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
            <h5 class="product-caption-title"><?php echo $product->product_name; ?></h5>
            <div class="product-caption-price">
                <span class="product-caption-price-new"><?php echo $product->product_price; ?></span>
            </div>
            <ul class="product-caption-feature-list">
                <li>Free Shipping</li>
            </ul>
        </div>
    </div>
</div>
<?php }?>
