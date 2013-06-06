<?php //include ("common/header.php");?>
<div class="clear"></div>
<div class="scroll_txt">
<marquee id="marquee" onmouseover="marquee.stop();" onmouseout="marquee.start();" scrollamount="2" direction="left">
Provisional certificate for <a href="#">completion of degree</a> 2007-2008
</marquee>
</div>
<div class="clear"></div>
<!-- banner start -->
<div class="banner">

<div class="slideshow">

<ul class="buttons">
<li class="active" id="button1"><a href="#" title="">&nbsp;</a></li>
<li id="button2"><a href="#" title="">&nbsp;</a></li>
<li id="button3"><a href="#" title="">&nbsp;</a></li>
<li id="button4"><a href="#" title="">&nbsp;</a></li>
<li id="button5"><a href="#" title="">&nbsp;</a></li>
<li id="button6"><a href="#" title="">&nbsp;</a></li>
</ul>

<!-- img_1 -->
<div class="slides" style="visibility:visible" id="image1">
<img src="<?php echo site_url('images/img_2.png')?>" alt="" />
</div>

<!-- img_2 -->
<div class="slides" id="image2">
<img src="<?php echo site_url('images/img_3.png')?>" alt="" />
</div>

<!-- img_3 -->
<div class="slides" id="image3">
<img src="<?php echo site_url('images/img_4.png')?>" alt="" />
</div>

<!-- img_4 -->
<div class="slides" id="image4">
<img src="<?php echo site_url('images/img_1.png')?>" alt="" />
</div>

<!-- img_5 -->
<div class="slides" id="image5">
<img src="<?php echo site_url('images/img_5.png')?>" alt="" />
</div>

<!-- img_6 -->
<div class="slides" id="image6">
<img src="<?php echo site_url('images/img_6.png')?>" alt="" />
</div>

</div>

</div>
<!-- banner end -->

<!-- content area start -->

<div class="content_area">

<?php include("common/sidebar_upper.php");?>
<?php include("common/sidebar_lower.php");?>


</div>

<div class="right_pan_area">
<h2>About <span>WEBCON</span></h2>
<?php echo $pageDetail->content;?>
<!--<a href="#" class="more_link">...more</a>-->

<div class="clear"></div>

<div class="expertise_area">
<h2>Area of <span>Expertise</span></h2>

<div class="carouel_area">
    <button class="prev"></button>
	<button class="next"></button>    
    <ul>
	<?php foreach($lowerSlider as $values):?>
        <li><a href="<?php echo site_url('main/page/'.$values->id); ?>"><img src="<?php echo site_url('assets/uploads/files/'.$values->image);?>" alt="" ></a><div class="caption"><?php echo $values->short_title;?></div></li>
		<?php endforeach;?>
       <!-- <li><img src="<?php /// echo site_url('images/exprt_2.png')?>" alt="" ><div class="caption">Infrastructure Planning, Development &amp; Upgradation </div></li>
        <li><img src="<?php //echo site_url('images/exprt_3.png')?>" alt="" ><div class="caption">Detailed Design &amp; engineering / Project Monitoring &amp; Supervision </div></li>
        <li><img src="<?php //echo site_url('images/exprt_1.png')?>" alt="" ><div class="caption">Evaluation &amp; Impact Assessment Study / Socio-Economic Survey</div></li>
        <li><img src="<?php //echo site_url('images/exprt_2.png')?>" alt="" ><div class="caption">Micro enterprise Development</div></li>
        <li><img src="<?php //echo site_url('images/exprt_3.png')?>" alt="" ><div class="caption">Skill Development Training Programme</div></li>
        <li><img src="<?php //echo site_url('images/exprt_1.png')?>" alt="" ><div class="caption">Implementing CSR Initiative</div></li>
        <li><img src="<?php //echo site_url('images/exprt_2.png')?>" alt="" ><div class="caption">Entrepreneurship Nurturing Cell</div></li>
        <li><img src="<?php //echo site_url('images/exprt_3.png')?>" alt="" ><div class="caption">Cluster Development Programme</div></li>-->
    </ul>
</div>


</div>


</div>







<div class="clear"></div>
</div>

<!-- content area end -->








<div class="clear"></div>
</div>  
<!-- wrappr end -->
<div class="clear"></div>
<?php // include("common/footer.php");?>