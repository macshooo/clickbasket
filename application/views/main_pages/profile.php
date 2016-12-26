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
                           <h3>Hello <?= $userinfo->consumer_fname?>!</h3>
                           <div class="update-error"></div>
                           <hr />
                               <h5>Personal Information</h5>
                               <hr />
                               <div class="form-horizontal">
                               <!--FORM FIRSTNAME-->
                               <div id="anchor-div" class="form-group">
                                   <label for="inputEmail3" class="col-sm-2 control-label">Firstname:</label>
                                       <div class="col-sm-5">
                                           <p id="fnp" class="control-label pull-left"><?= $userinfo->consumer_fname ?></p>
                                       </div>

                                       <div class="col-sm-5">
                                       <a href="javascript:void(0)" id = "cfname" name = "ChangePass"><p id="anchor-element" class="control-label pull-right">Edit</p></a>
                                       </div>

                                       <div class="col-sm-8">
                                           <input type="text" id="fni" name="firstname" class="form-control" style="display:none;" value="<?= $userinfo->consumer_fname ?>">
                                       </div>

                                       <div class="col-md-2">
                                       <button style="display:none;" type="button" class="donebutton btn btn-primary" id="donebutt"><span class="fa fa-check"></span></button>
                                       <button style="display:none;" type="button" class="delbutton btn btn-default" id="delbutt" ><span class="fa fa-times"></span></button>
                                       </div>
                               </div>

                               <!--FORM LASTNAME-->
                               <div id="anchor-div" class="form-group">
                                   <label for="inputEmail3" class="col-sm-2 control-label">Lastname:</label>

                                       <div class="col-sm-5">
                                           <p id="lnp" class="control-label pull-left"><?= $userinfo->consumer_lname ?></p>
                                       </div>

                                       <div class="col-sm-5">
                                       <a href="javascript:void(0)" id = "clname" name = "ChangePass"><p id="anchor-element" class="control-label pull-right">Edit</p></a>
                                       </div>

                                       <div class="col-sm-8">
                                           <input type="text" id="lni" name="lastname" class="form-control" style="display:none;" value="<?= $userinfo->consumer_lname ?>">
                                       </div>

                                       <div class="col-md-2">
                                       <button style="display:none;" type="button" class="donebutton1 btn btn-primary" id="donebutt1"><span class="fa fa-check"></span></button>
                                       <button style="display:none;" type="button" class="delbutton1 btn btn-default" id="delbutt1" ><span class="fa fa-times"></span></button>
                                       </div>
                               </div>

                               <!--FORM GENDER-->
                               <div id="anchor-div" class="form-group">
                                   <label for="inputEmail3" class="col-sm-2 control-label">Gender:</label>

                                       <!-- <div class="col-sm-5">
                                            <p id="gdp" class="control-label pull-left"><?= $userinfo->gender?></p>
                                       </div> -->

                                       <div class="col-md-5">
                                       <a href="javascript:void(0)" id = "cgd" name = "ChangePass"><p id="anchor-element" class="control-label pull-right">Edit</p></a>
                                       </div>

                                       <div class="col-sm-8" id="gdi" style="display:none;">
                                           <div class="radio">
                                           <input type="radio" name="gender" id="male" value="Male">Male
                                           </div>
                                           <div class="radio">
                                           <input type="radio" name="gender" id="female" value="Female">Female
                                           </div>
                                       </div>

                                       <div class="col-md-2">
                                       <button style="display:none;" type="button" class="donebutton2 btn btn-primary" id="donebutt2"><span class="fa fa-check"></span></button>
                                       <button style="display:none;" type="button" class="delbutton2 btn btn-default" id="delbutt2" ><span class="fa fa-times"></span></button>
                                       </div>
                               </div>

                               <!--FORM BIRTHDAY-->
                               <div id="anchor-div" class="form-group">
                                   <label for="inputEmail3" class="col-sm-2 control-label">Birthday:</label>

                                       <!-- <div class="col-sm-5">
                                            <p id="bdp" class="control-label pull-left"><?= $userinfo->birthday?></p>
                                       </div> -->

                                       <div class="col-sm-5">
                                       <a href="javascript:void(0)" id = "cbd" name = "ChangePass"><p id="anchor-element" class="control-label pull-right">Edit</p></a>
                                       </div>

                                       <div class="col-sm-8">
                                           <!-- <input type="date" placeholder="Date of Birth" id="bdi" class="form-control" name="birthday" style="display:none;" value="<?= $userinfo->birthday?>"> -->
                                       </div>

                                       <div class="col-md-2">
                                       <button style="display:none;" type="button" class="donebutton3 btn btn-primary" id="donebutt3"><span class="fa fa-check"></span></button>
                                       <button style="display:none;" type="button" class="delbutton3 btn btn-default" id="delbutt3" ><span class="fa fa-times"></span></button>
                                       </div>
                               </div>
                               <hr />
                               <h5>Contact Information</h5>
                               <hr />

                               <!--FORM EMAIL-->
                               <div id="anchor-div" class="form-group">
                                   <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
                                   <?php echo form_error('email', '<div style="color:red;">', '</div>'); ?>
                                       <div class="col-sm-5">
                                           <p id="emp" class="control-label pull-left"><?= $userinfo->email ?></p>
                                       </div>

                                       <div class="col-sm-5">
                                       <a href="javascript:void(0)" id = "cem" name = "ChangePass"><p id="anchor-element" class="control-label pull-right">Edit</p></a>
                                       </div>

                                       <div class="col-sm-8">
                                           <input type="text" id="emi" name="email" class="form-control" style="display:none;" value="<?= $userinfo->email ?>">
                                           <div id="emailerror"  style="color:red;"></div>
                                       </div>

                                       <div class="col-md-2">
                                       <button style="display:none;" type="button" class="donebutton4 btn btn-primary" id="donebutt4"><span class="fa fa-check"></span></button>
                                       <button style="display:none;" type="button" class="delbutton4 btn btn-default" id="delbutt4"><span class="fa fa-times"></span></button>
                                       </div>
                               </div>

                               <!--FORM ADDRESS-->
                               <div id="anchor-div" class="form-group">
                                   <label for="inputEmail3" class="col-sm-2 control-label">Address:</label>

                                   <div class="col-sm-5">
                                       <p id="adp" class="control-label pull-left"><?= $userinfo->address ?></p>
                                   </div>

                                   <div class="col-sm-5">
                                       <a href="javascript:void(0)" id = "cad" name = "ChangePass"><p id="anchor-element" class="control-label pull-right">Edit</p></a>
                                   </div>

                                   <div class="col-sm-8">
                                     <input type="text" id="adi" name="address" class="form-control" style="display:none;" value="<?= $userinfo->address ?>">
                                   </div>

                                   <div class="col-md-2">
                                       <button style="display:none;" type="button" class="donebutton5 btn btn-primary" id="donebutt5"><span class="fa fa-check"></span></button>
                                       <button style="display:none;" type="button" class="delbutton5 btn btn-default" id="delbutt5" ><span class="fa fa-times"></span></button>
                                   </div>
                               </div>

                               <!--FORM MOBILENUMBER-->
                               <div id="anchor-div" class="form-group">
                                   <label for="inputEmail3" class="col-sm-2 control-label">Mobile Number:</label>

                                   <div class="col-sm-5">
                                       <p id="cnp" class="control-label pull-left"><?= $userinfo->mobilenumber ?></p>
                                   </div>

                                   <div class="col-sm-5">
                                       <a href="javascript:void(0)" id = "ccn" name = "ChangePass"><p id="anchor-element" class="control-label pull-right">Edit</p></a>
                                   </div>

                                   <div class="col-sm-8">
                                     <input type="text" id="cni" name="phonenumber" class="form-control" style="display:none;" value="<?= $userinfo->mobilenumber ?>">
                                   </div>

                                    <div class="col-md-2">
                                       <button style="display:none;" type="button" class="donebutton6 btn btn-primary" id="donebutt6"><span class="fa fa-check"></span></button>
                                       <button style="display:none;" type="button" class="delbutton6 btn btn-default" id="delbutt6" ><span class="fa fa-times"></span></button>
                                   </div>
                               </div>
                               <hr />
                               <h5>Account Information</h5>
                               <hr />

                               <!--FORM PASSWORD-->
                               <div id="anchor-div" class="form-group">
                                   <label for="inputEmail3" class="col-sm-2 control-label">Password:</label>

                                   <div class="col-sm-5">
                                       <p id="pwnp" class="control-label pull-left">*************</p>
                                   </div>

                                   <div class="col-sm-5">
                                       <a href="javascript:void(0)" id = "cpw" name = "ChangePass"><p id="anchor-element" class="control-label pull-right">Edit</p></a>
                                   </div>

                                   <div class="col-sm-8">
                                     <input type="password" id="pwni" name="password" class="form-control" style="display:none;">
                                   </div>

                                   <div class="col-md-2">
                                       <button style="display:none;" type="button" class="donebutton8 btn btn-primary" id="donebutt8"><span class="fa fa-check"></span></button>
                                       <button style="display:none;" type="button" class="delbutton8 btn btn-default" id="delbutt8" ><span class="fa fa-times"></span></button>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
       <div class="gap gap-small"></div>
   </div>
</body>
