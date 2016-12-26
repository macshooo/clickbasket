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
                                <h3 class="widget-title">Sign in</h3>

                                <!--LOGIN FORM START-->
                                <div id="login-message" style="color:red;">
                                
                                </div>
                                 <?php $attributes = array('class' => 'form-group', 'id' => 'loginform', 'method' => 'POST'); echo form_open('secondarycontroller/checkLogin', $attributes); ?>
                                        <div class="form-group">
                                            <label>E-mail or Username</label>
                                            <input class="form-control" type="text" name="email" />
                                        </div>
                                         <?php echo form_error('email'); ?>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" />
                                        </div>
                                          <?php echo form_error('password'); ?>
                                        <div class="checkbox">
                                            <label>
                                                <input class="i-check" type="checkbox" />Remember me</label>
                                        </div>
                                        <input class="btn btn-primary" value="submit" name="submit" type="submit" />
                                 <?php echo form_close(); ?>
                                <!--LOGIN FORM END-->


                                 <ul class="list-inline">
                                    <li><a href="<?php $attributes = array('class' => 'popup-text'); echo site_url('secondarycontroller/register'); ?>">Not Member Yet?</a>
                                    </li>
                                    <li><a href="" class="popup-text">Forgot Password?</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
<br>