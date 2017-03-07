<div class="global-wrapper clearfix" id="global-wrapper">
  <div class="container">
    <header class="page-header">
      <h5 class="page-title">Checkout Order</h5>
    </header>
    <div class="row row-col-gap" data-gutter="60">
      <div class="col-md-6">
        <h3 class="widget-title">Order Info</h3>
        <div class="box">
          <table class="table">
            <thead>
              <tr>
                <th>Market</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <?php if(count($cart)!= 0) {
                $total = 0;
                foreach($cart as $cartrow):
                  $temp = $cartrow['price'] * $cartrow['qty'];?>
                  <tr>
                    <td><?= $cartrow['market'];?></td>
                    <td><?= $cartrow['name'];?></td>
                    <td><?= $cartrow['qty'];?></td>
                    <td>&#8369;<?= $cartrow['price'] * $cartrow['qty'];?></td>
                  </tr>
                  <?php $total = $total + $temp;
                endforeach;
              }else{?>
                <tr>
                  <td colspan="4">Empty!</td>
                </tr>';
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-3">
        <h3 class="widget-title">Billng Details</h3>
        <div class="form-group">
          <label>Firstname:</label>
          <h5><?= $userinfo->consumer_fname ?></h5>
          <input class="form-control" type="text" style="display:none;" value="<?= $userinfo->consumer_fname ?>" disabled/>
        </div>
        <div class="form-group">
          <label>Lastname:</label>
          <h5><?= $userinfo->consumer_lname ?></h5>
          <input class="form-control" type="text" style="display:none;" value="<?= $userinfo->consumer_lname ?>" disabled/>
        </div>
        <div class="form-group">
          <label>E-mail:</label>
          <h5><?= $userinfo->email ?></h5>
          <input class="form-control" type="text" style="display:none;" value="<?= $userinfo->email ?>" disabled/>
        </div>
        <div class="form-group">
          <label>Mobile Number:</label>
          <h5><?= $userinfo->mobilenumber ?></h5>
          <input class="form-control" type="text" style="display:none;" value="<?= $userinfo->mobilenumber ?>" disabled/>
        </div>
        <div class="form-group">
          <label>Address:</label>
          <h5><?= $userinfo->floorunitroom_num;?>, <?= $userinfo->building_name;?>, <?= $userinfo->street_name;?>, <?= $userinfo->city_name;?></h5>
          <!-- <select class="form-control" id="prev_address">
            <option>-------</option>
            <option value="<?= $userinfo->address ?>"><?= $userinfo->address ?></option>
            <option>Talisay, Cebu City</option>
            <option>Nursery, Masbate City</option>
            <<option value="newAddress">New Address...</option>
          </select> -->
          <input class="form-control" type="text" id="new_address" style="display:none;" placeholder="Enter New Address"/>
        </div>
        <div class="form-group">
          <button class="btn btn-success" id="done_button" style="display:none;" onclick="editThis(1);"><span class="fa fa-check"></span>Done</button>
          <button class="btn btn-danger" id="cancel_button" onclick="cancelCheckout();" style="display:none;" onclick="editThis(1);"><span class="fa fa-remove"></span>Cancel</button>
        </div>
        <hr>
        <div class="form-group">
          <label>Expected Date and Time of Delivery:</label>
          <div class='input-group date' id='datetimepicker1'>
            <input type="text" class="form-control" required/>
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <h3 class="widget-title">Payment</h3>
        <?php $oldtotal1 = $oldtotal2 = $oldtotal3 = $total1 = $total2 = $total3 = 0;
          foreach ($cart as $cartrow):
            if ($cartrow['marketid'] == 1){
              $total1 = $total1 + ($cartrow['qty'] * $cartrow['price']);
            }else if ($cartrow['marketid'] == 2){
              $total2 = $total2 + ($cartrow['qty'] * $cartrow['price']);
            }else if ($cartrow['marketid'] == 3){
              $total3 = $total3 + ($cartrow['qty'] * $cartrow['price']);
            }
          endforeach;

          if($coupon){
            foreach ($coupon as $crow):
              if($crow->store_id == 1){
                $oldtotal1 = $total1;
                if($crow->coupondiscount_type == 'percentage'){
                  $discount = $crow->coupons_discount / 100;
                  $discountrate = $total1 * $discount;
                  $total1 = $total1 - $discountrate;
                  echo '<span class="label label-danger" id="couponlabel">Coupon Used: '.$crow->coupons_discount.'% off!</span>';
                  echo '<input type="hidden" id="storecouponid" value="'.$crow->storecoupon_id.'">';
                }else{
                  if($crow->coupons_discount < $total1){
                    $total1 = $total1 - $crow->coupons_discount;
                  }else{
                    $total1 = 0;
                  }
                }
              }else if($crow->store_id == 2){
                $oldtotal2 = $total2;
                if($crow->coupondiscount_type == 'percentage'){
                  $discount = $crow->coupons_discount / 100;
                  $discountrate = $total2 * $discount;
                  $total2 = $total2 - $discountrate;
                  echo '<span class="label label-danger" id="couponlabel" value="'.$crow->store_id.'">Coupon Used: '.$crow->coupons_discount.'% off!</span>';
                  echo '<input type="hidden" id="couponid" value="'.$crow->coupons_id.'">';
                }else{
                  if($crow->coupons_discount < $total2){
                    $total2 = $total2 - $crow->coupons_discount;
                  }else{
                    $total2 = 0;
                  }
                }
              }else if($crow->store_id == 3){
                $oldtotal3 = $total3;
                if($crow->coupondiscount_type == 'percentage'){
                  $discount = $crow->coupons_discount / 100;
                  $discountrate = $total3 * $discount;
                  $total3 = $total3 - $discountrate;
                  echo '<span class="label label-danger" id="couponlabel" value="'.$crow->store_id.'">Coupon Used: '.$crow->coupons_discount.'% off!</span>';
                  echo '<input type="hidden" id="couponid" value="'.$crow->coupons_id.'">';
                }else{
                  if($crow->coupons_discount < $total3){
                    $total3 = $total3 - $crow->coupons_discount;
                  }else{
                    $total3 = 0;
                  }
                }
              }
            endforeach;
            $couponuse = 'true';
          }else{
            $couponuse = 'false';
          }
        ?>
        <div class="cc-form">
          <div class="clearfix">
            <div class="form-group form-group-cc-number">
              <h5>SM Supermarket:</h5>
            </div>
            <div class="form-group form-group-cc-cvc">
              <?php if ($oldtotal1){
                echo '<del><h5>&#8369;'.$oldtotal1.'</h5></del>
                      <h5>&#8369;'.round($total1, 2).'</h5>';
              }else{
                echo '<h5>&#8369;'.$total1.'</h5>';
              }?>
            </div>
            <div class="form-group form-group-cc-number">
              <h5>Robinsons Supermarket</h5>
            </div>
            <div class="form-group form-group-cc-cvc">
              <?php if ($oldtotal2){
                echo '<del><h5>&#8369;'.$oldtotal2.'</h5></del>
                      <h5>&#8369;'.round($total2, 2).'</h5>';
              }else{
                echo '<h5>&#8369;'.$total2.'</h5>';
              }?>
            </div>
            <div class="form-group form-group-cc-number">
              <h5>Gaisano Country Mall:</h5>
            </div>
            <div class="form-group form-group-cc-cvc">
              <?php if ($oldtotal3){
                echo '<del><h5>&#8369;'.$oldtotal3.'</h5></del>
                      <h5>&#8369;'.round($total3, 2).'</h5>';
              }else{
                echo '<h5>&#8369;'.$total3.'</h5>';
              }?>
            </div>
            <hr>
            <!--Order Total-->
            <div class="form-group form-group-cc-number">
              <?php $total = $total1 + $total2 + $total3;
                    $vatamount = round($total * .12, 2);
                    $vatsales = round($total - $vatamount, 2);
              ?>
              <h4>Subtotal:</h4>
              <h4>VAT:</h4>
              <h4>VATable Sales:</h4>
            </div>
            <div class="form-group form-group-cc-cvc">
              <h4 id="subtotal">&#8369;<?= $vatsales;?></h4>
              <h4>12%</h4>
              <h4 id="vatamount">&#8369;<?= $vatamount;?></h4>
            </div>
            <div class="form-group form-group-cc-number">
              <h3>Grand Total:</h3>
            </div>
            <div class="form-group form-group-cc-cvc">
              <h3 id="gTotal">&#8369;<?= $total;?></h3>
            </div>
            <div class="form-group form-group-cc-cvc">
              <button class="btn btn-primary" id="placeorder" <?php if ($total < 500){echo 'disabled';}else{}?>>Place Order</button>
            </div>
          </div>
          <?php if($total < 200){
            echo '<span style="margin-top:-10px; color:red;"><i>Minimum of PHP 500!</i></span>';
          }?>
          <br>
          <a onclick="couponCode(<?= $couponuse;?>);">Have a coupon code?</a>
        </div>
      </div>
    </div>
  </div>
</div>
