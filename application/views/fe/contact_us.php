<?php 
/*echo "<pre>";
print_r($contact_us_data);
echo "</pre>";*/

?>
<script type="text/javascript">
$(document).ready(function() {

$('#sendcontact').click(function() {

var form_data = {
full_name 	: $('#full_name').val(),
mob_no 	: $('#mob_no').val(),
email 	: $('#email').val(),
addr 	: $('#addr').val(),
state 	: $('#state').val(),
comment : $('#comment').val(),
ajax 	: '1'
};
		
		//alert($('#cap_div').text());	
		if($('#email').val()=='')
			{
					//alert("Enter Email ID");
					msg="Please Provide your email address !";
					$('.success-message').html(msg);
					$('.success-message').fadeIn(500).show();
					return false;
								
			}
			else if($('#full_name').val()=='')
			{
            msg="Please provide your full name !";
			//alert("Please provide a valid email address !");
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}
			else if($('#mob_no').val()=='')
			{
            msg="Please provide your mobile number !";
			//alert("Please provide a valid email address !");
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}
			else if(!validateEmail($('#email').val()))
			{
            msg="Please provide a valid email address !";
			//alert("Please provide a valid email address !");
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}
			else if($('#addr').val()=='')
			{
            msg="Please provide your address !";
			//alert("Please provide a valid email address !");
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}
			else if($('#comment').val()=='')
			{
					msg="Please Provide your message !";
					$('.success-message').html(msg);
					$('.success-message').fadeIn(500).show();
					return false;
			
			}
			else
			{
				$('.loading').show();
				$.ajax({
				url: "<?php echo site_url('main/contactus_email'); ?>",
				//url: "main/email_send",
				type: 'POST',
				async : false,
				data: form_data,
				success: function(msg) {
				//alert(msg);
				
				$('.success-message').html(msg);
				$('.success-message').fadeIn(500).show();
				$('.loading').hide();
				}
				});
		
		
		}
return false;
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

		
<div id="sideBar"><a  href="#login-box" class="login-window"><img src="<?php echo site_url('images/contact_bar.png')?>" alt="Contact Us Form" /></a></div>
<div class="clear"></div>
<!-- banner_inner start -->
<div class="banner_inner">
 <img src="<?php echo site_url('images/sub/phato-g.jpg')?>" alt="" /></div>
<!-- banner_inner end -->

<!-- content area start -->

<div class="content_area"> 
<?php echo $contact_us_data->content; ?>
<div class="clear"></div>
</div>

<!-- content area end -->


<!-- Popup from start -->

<div id="login-box" class="login-popup">

<div class="loading"></div>
                    <a href="#" class="close"><img src="<?php echo site_url('images/close_pop.png')?>" class="btn_close" title="Close Window" alt="Close" /></a>
                      <form method="post" class="contact_form" action="<?php echo site_url('');?>>">
                            <ul>
                            <li><label>Full Name <span>*</span></label></li>
                            <li><input type="text" name="full_name" id="full_name" /></li>
                            <li><label>Mobile No. <span>*</span></label></li>
                            <li><input type="text" name="mob_no" id="mob_no" /></li>
                            <li><label>E-mail <span>*</span></label></li>
                            <li><input type="text" name="email" id="email" /></li>
                            <li><label>Address <span>*</span></label></li>
                            <li><textarea cols="" name="addr" id="addr" rows="3"></textarea></li>
                            <li><label>State </label></li>
                            <li><select name="state" id="state">
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
                            </select></li>
                            <li><label>Comment</label></li>
                            <li><textarea cols="" name="comment" id="comment" rows="3"></textarea></li>
                            <li><a href="#"><img src="<?php echo site_url('images/submit.png')?>" alt="Submit" title="Submit"  id="sendcontact"/></a></li>
                            </ul>
							<div class="success-message" style="display:none; color:#FFFFFF; font-size:14px; font-weight:600;"></div>
      </form>
            </div>

<!-- Popup from end -->

<div class="clear"></div>
</div>  
<!-- wrappr end -->
<div class="clear"></div>
<!-- Footer start -->

