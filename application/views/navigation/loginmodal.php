<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
    <h3 class="widget-title">Member Login</h3>
    <p>Welcome back, friend. Login to get started</p>
    <hr />

    <!--FORM LOGIN START-->
    <?php $attributes = array('class' => 'form-group', 'id' => 'loginform'); echo form_open('LoginController/checkLogin', $attributes); ?>
        <div class="form-group">
            <label>Email or Username</label>
            <input class="form-control" type="text" name="email"/>
            <div style="color:red; margin:0 0 -15px 0;" id="emailerror">
            </div>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="password"/>
            <div style="color:red; margin:0 0 -15px 0;" id="passworderror">
            </div>
        </div>
        <div class="checkbox">
            <label>
                <input class="i-check" type="checkbox" />Remember Me</label>
        </div>
        <input class="btn btn-primary"  value="submit" name="submit" type="submit">
    <?php echo form_close(); ?>
    <!--/FORM LOGIN END-->

    <div class="gap gap-small"></div>
    <ul class="list-inline">
        <li><a href="#nav-account-dialog" class="popup-text">Not Member Yet</a>
        </li>
        <li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>
        </li>
    </ul>
</div>
