 <body>
     <div class="global-wrapper clearfix" id="global-wrapper">
        <div class="container-fluid">
            <div class="row">
            <!--PROFILE MENU START-->
            <?php $this->load->view('navigation/profilemenu');?>
            <!--PROFILE MENU END-->          
                    <div class="col-md-9">
                      <header class="page-header">   
                      </header>
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
                                            <th>Created On</th>
                                            <th>Status</th>
                                            <th>Total Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="#view-product-modal" data-effect="mfp-move-from-top" class="popup-text"><span class="fa fa-reorder"></span> View</a></td>
                                        <td>ABC12345</td>
                                        <td>December 1, 2016</td>
                                        <td style="color:red;">Pending</td>
                                        <td>&#8369;1,599.00</td>                                   
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="data-toggle="modal" data-target="#productmodal"><span class="fa fa-reorder"></span> View</a></td>
                                        <td>ABC12345</td>
                                        <td>Novermber 26, 2016</td>
                                        <td style="color:green;">Success</td>
                                        <td>&#8369;1,909.00</td>                                   
                                    </tr>
                                        <!-- <tr>
                                            <td class="table-shopping-cart-img">
                                                <a href="#">
                                                    <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                                </a>
                                            </td>
                                            <td class="table-shopping-cart-title"><a href="#">Gucci Patent Leather Open Toe Platform</a>
                                            </td>
                                            <td>Green</td>
                                            <td>$499</td>
                                            <td>
                                                <input class="form-control table-shopping-qty" type="text" value="1" />
                                            </td>
                                            <td>$499</td>
                                            <td>
                                                <a class="fa fa-close table-shopping-remove" href="#"></a>
                                            </td>
                                        </tr> -->
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
</body>
