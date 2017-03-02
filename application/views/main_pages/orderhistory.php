<?= form_open('listproductscontroller/orderReceipt');?>
<div class="global-wrapper clearfix" id="global-wrapper">
  <div class="container-fluid">
    <div class="row">
      <?php $this->load->view('navigation/profilemenu');?>
      <div class="col-md-9">
        <header class="page-header"></header>
        <div class="box-lg">
          <h3>My Order History</h3>
          <h5></h5>
          <hr/>
          <div style="overflow-x:auto;">
            <table class="table table table-shopping-cart">
              <thead>
                <tr>
                  <th>Products</th>
                  <!-- <th>Tracking No.</th> -->
                  <th>Created On</th>
                  <th>Status</th>
                  <th>Total Amount</th>
                  <th>Expected Date of Delivery</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($order as $orderInfo):?>
                <tr>
                  <td><a href="#" onclick="viewProducts(<?= $orderInfo->order_id; ?>)" name="<?php $orderInfo->order_id;?>"><span class="fa fa-reorder"></span> View</a></td>
                  <td><?= $orderInfo->date_created;?></td>
                  <?php if($orderInfo->order_status == 'completed'){
                    echo '<td style="color:green;">'.ucfirst($orderInfo->order_status).'</td>';
                  }else if($orderInfo->order_status == 'declined' || $orderInfo->order_status == 'cancelled'){
                    echo '<td style="color:red;"><a href="#" style="color:red;" onclick="orderStatus(\''.$orderInfo->decline_reason.'\');">'.ucfirst($orderInfo->order_status).'</a></td>';
                  }else{
                    echo '<td style="color:red;">'.ucfirst($orderInfo->order_status).'</td>';
                  }?>
                  <td>&#8369;<?= $orderInfo->grandtotal;?></td>
                  <td>
                    <?php $date = new DateTime(str_replace("-","",$orderInfo->eta));
                      echo $date->format('F d, Y g:i A');?>
                  </td>
                  <td><?= ($orderInfo->order_status == 'pending' ? '<input type="button" class="btn btn-danger" value="Cancel" onclick="cancelOrder('.$orderInfo->order_id.');"' : ' ' );?></td>
                  <td>
                    <?php if ($orderInfo->order_status == 'completed'){
                      echo '<button class="btn btn default" name="printid" title="'.$orderInfo->order_id.'" value="'.$orderInfo->order_id.'"><span class="fa fa-print"></span>Print</button></td>';
                    }?>
                </tr>
              <?php endforeach;?>
              </tbody>
            </table>
          </div>
            <div class="gap gap-small"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="gap gap-small"></div>
</div>
