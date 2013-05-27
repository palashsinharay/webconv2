<?php include ("common/header.php");
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
<h2>Photo <span>Gallery</span></h2>

<div id="gallery">
      <ul>
	  <?php 
		  foreach ($galleryContent as $row)
			{
		?>	
		    <li> 
			<a href="<?php echo site_url('assets/uploads/files/')."/".$row->mediaimage?>" title="description_1"> 
			<!--<img src="images/photo_1.jpg" width="72" height="72" alt="image" />-->
			<img src="<?php echo site_url('assets/uploads/files/')."/".$row->mediaimage?>" width="72" height="72" alt="image"  />
			</a></li>
	<?php		
			
			}

	  ?>
    
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
<?php include("common/footer.php");?>