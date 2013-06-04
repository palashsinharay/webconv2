<script type="text/javascript">
$(document).ready(function() {
    $('#form1').submit(function() {

		
		//alert($('#cap_div').text());	
		 if($('#name').val()=='')
			{
           // alert("Please provide your full name !");
            msg="Please provide your full name !";
			//alert("Please provide a valid email address !");
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}
			else if($('#mob').val()=='')
			{
//            alert("Please provide your mobile number !");
	        msg="Please provide your mobile number !";
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}
			else if(!validateEmail($('#email').val()))
			{
            //alert("Please provide a valid email address !");
	        msg="Please provide a valid email address !";
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}
			else if($('#addr').val()=='')
			{
//            alert("Please provide your address !");
	        msg="Please provide your address !";
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}
			else if($('#city').val()=='')
			{
//					alert("Please Provide your city !");
		    msg="Please Provide your city !";
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}
			else if($('#last_qulifc').val()=='')
			{
			//alert("Please Provide your Last Qualification !");
		    msg="Please Provide your Last Qualification !";
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}
			else if($('#fileField').val()=='')
			{
		    msg="Please Provide your cv !";
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
//			alert("Please Provide your cv !");
					return false;
			
			}
			
			
//return true;
});
function validateEmail(user_email){
   var filter = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{1,4}$/;
    if(filter.test(user_email)){
        return true;
    }else{
        return false;
    }
}

    
    





});
</script>

<div class="clear"></div>
<!-- banner_inner start -->
<div class="banner_inner">
<img src="<?php echo site_url('images/sub/phato-g.jpg')?>" alt="" /></div>
<!-- banner_inner end -->

<!-- content area start -->

<div class="content_area">


<?php include("common/sidebar_upper.php");?>
<?php include("common/sidebar_lower.php");?>

</div>

<div class="right_pan_area">
<h2>Application <span>Form</span></h2>


<table cellspacing="10" cellpadding="0">
<tr><th>Job Seeker Information</th></tr>
<tr>
<td>
    <form id="form1" action="<?php echo site_url('main/job_email');?>" method="post" enctype="multipart/form-data" class="job_form" >
<table cellspacing="15" cellpadding="0">
<tr><td colspan="2">Please fill up the form below, All Fields Marked with (<span>*</span>) are mandatory</td></tr>
<tr>
<td width="30%"><label>Post Applied For</label></td>
<td width="70%"><input name="post_app" type="text" id="post_app" readonly="readonly" value="<?php echo $recruitmentContent->job_position;?>" /></td>
</tr>
<tr>
<td><label>Serial No.</label></td>
<td>
    <input name="sl_no" type="text" id="sl_no" value="<?php echo $recruitmentContent->job_code;?>" readonly="readonly" />
    <input name="jobid" type="hidden" id="jobid" value="<?php echo $recruitmentContent->id;?>" readonly="readonly" />
</td>
</tr>

<tr>
<td><label>Full Name <span>*</span></label></td>
<td><input type="text" name="name" id="name" /></td>
</tr>

<tr>
<td><label>Mobile No. <span>*</span></label></td>
<td><input type="text" name="mob" id="mob" /></td>
</tr>

<tr>
<td><label>E-mail <span>*</span></label></td>
<td><input type="text" name="email" id="email" /></td>
</tr>

<tr>
<td><label>Address <span>*</span></label></td>
<td><input type="text" name="addr" id="addr" /></td>
</tr>

<tr>
<td><label>State </label></td>
<td><select name="state" id="state">
<option selected="selected">------------------------------ Select State ------------------------------</option>
								<option>Andhra Pradesh</option>
								<option>Assam</option>	
								<option>Andaman & Nicobar</option>	
								<option>Bihar</option>	
								<option>Chandigarh</option>	
								<option>Chhattisgarh</option>
								<option>Delhi</option>	
								<option>Goa</option>
								<option>Gujarat</option>	
								<option>Haryana</option>	 
								<option>Himachal Pradesh</option>	
								<option>Jammu & Kashmir</option>	
								<option>Jharkhand</option>	
								<option>Karnataka</option>	
								<option>Kerala</option>	
								<option>Madhya Pradesh</option>		
								<option>Maharashtra</option>	
								<option>Manipur</option>	
								<option>Meghalaya</option>	
								<option>Mizoram</option>	
								<option>Nagaland</option>	
								<option>Pondicherry</option>	
								<option>Punjab</option>	
								<option>Rajasthan</option>	
								<option>Sikkim</option>		
								<option>Tamilnadu</option>	
								<option>Tripura</option>	
								<option>Uttaranchal</option>	
								<option>Uttar Pradesh</option>	
								<option>West Bengal</option>

</select></td>
</tr>

<tr>
<td><label>City <span>*</span></label></td>
<td><input type="text" name="city" id="city" /></td>
</tr>

<tr>
<td><label>Last Qualification <span>*</span></label></td>
<td><input type="text" name="last_qulifc" id="last_qulifc" /></td>
</tr>

<tr>
<td><label>Upload your Current CV <span>*</span></label></td>
<td><input type="file" name="fileField" id="fileField" />
  <label for="fileField"></label></td>
</tr>
<!--<tr><td></td><td><a href="#"><img src="images/submit.png" alt="Submit" title="Submit" id="send" /></a></td></tr>-->
<tr><td></td><td><input type="submit" value="Apply" /></td></tr>
</table>
<p style="color:#000; font-size:14px; font-weight:600;"><?php echo $message; ?></p>
<div class="success-message" style="display:none; color:#FF0000; font-size:14px; font-weight:600;"></div>

</form>
</td>
</tr>
</table>




<div class="clear"></div>

</div>







<div class="clear"></div>
</div>

<!-- content area end -->








<div class="clear"></div>
</div>  
<!-- wrappr end -->
<div class="clear"></div>
<!-- Footer start -->

