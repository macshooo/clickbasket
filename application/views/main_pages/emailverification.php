      <div class="global-wrapper clearfix" id="global-wrapper">
        <div class="container-fluid">
            <div class="row">
             <div class="col-md-offset-3 col-md-6">
                    <header class="page-header">
                    </header>

                    <div id="emailverificationpanel" class="box-lg" style="display:block;">
                        <div class="row" data-gutter="60">
                            <div class="col-md-10">
                                <h3 class="widget-title">Email Verification</h3>

                                <!--CONTENT START-->
                                <p>Hey There <b>Carlo</b>! Welcome to ClickBasket!</p>

                                <p>We just sent a verification email to <b>Sample@sample.com</b>. Simply click the link in the email to finish setting up your ClickBasket Account!</p>
                                <!--CONTENT START END-->

                               <div class="gap gap-small"></div>
                                <ul class="list-inline">
                                    <li>
                                        <input type="button" class="btn btn-primary" value="Send Email Again?">
                                        <input type="button" onclick="changeemail()" class="btn btn-default" value="Change email address">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                        <div id="changeemailpanel" class="box-lg" style="display:none;">
                        <div class="row" data-gutter="60">
                            <div class="col-md-10">
                                <h3 class="widget-title">Email Verification | Change Email</h3>

                                <!--CHANGE EMAIL FORM START-->
                                <form>
                                   <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email" name="email"  placeholder="John@example.com" />
                                        <?php echo form_error('email', '<div style="color:red;">', '</div>'); ?>
                                    </div>
                                    <p style="Color:green;"><b>Note:</b>Once your email has change it will automatically send a new verification to your account.</p>
                                   <div class="gap gap-small"></div>
                                    <ul class="list-inline">
                                        <li>
                                            <input type="button" class="btn btn-primary" value="Change">
                                            <input type="button" onclick="emailverification()" class="btn btn-danger" value="Cancel">
                                        </li>
                                    </ul>
                                </form>
                                <!--CHANGE EMAIL FORM END-->

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="gap gap-small"></div>

        <footer class="main-footer">
            <div class="container">
                <div class="row row-col-gap" data-gutter="60">
                    <div class="col-md-3">
                        <h4 class="widget-title-sm">TheBox Shop</h4>
                        <p>Eleifend luctus suspendisse luctus lacinia suspendisse consequat gravida tellus vivamus at urna</p>
                        <ul class="main-footer-social-list">
                            <li>
                                <a class="fa fa-facebook" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-pinterest" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-instagram" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus" href="#"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="widget-title-sm">Popular Tags</h4>
                        <ul class="main-footer-tag-list">
                            <li><a href="#">New Season</a>
                            </li>
                            <li><a href="#">Watches</a>
                            </li>
                            <li><a href="#">woman</a>
                            </li>
                            <li><a href="#">classic</a>
                            </li>
                            <li><a href="#">modern</a>
                            </li>
                            <li><a href="#">blue</a>
                            </li>
                            <li><a href="#">shoes</a>
                            </li>
                            <li><a href="#">running</a>
                            </li>
                            <li><a href="#">jeans</a>
                            </li>
                            <li><a href="#">sports</a>
                            </li>
                            <li><a href="#">laptops</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="widget-title-sm">Newsletter</h4>
                        <form>
                            <div class="form-group">
                                <label>Sign up to the newsletter</label>
                                <input class="newsletter-input form-control" placeholder="Your e-mail address" type="text" />
                            </div>
                            <input class="btn btn-primary" type="submit" value="Sign up" />
                        </form>
                    </div>
                </div>
                <ul class="main-footer-links-list">
                    <li><a href="#">About Us</a>
                    </li>
                    <li><a href="#">Jobs</a>
                    </li>
                    <li><a href="#">Legal</a>
                    </li>
                    <li><a href="#">Support & Customer Service</a>
                    </li>
                    <li><a href="#">Blog</a>
                    </li>
                    <li><a href="#">Privacy</a>
                    </li>
                    <li><a href="#">Terms</a>
                    </li>
                    <li><a href="#">Press</a>
                    </li>
                    <li><a href="#">Shipping</a>
                    </li>
                    <li><a href="#">Payments & Refunds</a>
                    </li>
                </ul>

            </div>
        </footer>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright &copy; <a href="#">TheBox</a> 2014. Designed my remtsoy. All rights reseved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
