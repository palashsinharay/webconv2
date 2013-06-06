<script type="text/javascript">
$(document).ready(function() {

$('#clickpartner').click(function() {
//alert("hii");
var form_data = {
full_name 	: $('#full_name').val(),
mob_no 	: $('#mob_no').val(),
email 	: $('#email').val(),
detail  : $('#detail').val(),
ajax 	: '1'
};
		
		//alert($('#cap_div').text());	
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
			else if($('#detail').val()=='')
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
				url: "<?php echo site_url('main/partners_email'); ?>",
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

<?php //include ("common/header.php");?>
<?php 
/*echo "<pre>";
print_r($pageDetail);
echo "</pre>";*/
?>
<div class="clear"></div>
<!-- banner_inner start -->
<div class="banner_inner">
  <?php if($partners_data->filename != NULL):?>
    <img src="<?php echo site_url('assets/uploads/files/')."/".$partners_data->filename?>" alt="" />
    <?php else : ?>
    <img src="<?php echo site_url('images/sub/Specialised-Service.jpg')?>" alt="" />
    <?php endif;?>
 </div>
<!-- banner_inner end -->

<!-- content area start -->

<div class="content_area">

<?php include("common/sidebar_upper.php");?>
<?php include("common/sidebar_lower.php");?>


</div>

<div class="right_pan_area">
<h2><?php echo $partners_data->menutitle;?></h2>
<?php echo $partners_data->content; ?>


<!-- Popup from start -->


                    
                      <form method="post" class="contact_form" action="<?php echo site_url('');?>>">
                          <table cellpadding="0" cellspacing="5" class="partner_tbl">
                              <tr>
                                  <td>Full name : <span>*</span></td>
                                  <td><input type="text" name="full_name" id="full_name" /></td>
                              </tr>
                              <tr>
                                  <td>Mobile Number : <span>*</span></td>
                                  <td><input type="text" name="mob_no" id="mob_no" /></td>
                              </tr>
                              <tr>
                                  <td>Email : <span>*</span></td>
                                  <td><input type="text" name="email" id="email" /></td>
                              </tr>
                              <tr>
                                  <td>Detail : <span>*</span></td>
                                  <td><textarea cols="" name="detail" id="detail" rows="3"></textarea></td>
                              </tr>
                              <tr>
                                  <td colspan="2"><img src="<?php echo site_url('images/submit.png')?>" alt="Submit" title="Submit"  id="clickpartner"/></a></td>
                              </tr>
                              <tr>
                                  <td colspan="2"><div class="success-message" style="display:none; color:#FF0000; font-size:14px; font-weight:600;"></div></td>
                              </tr>

                          </table>   
							
                      </form>
            

<!-- Popup from end -->






<div class="clear"></div>

</div>







<div class="clear"></div>
</div>

<!-- content area end -->








<div class="clear"></div>
</div>  
<!-- wrappr end -->
<div class="clear"></div>
<?php //include("common/footer.php");?>