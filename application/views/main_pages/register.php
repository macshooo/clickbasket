 <body>
     <div class="global-wrapper clearfix" id="global-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <header class="page-header">

                    </header>
                    <div class="box-lg">
                        <div class="row" data-gutter="60">
                            <div id="loginbox" class="col-md-10">
                                <h3 class="widget-title">Create New Account</h3>

                                <!--REGISTER FORM START-->
                                <?php $attributes = array('class' => 'form-group', 'id' => 'registerform','onsubmit' => 'return registermessage()'); echo form_open('secondarycontroller/register_user'); ?>

                                    <div class="form-group">
                                        <label>Firstname</label>
                                        <input class="form-control" type="text" name="firstname" />
                                        <?php echo form_error('firstname', '<div style="color:red;">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Lastname</label>
                                        <input class="form-control" type="text" name="lastname" />
                                        <?php echo form_error('lastname', '<div style="color:red;">', '</div>'); ?>
                                    </div>

                                     <div class="form-group">
                                        <label>Phone Number</label>
                                        <input class="form-control" type="text" name="phonenumber" />
                                        <?php echo form_error('phonenumber', '<div style="color:red;">', '</div>'); ?>
                                    </div>
                                      <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control" type="text" name="address" />
                                        <?php echo form_error('address', '<div style="color:red;">', '</div>'); ?>
                                    </div>
                                    <hr>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email" name="email"  />
                                        <?php echo form_error('email', '<div style="color:red;">', '</div>'); ?>
                                    </div>

                                     <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="password" />
                                        <?php echo form_error('password', '<div style="color:red;">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" type="password" name="confirmpassword" />
                                        <?php echo form_error('confirmpassword', '<div style="color:red;">', '</div>'); ?>
                                    </div>

                                    <input id="submit" class="btn btn-primary" type="submit" value="Create Account"/>
                                </form>
                                <!--REGISTER FORM END-->

                               <div class="gap gap-small"></div>
                                <ul class="list-inline">
                                    <li><a href="<?php $attributes = array('class' => 'popup-text'); echo site_url('secondarycontroller'); ?>">Already Memember</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap gap-small"></div>
