<div class="global-wrapper clearfix" id="global-wrapper">
  <div class="container-fluid">
    <div class="row">
      <?php $this->load->view('navigation/profilemenu');?>
      <div class="col-md-9">
        <header class="page-header"></header>
        <div class="box-lg">
          <h3>My Order History</h3>
          <h5></h5>
          <hr />
          <form>
            <table class="table table table-shopping-cart">
              <thead>
                <tr>
                  <th>Products</th>
                  <th>Tracking No.</th>
                  <th>Market</th>
                  <th>Created On</th>
                  <th>Status</th>
                  <th>Total Amount</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($order as $orderInfo){?>
                <tr>
                  <td><a href="#" onclick="viewProducts(<?= $orderInfo->order_id ?>)" name="<?php $orderInfo->order_id;?>"><span class="fa fa-reorder"></span> View</a></td>
                  <td>ABC12345</td>
                  <td>SM SuperMarket</td>
                  <td><?= $orderInfo->date_created;?></td>
                  <td style="color:red;"><?= ucfirst($orderInfo->order_status);?></td>
                  <td>&#8369;<?= $orderInfo->order_total;?></td>
                </tr>
              <?php }?>
              </tbody>
            </table>
            <div class="gap gap-small"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="gap gap-small"></div>
</div>
