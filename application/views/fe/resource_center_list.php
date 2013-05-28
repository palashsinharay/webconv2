<?php //include ("common/header.php");
?>

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
<h2>Resource Center</h2>

<div id="recruitment">
      <ul>
	  <?php foreach ($resource_center_list as $row):
	  		if($row->type=='Annual Report'):
			?>
			<li><h3><u>Annual Report</u></h3></li>
			<?php endif;
			if($row->type=='News Letter'): ?>
			<li><h3><u>News Letter</u></h3></li>
			<?php endif;
			if($row->type=='Brochure'):?>
			<li><h3><u>Brochure</u></h3></li>
			<?php endif; ?>
			<li><strong><?php echo $row->title;?></strong></li>
			<li><a href="<?php echo site_url('assets/uploads/files/')."/".$row->filename;?>" title="description_1"><?php echo $row->filename;?>  </a></li>
			<li> <strong><?php echo $row->date;?></strong> </li>
	<?php endforeach;?>
    
      </ul>
    </div>

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
<?php //include("common/footer.php");?>