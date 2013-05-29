<style>
    body {
	background: #DCDDDF url(http://cssdeck.com/uploads/media/items/7/7AF2Qzt.png);
	color: #000;
	font: 14px Arial;
/*	margin: 0 auto;*/
/*        margin: 100px 96px 98px 100px;*/
/*	padding: 0;*/
/*	position: relative;*/
}


</style>
<div style="position:absolute; top:50%; left: 50%; width:30em; height:18em; margin-top:-9em; margin-left:-15em; padding: 10px; border: 1px solid #ccc;">

<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>

      <p>
      	<label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> <br />
      	<?php echo form_input($email);?>
      </p>

      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>

<?php echo form_close();?>

      
      </div>