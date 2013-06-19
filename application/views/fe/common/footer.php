<?php 
echo "<pre>";
//print_r($siteConfigureContent);
//echo $siteConfigureContent->footer_content;
echo "</pre>";
?>
<script type="text/javascript">
        $(document).ready(function () {
            
            $('a.login-window').click(function () {
                //Getting the variable's value from a link 
                var loginBox = $(this).attr('href');

                //Fade in the Popup
                $(loginBox).fadeIn(300);

                //Set the center alignment padding + border see css style
                var popMargTop = ($(loginBox).height() + 24) / 2;
                var popMargLeft = ($(loginBox).width() + 24) / 2;

                $(loginBox).css({
                    'margin-top': -popMargTop,
                    'margin-left': -popMargLeft
                });

                // Add the mask to body
                $('body').append('<div id="mask"></div>');
                $('#mask').fadeIn(300);

                return false;
            });

            // When clicking on the button close or the mask layer the popup closed
            $('a.close, #mask').live('click', function () {
                $('#mask , .login-popup').fadeOut(300, function () {
                    $('#mask').remove();
                });
                return false;
            });
       
       
$('#send').click(function() {

var form_data = {
full_name : $('#full_name').val(),
mob_no 	: $('#mob_no').val(),
email 	: $('#email').val(),
status 	: $('#status').val(),
enq_title : $('#enq_title').val(),
subject1 : $('#subject1').val(),
enq_detail : $('#enq_detail').val(),
subject2 : $('#subject2').val(),
ajax 	: '1'
};
		
			if($('#full_name').val()=='')
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
                        else if($('#email').val()=='')
			{
					//alert("Enter Email ID");
					msg="Please Provide your email address !";
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
			else if($('#status').val()=='')
			{
            msg="Please provide your status !";
			//alert("Please provide a valid email address !");
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}
			else if($('#enq_title').val()=='')
			{
					msg="Please Provide your enquiry title !";
					$('.success-message').html(msg);
					$('.success-message').fadeIn(500).show();
					return false;
			
			}
                        else if($('#subject1').val()=='')
			{
					msg="Please Provide your subject of enquiry !";
					$('.success-message').html(msg);
					$('.success-message').fadeIn(500).show();
					return false;
			
			}
                        else if($('#enq_detail').val()=='')
			{
					msg="Please Provide your enquiry detail!";
					$('.success-message').html(msg);
					$('.success-message').fadeIn(500).show();
					return false;
			
			}                         

                        else if($('#subject2').val()=='')
			{
					msg="Please Provide your mode of contact!";
					$('.success-message').html(msg);
					$('.success-message').fadeIn(500).show();
					return false;
			
			}                         
                        else
			{
				$('.loading').show();
				$.ajax({
				url: "<?php echo site_url('main/enquiry_email'); ?>",
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
	<script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||
function(){
   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new
Date();a=s.createElement(o),
    
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a
,m)
    
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

   ga('create', 'UA-41709579-1', 'webcon.in');
   ga('send', 'pageview');

</script>
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
                            <li><label>Status  <span>*</span></label></li>
                            <li>
                            <select  id="status" name="status">
                            <option value="General Enquiry">General Enquiry</option>
                            <option value="Past Client">Past Client</option>
                            <option value="Present Client">Present Client</option>
                            </select>                                
                            </li>
                             <li><label>Enquiry Title <span>*</span></label></li>
                            <li><input type="text" name="enq_title" id="enq_title" /></li>
                            <li><label>Subject </label></li>
                            <li>
                                <select  id="subject1" name="subject1">
                                <option value="Corporate Social Responsibility(CSR) Activities">Corporate Social Responsibility(CSR) Activities</option>
                                <option value="Cluster Development">Cluster Development</option> 
                                <option value="Detailed Design and Engineering">Detailed Design and Engineering</option>
                                <option value="Database Management/Software Development">Database Management/Software Development</option>
                                <option value="Entrepreneurship Development Programmes(EDP)">Entrepreneurship Development Programmes(EDP)</option>
                                <option value="Evaluation/ Impact Assessment Study">Evaluation/ Impact Assessment Study</option>
                                <option value="Faculty Development Programme(FDP)">Faculty Development Programme(FDP)</option>
                                <option value="Industrial Infrastructure Upgradation">Industrial Infrastructure Upgradation </option>
                                <option value="Integrated Infrastructure Development">Integrated Infrastructure Development</option>
                                <option value="Industrial Potential Survey">Industrial Potential Survey</option>
                                <option value="Management Consultancy">Management Consultancy</option>
                                <option value="Market Survey / Research">Market Survey / Research</option>
                                <option value="Organisation Restructuring/ Turnaround Strategy">Organisation Restructuring/ Turnaround Strategy</option>
                                <option value="Organising Seminars/ Workshops">Organising Seminars/ Workshops</option>
                                <option value="Operating Jute Service Centre">Operating Jute Service Centre</option>
                                <option value="Others">Others</option>
                                <option value="Project Monitoring and Supervision">Project Monitoring and Supervision</option>
                                <option value="Planning for Industrial Parks">Planning for Industrial Parks </option>
                                <option value="Placement linked Skill Development Training">Placement linked Skill Development Training</option> 
                                <option value="Rehabilitation/ Sick Unit Study">Rehabilitation/ Sick Unit Study</option>
                                <option value="RIP and Skill Development Technical Training Programme">RIP and Skill Development Technical Training Programme</option>
                                <option value="REGP of KVIC">REGP of KVIC</option>
                                <option value="STED  Project">STED  Project</option>
                                <option value="Special Study/Socio-economic Study/ Survey">Special Study/Socio-economic Study/ Survey</option>
                                <option value="Techno-Economic Viability(TEV) Study">Techno-Economic Viability(TEV) Study</option>
                                <option value="Training under Integrated Skill Development(ISD)">Training under Integrated Skill Development(ISD)</option>
                                <option value="Training, Development and Escort Services(TDES)">Training, Development and Escort Services(TDES)</option>
                                <option value="Technical Consultancy Clinic (TCC) for SMEs on Jute">Technical Consultancy Clinic (TCC) for SMEs on Jute</option>
                                <option value="Valuation of Fixed and Current Assets">Valuation of Fixed and Current Assets</option>
                                </select>
                            </li>
                            <li><label>Enquiry Details:</label></li>
                            <li><textarea cols="" name="enq_detail" id="enq_detail" rows="3"></textarea></li>

                            <li><label>How Would You Like To Be Contacted::</label></li>
                            <li>
                            <select  id="subject2" name="subject2">
                            <option value="Mobile">Mobile</option>
                            <option value="Email">Email</option> 
                            </select>
                                
                            </li>

                            <li><a href="#"><img src="<?php echo site_url('images/submit.png')?>" alt="Submit" title="Submit"  id="send"/></a></li>
                            </ul>
							<div class="success-message" style="display:none; color:#FFFFFF; font-size:14px; font-weight:600;"></div>
      </form>
            </div>

<!-- Footer start -->
<div class="footer">
    <div id="footer_content">
    <div class="foot_link">
    <ul class="first_link">
    <li> <a  href="#login-box" class="login-window">Enquiry</a> <span>|</span></li> 
    <li><a href="<?php echo site_url('main/categories/5')?>">Services</a> <span>|</span></li>   
    <li><a href="<?php echo site_url('main/page/33')?>">Our Team</a> <span>|</span></li> 
    <li><a href="<?php echo site_url('main/recruitment')?>">Recruitment</a> <span>|</span></li> 
    <li><a href="<?php echo site_url('main/gallery')?>">Photo Gallery</a> <span>|</span></li> 
    <li><a href="<?php echo site_url('main/sitemap')?>">Site Map</a> <span>|</span></li> 
    <li><a href="<?php echo site_url('main/contact_us')?>">Contact Us</a></li> 
    </ul>
    <div class="clear"></div>
    <ul class="second_link">
    <li><a href="<?php echo site_url('main/page/61')?>">Privacy Policy</a> <span>|</span></li>  
    <li><a href="<?php echo site_url('main/page/62')?>">Disclaimer</a> <span>|</span></li>   
    <li><a href="<?php echo site_url('main/page/63')?>">Terms &amp; Conditions</a></li> 
    </ul>
    </div>
    <div class="footer_address">
<!--    <h6>Webcon Consulting (India) Ltd.</h6>
    <ul>
    <li>Chatterjee International Centre, 4th Floor</li>
    <li>33A, Jawaharlal Nehru Road</li>
    <li>Kolkata – 700 071, West Bengal, India</li>
    <li>Phone: (033) 22266527/ 6278 , 40706060/61  <span>|</span>  Fax: (033) 22881884</li>
    <li>Email: <a href="mailto:info@webcon.in">info@webcon.in</a>  <span>|</span> Website: <a href="http://www.webcon.in" target="_blank">www.webcon.in</a></li>

    </ul>-->

<?php  echo $siteConfigureContent->footer_content; ?>
    </div>
    </div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="copyright">
<div class="copyright_txt">Copyright &copy; 2012. Webcon Consulting (India) Ltd. All rights reserved.</div>
</div>
<!-- Footer end -->
</body>
</html>
