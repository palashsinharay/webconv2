<?php //include ("common/header.php");?>
<?php 
/*echo "<pre>";
print_r($pageDetail);
echo "</pre>";*/
?>
<div class="clear"></div>
<!-- banner_inner start -->
<div class="banner_inner">
  
    <img src="<?php echo site_url('images/sub/Specialised-Service.jpg')?>" alt="" />
  
 </div>
<!-- banner_inner end -->

<!-- content area start -->

<div class="content_area">
<h2><?php //echo $pageDetail->menutitle;?>Site Map</h2>
<ul>
<?php foreach($siteMap as $values):?>
<li><a id="<?php echo $values->id;?>"  href="<?php echo site_url('main/page/'.$values->id);?>"><?php echo $values->menutitle;?></a></li>
<?php endforeach;?>
</ul>
<br/>
<br/>
<?php //include("common/sidebar_upper.php");?>
<?php //include("common/sidebar_lower.php");?>


</div>

<div class="right_pan_area">






<?php //echo $pageDetail->content;
//echo "<pre>";
//print_r($siteMap);
//echo "</pre>";
?>






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