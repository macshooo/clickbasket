<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">
            <h3 class="widget-title">Create ClickBasket Account</h3>
            <p>Ready to get best offers? Let's get started!</p>
            <hr />

            <!--Form Open-->
                <?php validation_errors(); ?>
                <?php $attributes = array('class' => 'form-group', 'id' => 'registerform'); echo form_open('RegisterController/register_user'); ?>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email"  />
                    </div>
                    <div class="form-group">
                        <label>Firstname</label>
                        <input class="form-control" type="text" name="firstname" />
                    </div>
                    <div class="form-group">
                        <label>Lastname</label>
                        <input class="form-control" type="text" name="lastname" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" />
                    </div>
                    <div class="form-group">
                        <label>Repeat Password</label>
                        <input class="form-control" type="password" name="confirmpassword" />
                    </div>
                     <div class="form-group">
                        <label>Phone Number</label>
                        <input class="form-control" type="text" name="phonenumber" />
                    </div>
                      <div class="form-group">
                        <label>Address</label>
                        <input class="form-control" type="text" name="address" />
                    </div>
                    <input class="btn btn-primary" type="submit" value="Create Account"/>
                </form>
            <!--/Form Close-->

            <div class="gap gap-small"></div>
            <ul class="list-inline">
                <li><a href="#nav-login-dialog" class="popup-text">Already Memember</a>
                </li>
            </ul>
        </div>
