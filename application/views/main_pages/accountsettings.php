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
                            <h3>Account Settings</h3>
                            <h5></h5>
                            <hr />

                            <!--ACCOUNT SETTING FORM START-->
                            <?php $attributes = array('class' => 'form-horizontal', 'id' => 'accountform', 'method' => 'POST'); echo form_open('', $attributes); ?>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>

                                        <div class="col-sm-1">
                                            <p id="emp" class="control-label"><?= $userinfo->email ?></p>
                                        </div>

                                        <div class="col-sm-10">
                                            <input type="text" id="emi" class="form-control" style="display:none;" value="<?= $userinfo->email ?>">
                                        </div>
                                </div>
                              <hr />

                              <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Firstname:</label>

                                        <div class="col-md-1">
                                            <p id="fnp" class="control-label pull-left"><?= $userinfo->consumer_fname ?></p>
                                        </div>

                                        <div class="col-sm-10">
                                            <input type="text" id="fni" class="form-control" style="display:none;" value="<?= $userinfo->consumer_fname ?>">
                                        </div>
                                </div>
                              <hr />

                              <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Lastname:</label>

                                        <div class="col-md-1">
                                            <p id="lnp" class="control-label pull-left"><?= $userinfo->consumer_lname ?></p>
                                        </div>

                                        <div class="col-sm-10">
                                            <input type="text" id="lni" class="form-control" style="display:none;" value="<?= $userinfo->consumer_lname ?>">
                                        </div>
                                </div>
                              <hr />

                              <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Gender:</label>

                                        <!-- <div class="col-md-5">
                                             <p id="gdp" class="control-label pull-left"><?= $userinfo->gender?></p>
                                        </div> -->

                                        <div class="col-sm-10" id="gdi" style="display:none;">
                                            <div class="radio">
                                            <input type="radio" name="optionsRadios" id="male" value="" checked>Male
                                            </div>
                                            <div class="radio">
                                            <input type="radio" name="optionsRadios" id="female" value="female" checked>Female
                                            </div>
                                        </div>
                                </div>
                              <hr />

                              <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Birthday:</label>

                                        <!-- <div class="col-md-5">
                                             <p id="bdp" class="control-label pull-left"><?= $userinfo->birthday?></p>
                                        </div>

                                        <div class="col-sm-10">
                                            <input type="date" placeholder="Date of Birth" id="bdi" class="form-control" style="display:none;" value="<?= $userinfo->birthday?>">
                                        </div> -->

                                </div>
                              <hr />

                              <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Address:</label>

                                    <div class="col-md-5">
                                        <p id="adp" class="control-label pull-left"><?= $userinfo->address ?></p>
                                    </div>

                                    <div class="col-sm-10">
                                      <input type="text" id="adi" class="form-control" style="display:none;" value="<?= $userinfo->address ?>">
                                    </div>
                                </div>
                              <hr />

                              <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Mobile Number:</label>

                                    <div class="col-sm-5">
                                        <p id="cnp" class="control-label pull-left"><?= $userinfo->mobilenumber ?></p>
                                    </div>

                                    <div class="col-sm-10">
                                      <input type="text" id="cni" class="form-control" style="display:none;" value="<?= $userinfo->mobilenumber ?>">
                                    </div>
                                </div>
                              <hr />

                                <div class="form-group">
                                    <div class="col-sm-offset-0 col-sm-10 pull-right">
                                        <button type = "button" id = "cpass" class = "btn btn-primary" name = "ChangePass"> Edit </button>
                                        <button style="display:none;" type="button" class="donebutton btn btn-success" id="donebutt"> Save </button>
                                        <button style="display:none;" type="button" class="delbutton btn btn-danger" id="delbutt" onclick="p_reloader()"> Cancel </button>
                                      </div>
                                     </div>
                             </form>
                            <!--APPLICATION FORM END-->
                        </div>
                    </div>
                </div>
             </div>
        <div class="gap gap-small"></div>
    </div>
</body>
