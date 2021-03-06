<!-- CONTENT-WRAPPER-->
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Profile</h4>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="javascript:" ><i class="icofont icofont-home"></i></a>
                        </li>
                        </li>
                        <li class="breadcrumb-item"><a href="javascript:" >Profile</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- Header end -->
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="card faq-left">
                        <div class="card-block">
						<img class="img-fluid" src="<?php echo base_url();?><?php echo @$profiledata[image]; ?>" alt="" style="max-width: 50%">
						</br>
                          
                            <ul>
							<li class="faq-contact-card">
                                    <i class="icofont icofont-ui-user"></i>
                                    <?php echo ucwords(@$profiledata[username]);  ?>
                                </li>
                              
                                <li class="faq-contact-card">
                                    <i class="icofont icofont-email"></i>
                                    <?php echo @$profiledata[email]; ?>
                                </li>
                            </ul>
                            <div class="faq-profile-btn">
                                <!-- <button type="button" class="btn btn-primary waves-effect waves-light">Follows
                                </button>
                                <button type="button" class="btn btn-success waves-effect waves-light">Message
                                </button> -->
                        </div>

                    </div>
                    </div>
                    <!-- end of card-block -->
                    
                    <!-- end of card -->
                </div>
                <!-- end of col-lg-3 -->

                <!-- start col-lg-9 -->
                <div class="col-xl-9 col-lg-8">
                    <!-- Nav tabs -->
                    <div class="tab-header">
                        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link " data-toggle="tab" href="#personal" role="tab"><i>Personal Info</i></a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link" data-toggle="tab" href="#tab2" role="tab"><i>Change Password</i></a>
                                <div class="slide"></div>
                            </li>
                        </ul>
                    </div>
                    <!-- end of tab-header -->

                    <div class="tab-content">
                        <div class="tab-pane active" id="personal" role="tabpanel">
                            <div class="card">
                                <div class="card-header"><h5 class="card-header-text">About Me</h5>
                                   
                                </div>
                                <div class="card-block">
                                   
                                    <!-- end of view-info -->

    <div class="edit-info">
    <div class="row">
        <div class="col-lg-12">
            <div class="general-info">
                <div class="row">
                    <div class="col-lg-12">
                 <form id="profile_update" method="post">
				  <div class="alert alert-warning" id="forgot_pwd_msg" style="display:none;">
		<a href="#" class="close" data-dismiss="alert">&times;</a>
		<span  id="forgot_msg"> </span>
	</div>
                     <table class="table">
                        <tbody>
                    
                        <tr>
                            <td>
                                <div class="md-group-add-on">
                                 <span class="md-add-on">
                                     <i class="icofont icofont-ui-user"></i>
                                 </span>
                                    <div class="md-input-wrapper">
                                <input type="text" class="md-form-control" value="<?php echo @$profiledata[username]; ?>" placeholder="Please Enter Name" name="data[username]">

                                <input type="hidden" name="data[id]" value="<?php echo @$profiledata[id]; ?>">
                                      
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>

                                <div class="form-radio">
                                   
                                    <div class="md-group-add-on">
                                    <span class="md-add-on">
                                    <i class="icofont icofont-group-students"></i>
                                    </span>
                               
                             </div>
                         
                        </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="md-group-add-on">
                            <span class="md-add-on-file">
                            <button class="btn btn-success waves-effect waves-light">File</button>
                            </span>
                            <div class="md-input-file">
                                <input type="file" class="" name="image">
                                <input type="text" class="md-form-control md-form-file">
                                <label class="md-label-file">Upload Profile Pic</label>
                            <span class="md-line"></span></div>
                            <input type="hidden" name="old_image" value="<?php echo @$profiledata[image];?>">
                        </div>
                        </td>
                    </tr>

                     <tr>
                        <td>
                            <div class="md-group-add-on">
                             <span class="md-add-on">
                                 <i class="icofont icofont-email"></i>
                             </span>
                                <div class="md-input-wrapper">
                            <input type="email" class="md-form-control" value="<?php echo @$profiledata[email]; ?>" placeholder="Enater Your Email" name="data[email]">
                                    <!-- <label>Email</label> -->
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="md-group-add-on">
                             <span class="md-add-on">
                                 <i class="icofont icofont-address-book"></i>
                             </span>
                                <div class="md-input-wrapper">
                            <input type="text" class="md-form-control" value="<?php echo @$profiledata[address]; ?>" placeholder="Enater Your address" name="data[address]" >
                                   
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="md-group-add-on">
                             <span class="md-add-on">
                                 <i class="icofont icofont-5-star-hotel"></i>
                             </span>
                                <div class="md-input-wrapper">
								<select class="md-form-control" name="data[country_id]" >
								<option value="">Select Country</option>

							 <?php foreach($cities as $c_data) { ?>

									
								<option value="<?php echo $c_data['id'];?>" <?php echo (($profiledata['country_id']==$c_data['id'])) ? 'selected' : '' ; ?>><?php echo $c_data['name_'.$lang];?></option>	

								 <?php }  ?>
                            <!--<input type="text" class="md-form-control" value="<?php echo @$profiledata[country_id]; ?>" placeholder="Enter Your country" name="data[country_id]" >-->
                                   </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="md-group-add-on">
                             <span class="md-add-on">
                                 <i class="icofont icofont-mobile-phone"></i>
                             </span>
                                <div class="md-input-wrapper">
                                    <input type="number" class="md-form-control" placeholder="Enter Your Mobile Number" id="mobile"  name="data[phone_number]"   value="<?php echo @$profiledata[phone_number]; ?>">
                                   <!--  <label>Mobile Number</label> -->
                                </div>
                            </div>
                        </td>

                    </tr>
					

                    <tr>
                        <td>
                            <button type="submit" class="btn btn-warning waves-effect waves-light m-r-30 update_profile" style="margin-left: 50%;">Submit</button>
                        </td>
                    </tr>
               
                    
                    </tbody>
                </table>
                 </form>
            </div>
            
            <!-- end of table col-lg-12 -->

            

                                                       
                                                    </div>
                                                    <!-- end of row -->
                                                    <!-- <div class="text-center">
                                                        <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                        <!-- <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a> -->
                                                    <!--</div> -->
                                                </div>
                                                <!-- end of edit info -->
                                            </div>
                                            <!-- end of col-lg-12 -->
                                        </div>
                                        <!-- end of row -->

                                    </div>
                                    <!-- end of view-info -->
                                </div>
                                <!-- end of card-block -->
                            </div>
                            <!-- end of card-->
                            
                            <!-- end of row of education and experience  -->
       </div>
                            
                            <!-- end of row -->
                          <div class="tab-pane fade " id="tab2" role="tabpane">
                            <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Change Password</h5>
                                    
                                </div>

                             <div class="card-block">
                                   
                                    <!-- end of view-info -->

                                    <div class="edit-info">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="general-info">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <form id="change_password" method="post">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-xs-3 col-form-label form-control-label">Old Password</label>
                                        <div class="col-sm-9">
                                        <input class="form-control" type="password" value="" id="" name="data2[password]">
                                        <input type="hidden" name="data2[id]" value="<?php echo @$profiledata[id]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-xs-3 col-form-label form-control-label">New Password</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="password"  id="password_length" name="data2[new_pass]">
                                            <span id="min_char" style="color:red;text-align:center"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-xs-3 col-form-label form-control-label">Confirm Password</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="Password"  name="confirm_pass">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-xs-2 col-form-label form-control-label"></label>
                                        <div class="col-sm-10">
                                            <button type="button" class="btn btn-warning waves-effect waves-light m-r-30 change_password" style="margin-left: 50%;">Submit</button>
                                        </div>
                                    </div>
                                                             </form>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->
                                                    </div>
                                                    <!-- end of row -->
                                                    <div class="text-center">
                                                       <!--  <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a> -->
                                                        <!-- <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a> -->

                                                    </div>
                                                </div>
                                                <!-- end of edit info -->
                                            </div>
                                            <!-- end of col-lg-12 -->
                                        </div>
                                        <!-- end of row -->

                                    </div>
                                    <!-- end of view-info -->
                                </div>

                                </div>
                           
                          </div>
                     
                        <!-- end of tab-pane -->
                        <!-- end of about us tab-pane -->

                       

                    </div>
                    <!-- end of main tab content -->
                </div>
            </div>

        </div>

        <!-- Container-fluid ends -->
<footer class="f-fix">
    <div class="footer-bg b-t-muted" style="text-align: center;"> Copyrights © <?php echo date('Y');?> Volivesolutions. All Rights Reserved.
                   
                   
                    </div>
     </footer>
    </div>
 <!-- CONTENT-WRAPPER-->
 <script type="text/javascript">
  
function ValidateNo() {
  var phoneNo = document.getElementById('mobile');
  //alert(phoneNo);

  if (phoneNo.value == "" || phoneNo.value == null) {
      $("#forgot_pwd_msg").css("display", "block");
	   $('#forgot_pwd_msg').show().delay(2500).fadeOut('slow');
	   $("#forgot_msg").html('Please enter your Contact Number.');
       return false;
  }
  if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
    $("#forgot_pwd_msg").css("display", "block");
	   $('#forgot_pwd_msg').show().delay(2500).fadeOut('slow');
	   $("#forgot_msg").html('Mobile No. is not valid, Please Enter 10 Digit Contact Number.');
    
	  $('#mobile').focus();
      return false;
  }
  
}
	
    $("#profile_update").validate({       
            rules: {
              "data[username]"       : "required",
              "data[address]"        : "required",
              "data[country_id]"     : "required",
			  "data[phone_number]"   : "required",
			  "data[email]"          : "required",
              
            
              
            },
            messages : {
              "data[username]"      : "Please Enter your name",
			  "data[email]"         : "Please Enter email",
              "data[address]"       : "Please Enter address",
              "data[phone_number]"  : "Please Enter your phone number",
			  "data[country_id]"    : "Please Enter your country",
            
            },     
    });
    $('.update_profile').on("click",function(event){ 
        event.preventDefault();
        var validator = $("#profile_update").validate();
            validator.form();
            if(validator.form() == true){
               
                var data = new FormData($('#profile_update')[0]);     
                $.ajax({                
                    url: "<?php echo base_url();?>/admin/updateusers/users",
                    type: "POST",
                    data: data,
                    mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData:false,
                    error:function(request,response){
                        console.log(request);
                    },                  
                    success: function(result){
                    var obj = jQuery.parseJSON(result);
                          if (obj.status == 'success') {
                           //alert(obj.message);
                            location.reload();                  
                          } else if (obj.status =='error') {
                            $.notify({
                                    title: '<strong>Hello!</strong>',
                                    message: obj.message
                                  },{
                                    type: 'warning'
                                  });
                          } else {
                            
                          }
                    }
                });
            }
        });


 $(".change_password").click(function(){
	
      var validator = $("#change_password").validate();
      validator.form();
      if(validator.form() == true)
      {
        
        if($('#password_length').val().length >= 6){
           $('#min_char').css('display','none');
           var data = new FormData($('#change_password')[0]);
           $.ajax({
            url: "<?php echo base_url()?>/admin/update_pwd/users",
            type: "POST",
            dataType: "html",
            mimeType: "multipart/form-data",
            data: data,
            contentType: false,
            cache: false,
            processData:false,
              success: function(result){
                var obj = jQuery.parseJSON(result);
                  if (obj.status == 'success') {
                   //alert(obj.message);
                    location.reload();                  
                  } else if (obj.status =='error') {
                    $.notify({
                            title: '<strong>Sorry </strong>',
                            message: obj.message
                          },{
                            type: 'warning'
                          });
                  } else {
                    
                  }
            }
     
          });
       
        }else{
            $('#min_char').html('Minimum 6 characters required !');
        }
        
      }
      else{
        $('.show_alert').css('display','block');
        $("body,html").animate({scrollTop: 0}, 'slow');
      }
    });



$("#change_password").validate({
      rules: {
          "data2[password]"          : "required",
          "data2[new_pass]"          : "required",
          "confirm_pass"             : {required:true,equalTo:'[name="data2[new_pass]"]'}
        },
        messages : {
          "data2[password]"          : "Please Enter Old Password",
          "data2[new_pass]"                 : "Please Enter New Password",
          "confirm_pass"             : "<p style='color:red;text-align:center;margin-top:10px;'>New Password and Confirm Password should be same !</p>"
        }
    });



 </script>

 <style type="text/css">
     .nav-tabs .slide {
   
    width: calc(100% / 2);
}
.md-tabs .nav-item {
   
    width: calc(100% / 2);
}
 .error{
   color:red;
   font-size: 13px;
    }
    li.nav-item.active {
    border-bottom: 3px solid #76b0ae;
}
label.error {
        color: red;
    top: -5px;
}
 </style>
