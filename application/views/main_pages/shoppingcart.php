<div class="global-wrapper clearfix" id="global-wrapper">
  <div class="container">
    <header class="page-header">
      <h1 class="page-title">My Shopping Bag</h1>
    </header>
    <div class="row">
      <div class="col-md-10">
        <table class="table table table-shopping-cart">
          <thead>
            <tr>
              <th>Market</th>
              <th>Product</th>
              <th>Title</th>
              <th>Description</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
              <th>Remove</th>
            </tr>
          </thead>
          <tbody>
            <?php if(count($cart)!= 0) {
              foreach($cart as $cartrow){
                if($cartrow['id'] != NULL){?>
                <tr id="cartrow_<?php echo $cartrow['id']?>">
                  <td><?= $cartrow['market'];?></td>
                  <td class="table-shopping-cart-img">
                    <a href="#">
                      <img src="<?php echo base_url().'assets/img/100x100.png';?>" alt="Image Alternative text" title="Image Title" />
                    </a>
                  </td>
                  <td class="table-shopping-cart-title"><label><?= $cartrow['name'] ?></label></td>
                  <td><?= $cartrow['desc'];?></td>
                  <td><?= $cartrow['price'];?></td>
                  <td>
                    <div class="input-group" style="width: 100px !important;">
                      <span class="input-group-btn">
                        <button class="btn btn-danger btn-minus" type="button" onclick="updateShoppingCart('subtract');">-</button>
                      </span>
                      <input class="form-control table-shopping-qty" type="text" id = "<?php echo $cartrow['id']?>" value="<?php echo $cartrow['qty']?>" style="padding-left:5px;text-align: center;"/>
                      <span class="input-group-btn">
                        <button class="btn btn-success btn-plus" type="button" onclick="updateShoppingCart('add');">+</button>
                      </span>
                    </div><!-- /input-group -->
                  </td>
                  <td id = "productTotal"><?= $cartrow['qty'] * $cartrow['price'];?></td>
                  <td>
                    <a class="fa fa-close table-shopping-remove" id = "removeitem_<?php echo $cartrow['id']?>" onClick = "removeItem(<?php echo $cartrow['id']?>);" value = "<?php echo $cartrow['id']?>"></a>
                  </td>
                </tr>
                <?php }
                }
              } else{
                echo ' <tr>
                      <td colspan="4">Shopping Cart Empty</td>
                      </tr>';
              } ?>
          </tbody>
        </table>
        <div class="gap gap-small"></div>
      </div>
      <div class="col-md-2">
        <ul class="shopping-cart-total-list">
          <li><span>Total</span><span id = "total">100</span></li>
        </ul>
        <a class="btn btn-primary" href="<?php echo site_url('secondarycontroller/checkout'); ?>" <?php if ($cart== 0){echo 'disabled';}else{}?>>Checkout</a>
      </div>
    </div>
    <ul class="list-inline">
      <li><a class="btn btn-default" href="#">Continue Shopping</a></li>
      <li><a class="btn btn-default" href="#" id = "updateCart" onClick = "updateShoppingCart();">Update Cart</a></li>
    </ul>
  </div>
  <div class="gap"></div>
</div>
