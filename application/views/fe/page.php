<?php //include ("common/header.php");?>
<?php 
/*echo "<pre>";
print_r($pageDetail);
echo "</pre>";*/
?>
<div class="clear"></div>
<!-- banner_inner start -->
<div class="banner_inner">
  <?php if($pageDetail->filename != NULL):?>
    <img src="<?php echo site_url('assets/uploads/files/')."/".$pageDetail->filename?>" alt="" />
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
<h2><?php echo $pageDetail->menutitle;?></h2>
<?php echo $pageDetail->content;?>






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