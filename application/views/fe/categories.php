<?php //include ("common/header.php");?>
<?php 
/*echo "<pre>";
print_r($pageDetail);
echo "</pre>";*/
?>
<div class="clear"></div>
<!-- banner_inner start -->
<div class="banner_inner">
    <img src="<?php echo site_url('images/sub/phato-g.jpg')?>" alt="" />
 </div>
<!-- banner_inner end -->

<!-- content area start -->

<div class="content_area">

<?php include("common/sidebar_upper.php");?>
<?php include("common/sidebar_lower.php");?>


</div>

<div class="right_pan_area">
<ul>
<?php 
	foreach($categories_items as $values):
?>
<li>
<a href="<?php echo site_url('main/page/'.$values->id);?>" class="more_link"><?php echo $values->menutitle;?></a>
</li>
<?php endforeach;?>

</ul>



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