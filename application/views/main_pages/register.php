<div class="global-wrapper clearfix" id="global-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <header class="page-header"></header>
          <div class="box-lg">
            <div class="row" data-gutter="60">
              <div id="loginbox" class="col-md-10">
                <h3 class="widget-title">Create New Account</h3>
                <!--REGISTER FORM START-->
                <?php $attributes = array('class' => 'form-group', 'id' => 'registerform','onsubmit' => 'return registermessage()'); echo form_open('secondarycontroller/register_user'); ?>
                <div class="form-group">
                  <label>Firstname</label>
                  <input class="form-control" type="text" name="firstname" value="<?= set_value('firstname');?>"/>
                  <?= form_error('firstname', '<div style="color:red;">', '</div>'); ?>
                </div>
                <div class="form-group">
                  <label>Lastname</label>
                  <input class="form-control" type="text" name="lastname" value="<?= set_value('lastname');?>"/>
                  <?= form_error('lastname', '<div style="color:red;">', '</div>'); ?>
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input class="form-control" type="text" name="phonenumber" value="<?= set_value('phonenumber');?>"/>
                  <?= form_error('phonenumber', '<div style="color:red;">', '</div>'); ?>
                </div>
                <hr>
                <h3>Address</h3>
                <div class="form-group">
                  <label>House Number/Building Name</label>
                  <input class="form-control" type="text" name="building" value="<?= set_value('building');?>"/>
                  <?= form_error('building', '<div style="color:red;">', '</div>'); ?>
                </div>
                <div class="form-group">
                  <label>Street</label>
                  <input class="form-control" type="text" name="street" value="<?= set_value('street');?>"/>
                  <?= form_error('street', '<div style="color:red;">', '</div>'); ?>
                </div>
                <div class="form-group">
                  <label>Floor/Unit/Room</label>
                  <input class="form-control" type="text" name="floorunitroom" value="<?= set_value('floorunitroom');?>"/>
                  <?= form_error('floorunitroom', '<div style="color:red;">', '</div>'); ?>
                </div>
                <div class="form-group">
                  <label>City</label>
                  <input class="form-control" type="text" name="city" value="<?= set_value('city');?>"/>
                  <?= form_error('city', '<div style="color:red;">', '</div>'); ?>
                </div>
                <div class="form-group">
                  <label>Postcode</label>
                  <input class="form-control" type="text" name="postcode" value="<?= set_value('postcode');?>"/>
                  <?= form_error('postcode', '<div style="color:red;">', '</div>'); ?>
                </div>
                <hr>
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" type="email" name="email" value="<?= set_value('email');?>"/>
                  <?= form_error('email', '<div style="color:red;">', '</div>'); ?>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" type="password" name="password" />
                  <?= form_error('password', '<div style="color:red;">', '</div>'); ?>
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input class="form-control" type="password" name="confirmpassword" />
                  <?= form_error('confirmpassword', '<div style="color:red;">', '</div>'); ?>
                </div>
                <input id="submit" class="btn btn-primary" type="submit" value="Create Account"/>
                <!--REGISTER FORM END-->
                <div class="gap gap-small"></div>
                <ul class="list-inline">
                  <li><a href="<?php $attributes = array('class' => 'popup-text'); echo site_url('secondarycontroller'); ?>">Already Memember</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <div class="gap gap-small"></div>
</div>
