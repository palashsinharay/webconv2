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
<h2>Recruitment</h2>

<div id="recruitment">
      <ul>
	  <?php foreach ($recruitmentContent as $row):?>	
		    <li><a href="<?php echo site_url('main/recruitment_details/'.$row->id);?>"><strong><?php echo $row->title;?></strong></a></li>
			<li> <strong><?php echo $row->post_date;?></strong> </li>
			<li> <?php echo $row->desc;?> </li>
			<li><a href="<?php echo site_url('assets/uploads/files/')."/".$row->filename;?>" title="description_1"><?php echo $row->filename;?>  </a></li>
			<hr>
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