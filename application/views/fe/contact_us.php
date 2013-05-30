<?php 
/*echo "<pre>";
print_r($contact_us_data);
echo "</pre>";*/

?>
<script type="text/javascript">
$(document).ready(function() {

$('#send').click(function() {

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

<!--<h2>Contact <span>Us</span></h2>

<table cellpadding="0" cellspacing="10" class="contact_tbl">
<tr>
<td width="48%">
<h4>Registered &amp; Head Office</h4>
<ul class="botm_line">
<li>West Bengal Consultancy Organisation Ltd. (WEBCON)</li>
<li>Shilpa Bhavan (3rd floor), 31, Black Burn Lane</li>
<li>Kolkata - 7000 012, West Bengal, India</li>
<li><strong>Phone:</strong> (033) 2225 1229/1230/1575 <span>|</span> Fax: (033) 2225 1357</li>
<li><strong>Email:</strong> <a href="mailto:info@webcon.in">info@webcon.in</a> <span>|</span> <strong>Website:</strong> <a href="http://www.webcon.in" target="_blank">www.webcon.in</a></li>
</ul>

<div class="clear_5"></div>

<h4>Annexe</h4>
<ul class="botm_line">
<li>Chatterjee International Centre, 4th floor</li>
<li>33A, J.L. Nehru Road, Kolkata – 700071, West Bengal, India</li>
<li><strong>Phone:</strong> (033) 22266527 / 6278, 40706060 / 61</li>
<li><strong>Fax:</strong> (033) 22881884</li>
<li><strong>E-mail:</strong> <a href="mailto:info@webcon.in">info@webcon.in</a></li>
<li><strong>Contact:</strong> Shri N.R. Kar, Dy. General Manager</li>
</ul>

<div class="clear_5"></div>

<h4>Area Offices</h4>
<ul class="botm_line">
<li><strong>A&N Consultancy Centre (ANCON)</strong></li>
<li>Flat No. 1, 1st floor, 28, J.N. Road, Haddo,</li>
<li>Port Blair – 744102</li>
<li>A &amp; N Islands, India</li>
<li><strong>Phone:</strong> (03192) 232993</li>
<li><strong>E-mail:</strong> <a href="mailto:anconpb@webcon.in">anconpb@webcon.in</a></li>
<li><strong>Contact:</strong> Shri J. Abraham, Officer-in-Charge</li>
<li class="clear_5"></li>
<li><strong>Sikkim Consultancy Centre (SICON)</strong></li>
<li>Targains Lee (opp. to Om Nivas), Church Road</li>
<li>Gangtok – 737101, Sikkim, India</li>
<li><strong>Phone:</strong> (03592) 203059</li>
<li><strong>E-mail:</strong> sicongtk@webcon.in</li>
<li><strong>Contact:</strong> Shri D. Chakraborty, Officer-in-Charge</li>
</ul>

<div class="clear_5"></div>

<h4>Resident Office</h4>
<ul>
<li><strong>Phone:</strong> 09778289069</li>
<li><strong>E-mail:</strong> webconbhubaneswar@webcon.in</li>
<li><strong>Contact:</strong> Shri Charak Mishra, Advisor </li>
</ul>
</td>
<td></td>
<td width="48%">
<h4>Branch Offices</h4>
<ul class="botm_line">
<li><strong>WEBCON Siliguri Branch</strong></li>
<li>Bipin Pal Sarani, Netaji More, Subhaspally, Siliguri - 734401 West Bengal, India</li>
<li><strong>Phone:</strong> (0353) 2526677</li>
<li><strong>E-mail:</strong> <a href="mailto:webconsiliguri@webcon.in">webconsiliguri@webcon.in</a></li>
<li><strong>Contact:</strong> Shri S.M. Gupta, Officer-in-Charge</li>
</ul>

<div class="clear_5"></div>

<ul class="botm_line">
<li><strong>WEBCON Medinipur Branch</strong></li>
<li>7, West Avenue, Bidhan Nagar (Besides Mohua Cinema), Medinipur - 721101 West Bengal, India</li>
<li><strong>Phone:</strong> (03222) 263862</li>
<li><strong>E-mail:</strong> <a href="mailto:webconmedinipur@webcon.in">webconmedinipur@webcon.in</a></li>
<li><strong>Contact:</strong> Shri R.P. Sinha, Officer-in-Charge</li>
</ul>
 
<div class="clear_5"></div>

<ul class="botm_line">
<li><strong>WEBCON Tamluk Branch</strong></li>
<li>Shankarara, Hospital More, Tamluk, Purba Medinipur - 721636, West Bengal, India</li>
<li><strong>Phone:</strong> (03228) 267493</li>
<li><strong>E-mail:</strong> <a href="mailto:webcontamluk@webcon.in">webcontamluk@webcon.in</a></li>
<li><strong>Contact:</strong> Shri R.P. Sinha, Officer-in-Charge</li>
</ul>

<div class="clear_5"></div>

<ul class="botm_line">
<li><strong>WEBCON Bardhaman Branch</strong></li>
<li>Ramkrishna Pally, Kalna Road (Near Kali Mandir), Bardhaman – 713101, West Bengal, India</li>
<li><strong>Phone:</strong> (0342) 2568378</li>
<li><strong>E-mail:</strong> <a href="mailto:webconbardhaman@webcon.in">webconbardhaman@webcon.in</a></li>
<li><strong>Contact:</strong> Shri D. Chakraborty, Officer-in-Charge</li>
</ul>
 
<div class="clear_5"></div>

<ul class="botm_line">
<li><strong>WEBCON Howrah Branch</strong></li>
<li>C/o. Central Engineering Organisation Dasnagar, CTI Road, Howrah - 711105, West Bengal, India</li>
<li><strong>Tele-fax:</strong> (033) 26538113</li>
<li><strong>E-mail:</strong> <a href="mailto:webconhowrah@webcon.in">webconhowrah@webcon.in</a></li>
<li><strong>Contact:</strong> Shri D. Bandyopadhyay, Officer-in-Charge</li>
</ul>
 
<div class="clear_5"></div>

<ul>
<li><strong>WEBCON Behrampore Branch</strong></li>
<li>14, Barrack Square (North), Berhampore - 742101, West Bengal, India</li>
<li><strong>Phone:</strong> (03482) 277285</li>
<li><strong>E-mail:</strong> <a href="mailto:webconberhampore@webcon.in">webconberhampore@webcon.in</a></li>
<li><strong>Contact:</strong> Shri N.C. Baral, Officer-in-Charge</li>
</ul>
</td>
</tr>

</table>
-->

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
                            <li><a href="#"><img src="<?php echo site_url('images/submit.png')?>" alt="Submit" title="Submit"  id="send"/></a></li>
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

