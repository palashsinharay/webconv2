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
	  <li><h3><u>Annual Report</u></h3></li>
	  <?php foreach ($resource_center_list as $row):
	  		if($row->type=='Annual Report'):
			?>
			<li><strong><?php echo $row->title;?></strong></li>
			<li><a href="<?php echo site_url('assets/uploads/files/')."/".$row->filename;?>" title="description_1"><?php echo $row->filename;?>  </a></li>
			<li> <strong><?php echo $row->date;?></strong> </li>
	 		<?php endif; ?>
	 <?php endforeach;?>
    
      </ul>
    </div>

<div id="recruitment">
      <ul>
			<li><h3><u>News Letter</u></h3></li>
	  <?php foreach ($resource_center_list as $row1):
	  		if($row1->type=='News Letter'):
			?>
			<li><strong><?php echo $row1->title;?></strong></li>
			<li><a href="<?php echo site_url('assets/uploads/files/')."/".$row1->filename;?>" title="description_1"><?php echo $row1->filename;?>  </a></li>
			<li> <strong><?php echo $row1->date;?></strong> </li>
			<?php endif; ?>
	 <?php endforeach;?>
    
      </ul>
    </div>

<div id="recruitment">
      <ul>
	  <li><h3><u>Brochure</u></h3></li>
	  <?php foreach ($resource_center_list as $row2):
	  		if($row2->type=='Brochure'):
			?>
			<li><strong><?php echo $row2->title;?></strong></li>
			<li><a href="<?php echo site_url('assets/uploads/files/')."/".$row2->filename;?>" title="description_1"><?php echo $row2->filename;?>  </a></li>
			<li> <strong><?php echo $row2->date;?></strong> </li>
			<?php endif; ?>
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