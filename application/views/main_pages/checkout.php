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
                foreach($cart as $cartrow){
                  $temp = $cartrow['price'] * $cartrow['qty'];?>
                  <tr>
                    <td><?= $cartrow['market'];?></td>
                    <td><?= $cartrow['name'];?></td>
                    <td><?= $cartrow['qty'];?></td>
                    <td>&#8369;<?php echo $cartrow['price'] * $cartrow['qty'];?></td>
                  </tr>
                  <?php $total = $total + $temp; }
              }else{
                echo '<tr>
                      <td colspan="4">Empty!</td>
                      </tr>';
              }?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-3">
        <h3 class="widget-title">Billng Details</h3>
        <form>
          <div class="form-group">
            <label>Firstname</label>
            <input class="form-control" type="text" value="<?= $userinfo->consumer_fname ?>" disabled/>
          </div>
          <div class="form-group">
            <label>Lastname</label>
            <input class="form-control" type="text" value="<?= $userinfo->consumer_lname ?>" disabled/>
          </div>
          <div class="form-group">
            <label>E-mail</label>
            <input class="form-control" type="text" value="<?= $userinfo->email ?>" disabled/>
          </div>
          <div class="form-group">
            <label>Mobile Number</label>
            <input class="form-control" type="text" value="<?= $userinfo->mobilenumber ?>" disabled/>
          </div>
          <div class="form-group">
            <label>Address</label>
            <input class="form-control" type="text" value="<?= $userinfo->address ?>" disabled/>
          </div>
          <!-- <div class="checkbox">
            <label>
              <input class="i-check" type="checkbox" id="shipping-address-checkbox" />Ship to a Different Address</label>
          </div>
          <div id="shipping-address" class="hide">
            <div class="form-group">
              <label>New Shipping Address</label>
              <input class="form-control" type="text" />
            </div>
          </div> -->
        </form>
      </div>
      <div class="col-md-3">
        <h3 class="widget-title">Payment</h3>
        <div class="cc-form">
          <div class="clearfix">
            <div class="form-group form-group-cc-number">
              <label>Cart Sub Total:</label>
            </div>
            <div class="form-group form-group-cc-cvc">
              <label>&#8369;<?php echo $total;?></label>
            </div>
            <div class="form-group form-group-cc-number">
              <label>Tax:</label>
            </div>
            <div class="form-group form-group-cc-cvc">
              <label>&#8369;</label>
            </div>
            <div class="form-group form-group-cc-number">
              <label>Shipping Fee:</label>
            </div>
            <div class="form-group form-group-cc-cvc">
              <label>&#8369;</label>
            </div>
            <div class="form-group form-group-cc-number">
              <h3>Grand Total:</h3>
            </div>
            <div class="form-group form-group-cc-cvc">
              <h3>&#8369;<?php echo $total;?></h3>
            </div>
            <div class="form-group form-group-cc-cvc">
              <button class="btn btn-primary" id="placeorder">Place Order</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
