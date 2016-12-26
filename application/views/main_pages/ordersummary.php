<body>
    <div class="global-wrapper clearfix" id="global-wrapper">
        <!--navbarbeforemobile-hidden-->
        <?php $this->load->view('blocks/navbarbefore');?>
        <!--login-->
        <?php $this->load->view('blocks/loginmodal');?>
        <!--register-->
        <?php $this->load->view('blocks/registermodal');?>
        <!--password recovery-->
        <?php $this->load->view('blocks/passwordrecovery');?>
        <!--main navbar-->
        <?php $this->load->view('blocks/mainnavbar');?>

        <div class="gap"></div>
        <div class="container">
            <div class="payment-success-icon fa fa-check-circle-o"></div>
            <div class="payment-success-title-area">
                <h1 class="payment-success-title">Lily, your payment was successful!</h1>
                <p class="lead">Order details has been send to <strong>lily1987@gmail.com</strong>
                </p>
            </div>
            <div class="gap gap-small"></div>
            <div class="row row-col-gap">
                <div class="col-md-4">
                    <h3 class="widget-title">Order Summary</h3>
                    <div class="box">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>QTY</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gucci Patent Leather Open Toe Platform</td>
                                    <td>1</td>
                                    <td>$499</td>
                                </tr>
                                <tr>
                                    <td>Nikon D5200 24.1 MP Digital SLR Camera</td>
                                    <td>1</td>
                                    <td>$350</td>
                                </tr>
                                <tr>
                                    <td>Apple 11.6" MacBook Air Notebook</td>
                                    <td>1</td>
                                    <td>$1100</td>
                                </tr>
                                <tr>
                                    <td>Fossil Women's Original Boyfriend</td>
                                    <td>1</td>
                                    <td>$250</td>
                                </tr>
                                <tr>
                                    <td>Subtotal</td>
                                    <td></td>
                                    <td>$2199</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td></td>
                                    <td>$0</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td></td>
                                    <td>$2199</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="widget-title">Billing/Shipping Details</h3>
                    <div class="box">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Shipping Details</th>
                                    <th>Billing Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DHL Shipping</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>United States</td>
                                    <td>United States</td>
                                </tr>
                                <tr>
                                    <td>1630 Columbia Road Northwest</td>
                                    <td>1630 Columbia Road Northwest</td>
                                </tr>
                                <tr>
                                    <td>(202) 476-5580</td>
                                    <td>(202) 476-5580</td>
                                </tr>
                                <tr>
                                    <td>Milly Adams</td>
                                    <td>Milly Adams</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="widget-title">Share Purchase</h3>
                    <div class="box">
                        <ul class="payment-success-product-list">
                            <li>
                                <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                            <li>
                                <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                            <li>
                                <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                            <li>
                                <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                        </ul>
                        <p class="lead">Share your purchase to get a discount on the next one!</p>
                        <ul class="payment-success-share-list">
                            <li>
                                <a class="fa fa-facebook" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-pinterest" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
            <h3 class="widget-title">You Might Also Like</h3>
            <div class="row row-sm-gap" data-gutter="15">
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels"></ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                        </div>
                        <a class="product-link" href="#"></a>
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
                            <h5 class="product-caption-title">Vintage Men's Canvas Shoulder Bag Casual School Military Messenger Travel Bag</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$112</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels"></ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                        </div>
                        <a class="product-link" href="#"></a>
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
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">Samsung N900 Galaxy Note 3 32GB Verizon Wireless Black...</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$72</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>3 left</li>
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels">
                            <li>stuff pick</li>
                        </ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                        </div>
                        <a class="product-link" href="#"></a>
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
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">Citizen NightHawk EcoDrive Chronograph Black Ion-plated...</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$55</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels">
                            <li>-30%</li>
                            <li>stuff pick</li>
                        </ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                            <img class="product-img-alt" src="img/500x500.png" alt="Image Alternative text" title="Image Title" />
                        </div>
                        <a class="product-link" href="#"></a>
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
                            <h5 class="product-caption-title">Beats by Dre urBeats In-Ear Noise Isolating Headphones with In-line Control</h5>
                            <div class="product-caption-price"><span class="product-caption-price-old">$80</span><span class="product-caption-price-new">$56</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>

        <!--Main Footer-->
        <?php $this->load->view('blocks/mainfooter');?>
    </div>