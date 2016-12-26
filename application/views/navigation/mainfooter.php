<footer class="main-footer">
            <div class="container">
                <div class="row row-col-gap" data-gutter="60">
                <div class="col-md-4">
                    <img src="<?php echo base_url().'assets/img/logo-default.png';?>" style="width:100%;">
                </div>
                    <div class="col-md-4">
                        <h4 class="widget-title-sm">Follow us on Social!</h4>
                        <p>Keep on touch with us by following our social media sites!</p>
                        <ul class="main-footer-social-list">
                            <li>
                                <a class="fa fa-facebook" href="https://www.facebook.com/ClickBasket"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter" href="https://www.twitter.com/ClickBasket"></a>
                            </li>
                            <li>
                                <a class="fa fa-instagram" href="https://www.instagram.com/ClickBasket"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus" href="https://www.google-plus.com/ClickBasket"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                    <!--CAROUSEL THUMBNAIL-->
                    <?php 
                            $x = rand(1,8);

                            if($x==1)
                            {
                            $getimg=base_url().'assets/img/footer_img/bread_footer.png'; 
                               echo "<div class='banner'>";
                               echo "<a class='banner-link' href='#'></a>";
                               echo "<div class='banner-caption-top-left'>";    
                               echo "<h5 class='banner-title'>Baked fresh for you</h5>";
                               echo "<p class='banner-desc'>You’ve tried the rest, now try the best.</p>";
                               echo "<p class='banner-shop-now'>Shop Now <i class='fa fa-caret-right'></i></p>";
                               echo "</div>"; 
                               echo "<img class='banner-img' src='".$getimg."' alt='Image Alternative text' title='Image Title' style='bottom: -8px; right: -32px;'>";
                               echo "</div>";
                            }
                            elseif($x==2)
                            {
                            $getimg=base_url().'assets/img/footer_img/eggs_footer.png'; 
                               echo "<div class='banner'>";
                               echo "<a class='banner-link' href='#'></a>";
                               echo "<div class='banner-caption-top-left'>";    
                               echo "<h5 class='banner-title'>Brilliant for breakfast</h5>";
                               echo "<p class='banner-desc'>The pick of our farms, the pride of our nation.</p>";
                               echo "<p class='banner-shop-now'>Shop Now <i class='fa fa-caret-right'></i></p>";
                               echo "</div>"; 
                               echo "<img class='banner-img' src='".$getimg."' alt='Image Alternative text' title='Image Title' style='bottom: -8px; right: -32px;'>";
                               echo "</div>";    
                            }
                             elseif($x==3)
                            {
                            $getimg=base_url().'assets/img/footer_img/fish_footer.png'; 
                               echo "<div class='banner'>";
                               echo "<a class='banner-link' href='#'></a>";
                               echo "<div class='banner-caption-top-left'>";    
                               echo "<h5 class='banner-title'>Wishin’ I was fishin’</h5>";
                               echo "<p class='banner-desc'>Good food… Good feelings.</p>";
                               echo "<p class='banner-shop-now'>Shop Now <i class='fa fa-caret-right'></i></p>";
                               echo "</div>"; 
                               echo "<img class='banner-img' src='".$getimg."' alt='Image Alternative text' title='Image Title' style='bottom: -8px; right: -32px;'>";
                               echo "</div>";  
                            }
                             elseif($x==4)
                            {
                            $getimg=base_url().'assets/img/footer_img/apple_footer.png'; 
                               echo "<div class='banner'>";
                               echo "<a class='banner-link' href='#'></a>";
                               echo "<div class='banner-caption-top-left'>";    
                               echo "<h5 class='banner-title'>Fruits are real nice so be sure to have a slice.</h5>";
                               echo "<p class='banner-desc'>Don’t be a fool, nutrition is cool.</p>";
                               echo "<p class='banner-shop-now'>Shop Now <i class='fa fa-caret-right'></i></p>";
                               echo "</div>"; 
                               echo "<img class='banner-img' src='".$getimg."' alt='Image Alternative text' title='Image Title' style='bottom: -8px; right: -32px;'>";
                               echo "</div>";   
                            }
                             elseif($x==5)
                            {
                            $getimg=base_url().'assets/img/footer_img/beef_footer.png'; 
                               echo "<div class='banner'>";
                               echo "<a class='banner-link' href='#'></a>";
                               echo "<div class='banner-caption-top-left'>";    
                               echo "<h5 class='banner-title'>Better meat than down the street</h5>";
                               echo "<p class='banner-desc'>Food so great, it will make you sop your plate.</p>";
                               echo "<p class='banner-shop-now'>Shop Now <i class='fa fa-caret-right'></i></p>";
                               echo "</div>"; 
                               echo "<img class='banner-img' src='".$getimg."' alt='Image Alternative text' title='Image Title' style='bottom: -8px; right: -32px;'>";
                               echo "</div>";  
                            }
                             elseif($x==6)
                            {
                            $getimg=base_url().'assets/img/footer_img/beverages_footer.png'; 
                               echo "<div class='banner'>";
                               echo "<a class='banner-link' href='#'></a>";
                               echo "<div class='banner-caption-top-left'>";    
                               echo "<h5 class='banner-title'>The Thirst Quencher</h5>";
                               echo "<p class='banner-desc'>For that deep down body thirst.</p>";
                               echo "<p class='banner-shop-now'>Shop Now <i class='fa fa-caret-right'></i></p>";
                               echo "</div>"; 
                               echo "<img class='banner-img' src='".$getimg."' alt='Image Alternative text' title='Image Title' style='bottom: -8px; right: -32px;'>";
                               echo "</div>";   
                            }
                             elseif($x==7)
                            {
                            $getimg=base_url().'assets/img/footer_img/fruits_footer.png'; 
                               echo "<div class='banner'>";
                               echo "<a class='banner-link' href='#'></a>";
                               echo "<div class='banner-caption-top-left'>";    
                               echo "<h5 class='banner-title'>Fruits and vegetables lots of selectables</h5>";
                               echo "<p class='banner-desc'>Healthy and nutritious can be delicious.</p>";
                               echo "<p class='banner-shop-now'>Shop Now <i class='fa fa-caret-right'></i></p>";
                               echo "</div>"; 
                               echo "<img class='banner-img' src='".$getimg."' alt='Image Alternative text' title='Image Title' style='bottom: -8px; right: -32px;'>";
                               echo "</div>"; 
                            }
                             elseif($x==8)
                            {
                            $getimg=base_url().'assets/img/footer_img/snacks_footer.png'; 
                               echo "<div class='banner'>";
                               echo "<a class='banner-link' href='#'></a>";
                               echo "<div class='banner-caption-top-left'>";    
                               echo "<h5 class='banner-title'>Snacks for everybody!</h5>";
                               echo "<p class='banner-desc'>Come hungry. Leave happy.</p>";
                               echo "<p class='banner-shop-now'>Shop Now <i class='fa fa-caret-right'></i></p>";
                               echo "</div>"; 
                               echo "<img class='banner-img' src='".$getimg."' alt='Image Alternative text' title='Image Title' style='bottom: -8px; right: -32px;'>";
                               echo "</div>";  
                            }
                      ?> 
                     </div>
                </div>
              </div>
        </footer>