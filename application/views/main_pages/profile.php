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
                <a href="javascript:void(0)" id = "edit_1" onclick="editThis(1);"><p id="anchor-element" class="control-label pull-right">Edit</p></a>
              </div>
              <!--Input Text-->
              <div class="col-sm-8">
                <input type="text" id="input_1" name="firstname" class="form-control" style="display:none;" value="<?= $userinfo->consumer_fname?>" required>
                <div id="error_1"  style="color:red;"></div>
              </div>
              <!--BUTTONS-->
              <div class="col-md-2">
                <!--DONE BUTTON-->
                <button style="display:none;" type="button" class="btn btn-primary" id="donebutt_1"><span class="fa fa-check"></span></button>
                <!--CANCEL BUTTON-->
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
                <a href="javascript:void(0)" id = "edit_2" onclick="editThis(2);"><p id="anchor-element" class="control-label pull-right">Edit</p></a>
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
                <a href="javascript:void(0)" id = "edit_3" onclick="editThis(3);"><p id="anchor-element" class="control-label pull-right">Edit</p></a>
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
            <!--FORM ADDRESS-->
            <div id="anchor-div" class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Address:</label>
              <div class="col-sm-5">
                <p id="text_4" class="control-label pull-left"><?= $userinfo->address?></p>
              </div>
              <div class="col-sm-5">
                <a href="javascript:void(0)" id = "edit_4" onclick="editThis(4);"><p id="anchor-element" class="control-label pull-right">Edit</p></a>
              </div>
              <div class="col-sm-8">
                <input type="text" id="input_4" name="address" class="form-control" style="display:none;" value="<?= $userinfo->address?>" required>
                <div id="error_4"  style="color:red;"></div>
              </div>
              <div class="col-md-2">
                <button style="display:none;" type="button" class="btn btn-primary" id="donebutt_4"><span class="fa fa-check"></span></button>
                <button style="display:none;" type="button" class="btn btn-default" id="cancelbutt_4" onclick="cancelEdit(4);"><span class="fa fa-times"></span></button>
              </div>
            </div>
            <!--FORM MOBILENUMBER-->
            <div id="anchor-div" class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Mobile Number:</label>
              <div class="col-sm-5">
                <p id="text_5" class="control-label pull-left"><?= $userinfo->mobilenumber?></p>
              </div>
              <div class="col-sm-5">
                <a href="javascript:void(0)" id = "edit_5" onclick="editThis(5);"><p id="anchor-element" class="control-label pull-right">Edit</p></a>
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
                <a href="javascript:void(0)" id = "edit_6" onclick="editThis(6);"><p id="anchor-element" class="control-label pull-right">Edit</p></a>
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
