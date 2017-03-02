<div class="global-wrapper clearfix" id="global-wrapper">
  <div class="container-fluid">
    <div class="row">
      <?php $this->load->view('navigation/profilemenu');?>
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
              <!--Paragraph-->
              <div class="col-sm-5">
                <p id="text_1" class="control-label pull-left"><?= $userinfo->consumer_fname?></p>
              </div>
              <!--Edit Hover-->
              <div class="col-sm-5">
                <a href="javascript:void(0)" id = "edit_1" onclick="editThis(1);"><p id="anchor-element" class="control-label pull-right hidden-xs">Edit</p></a>
                <a href="javascript:void(0)" id = "edit_1" onclick="editThis(1);"><p id="anchor-element" class="control-label pull-right visible-xs"><span class="fa fa-cog"></span></p></a>
              </div>
              <!--Input Text-->
              <div class="col-sm-8">
                <input type="text" id="input_1" name="firstname" class="form-control" style="display:none;" value="<?= $userinfo->consumer_fname?>" required>
                <div id="error_1"  style="color:red;"></div>
              </div>
              <!--BUTTONS-->
              <div class="col-md-2">
                <button style="display:none;" type="button" class="btn btn-primary" id="donebutt_1"><span class="fa fa-check"></span></button>
                <button style="display:none;" type="button" class="btn btn-default" id="cancelbutt_1" onclick="cancelEdit(1);"><span class="fa fa-times"></span></button>
              </div>
            </div>
            <!--FORM LASTNAME-->
            <div id="anchor-div" class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Lastname:</label>
              <!--Paragraph-->
              <div class="col-sm-5">
                <p id="text_2" class="control-label pull-left"><?= $userinfo->consumer_lname?></p>
              </div>
              <!--Edit Hover-->
              <div class="col-sm-5">
                <a href="javascript:void(0)" id = "edit_2" onclick="editThis(2);"><p id="anchor-element" class="control-label pull-right hidden-xs">Edit</p></a>
                <a href="javascript:void(0)" id = "edit_2" onclick="editThis(2);"><p id="anchor-element" class="control-label pull-right visible-xs"><span class="fa fa-cog"></span></p></a>
              </div>
              <!--Input Text-->
              <div class="col-sm-8">
                <input type="text" id="input_2" name="lastname" class="form-control" style="display:none;" value="<?= $userinfo->consumer_lname?>" required>
                <div id="error_2"  style="color:red;"></div>
              </div>
              <!--BUTTONS-->
              <div class="col-md-2">
                <!--DONE BUTTON-->
                <button style="display:none;" type="button" class="btn btn-primary" id="donebutt_2"><span class="fa fa-check"></span></button>
                <!--CANCEL BUTTON-->
                <button style="display:none;" type="button" class="btn btn-default" id="cancelbutt_2" onclick="cancelEdit(2);"><span class="fa fa-times"></span></button>
              </div>
            </div>
            <hr />
            <h5>Contact Information</h5>
            <hr />
            <!--FORM EMAIL-->
            <div id="anchor-div" class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
              <div class="col-sm-5">
                <p id="text_3" class="control-label pull-left"><?= $userinfo->email?></p>
              </div>
              <div class="col-sm-5">
                <a href="javascript:void(0)" id = "edit_3" onclick="editThis(3);"><p id="anchor-element" class="control-label pull-right hidden-xs">Edit</p></a>
                <a href="javascript:void(0)" id = "edit_3" onclick="editThis(3);"><p id="anchor-element" class="control-label pull-right visible-xs"><span class="fa fa-cog"></span></p></a>
              </div>
              <div class="col-sm-8">
                <input type="email" id="input_3" name="email" class="form-control" style="display:none;" value="<?= $userinfo->email?>" required>
                <div id="error_3"  style="color:red;"></div>
              </div>
              <div class="col-md-2">
                <button style="display:none;" type="button" class="btn btn-primary" id="donebutt_3"><span class="fa fa-check"></span></button>
                <button style="display:none;" type="button" class="btn btn-default" id="cancelbutt_3" onclick="cancelEdit(3);"><span class="fa fa-times"></span></button>
              </div>
            </div>
            <div id="anchor-div" class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Mobile Number:</label>
              <div class="col-sm-5">
                <p id="text_5" class="control-label pull-left"><?= $userinfo->mobilenumber?></p>
              </div>
              <div class="col-sm-5">
                <a href="javascript:void(0)" id = "edit_5" onclick="editThis(5);"><p id="anchor-element" class="control-label pull-right hidden-xs">Edit</p></a>
                <a href="javascript:void(0)" id = "edit_5" onclick="editThis(5);"><p id="anchor-element" class="control-label pull-right visible-xs"><span class="fa fa-cog"></span></p></a>
              </div>
              <div class="col-sm-8">
                <input type="text" id="input_5" name="mobilenumber" class="form-control" style="display:none;" value="<?= $userinfo->mobilenumber?>" required>
                <div id="error_5"  style="color:red;"></div>
              </div>
              <div class="col-md-2">
                <button style="display:none;" type="button" class="btn btn-primary" id="donebutt_5"><span class="fa fa-check"></span></button>
                <button style="display:none;" type="button" class="btn btn-default" id="cancelbutt_5" onclick="cancelEdit(5);"><span class="fa fa-times"></span></button>
              </div>
            </div>
            <hr>
            <div id="anchor-div" class="form-group">
              <h5 for="inputEmail3" class="col-sm-2 text-left">Address:</h5>
              <div class="col-sm-5">
              </div>
              <div class="col-sm-5">
                <a href="javascript:void(0)" id = "edit_4" onclick="editThis(4);"><p id="anchor-element" class="control-label pull-right hidden-xs">Edit</p></a>
                <a href="javascript:void(0)" id = "edit_4" onclick="editThis(4);"><p id="anchor-element" class="control-label pull-right visible-xs"><span class="fa fa-cog"></span></p></a>
              </div>
              <div class="pull-right">
                <button style="display:none;" type="button" class="btn btn-primary" id="donebutt_4"><span class="fa fa-check"></span></button>
                <button style="display:none;" type="button" class="btn btn-default" id="cancelbutt_4" onclick="cancelEdit(4);"><span class="fa fa-times"></span></button>
              </div>
            </div>
            <hr>
            <!--DISPLAY ONLY START-->
            <div id="text_4">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label"><b>Primary Address</b></label>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Building Name:</label>
                <div class="col-sm-5">
                  <p id="buildingname_text" class="control-label pull-left"><?= $userinfo->building_name;?></p>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Street:</label>
                <div class="col-sm-5">
                  <p id="street_text" class="control-label pull-left"><?= $userinfo->street_name;?></p>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Floor/Unit/Room #:</label>
                <div class="col-sm-5">
                  <p id="floorunitroom_text" class="control-label pull-left"><?= $userinfo->floorunitroom_num;?></p>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">City:</label>
                <div class="col-sm-5">
                  <p id="city_text" class="control-label pull-left"><?= $userinfo->city_name;?></p>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Postcode:</label>
                <div class="col-sm-5">
                  <p id="postcode_text" class="control-label pull-left"><?= $userinfo->postcode;?></p>
                </div>
              </div>
              <!-- <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Add New Address:</label>
                <div class="col-sm-5">
                  <p class="control-label pull-left"><button type="button" onclick="newAddressForm();" class="btn btn-success"><span class="fa fa-plus"></span></button></p>
                </div>
              </div> -->
            </div>
            <!--DISPLAY ONLY END--->
            <!--INPUT ONLY START-->
            <div id="input_4" style="display:none;">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Building Name:</label>
              <div class="col-sm-7">
                <input type="text" id="buildingname" value="<?= $userinfo->building_name;?>" name="address" class="form-control" required>
                <div id="error_4"  style="color:red;"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Street:</label>
              <div class="col-sm-7">
                <input type="text" id="street" value="<?= $userinfo->street_name;?>" class="form-control" required>
                <div id="error_4"  style="color:red;"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Floor/Unit/Room:</label>
              <div class="col-sm-7">
                <input type="text" id="floorunitroom" value="<?= $userinfo->floorunitroom_num;?>" class="form-control" required>
                <div id="error_4"  style="color:red;"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">City:</label>
              <div class="col-sm-7">
                <input type="text" id="city" value="<?= $userinfo->city_name;?>" class="form-control" required>
                <div id="error_4"  style="color:red;"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Postcode:</label>
              <div class="col-sm-7">
                <input type="text" id="postcode" value="<?= $userinfo->postcode;?>" class="form-control" required>
                <div id="error_4"  style="color:red;"></div>
              </div>
            </div>
            </div>
            <div id="showform" style="display:none;">
              <hr>
              <div class="form-group">
                <h5 for="inputEmail3" class="col-sm-2 text-left">New Address:</h5>
                <div class="col-sm-5">
                </div>
                <div class="col-sm-5">
                  <a href="javascript:void(0)" id = "edit_4" onclick="editThis(4);"><p id="anchor-element" class="control-label pull-right hidden-xs">Edit</p></a>
                  <a href="javascript:void(0)" id = "edit_4" onclick="editThis(4);"><p id="anchor-element" class="control-label pull-right visible-xs"><span class="fa fa-cog"></span></p></a>
                </div>
                <div class="pull-right">
                  <button type="button" class="btn btn-primary"><span class="fa fa-check" id="newAddress"></span></button>
                  <button type="button" class="btn btn-default" onclick="cancelnewAddressForm();"><span class="fa fa-times"></span></button>
                </div>
              </div>
              <hr>
              <!--NEW ADDRESS INPUT START-->
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Building Name:</label>
                <div class="col-sm-7">
                  <input type="text" id="newbuildingname" name="address" class="form-control" required>
                  <div id="error_4"  style="color:red;"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Street:</label>
                <div class="col-sm-7">
                  <input type="text" name="address"  id="newstreet" class="form-control" required>
                  <div id="error_4"  style="color:red;"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Floor/Unit/Room:</label>
                <div class="col-sm-7">
                  <input type="text" name="address"  id="newfloorunitroom" class="form-control" required>
                  <div id="error_4"  style="color:red;"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">City:</label>
                <div class="col-sm-7">
                  <input type="text" name="address" id="newcity" class="form-control" required>
                  <div id="error_4"  style="color:red;"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Postcode:</label>
                <div class="col-sm-7">
                  <input type="text" name="address" id="newpostcode" class="form-control" required>
                  <div id="error_4"  style="color:red;"></div>
                </div>
              </div>
              <!--NEW ADDRESS INPUT END-->
            </div>
            <!--INPUT ONLY END-->
            <hr />
            <h5>Account Information</h5>
            <hr />
            <!--FORM PASSWORD-->
            <div id="anchor-div" class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Password:</label>
              <div class="col-sm-5">
                <p id="text_6" class="control-label pull-left">***********</p>
              </div>
              <div class="col-sm-5">
                <a href="javascript:void(0)" id = "edit_6" onclick="editThis(6);"><p id="anchor-element" class="control-label pull-right hidden-xs">Edit</p></a>
                <a href="javascript:void(0)" id = "edit_6" onclick="editThis(6);"><p id="anchor-element" class="control-label pull-right visible-xs"><span class="fa fa-cog"></span></p></a>
              </div>
              <div class="col-sm-8">
                <input type="text" id="input_6" name="password" class="form-control" style="display:none;" required>
                <div id="error_6"  style="color:red;"></div>
              </div>
              <div class="col-md-2">
                <button style="display:none;" type="button" class="btn btn-primary" id="donebutt_6"><span class="fa fa-check"></span></button>
                <button style="display:none;" type="button" class="btn btn-default" id="cancelbutt_6" onclick="cancelEdit(6);"><span class="fa fa-times"></span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="gap gap-small"></div>
 </div>
