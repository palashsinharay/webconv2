<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Webcon Consulting India Ltd.</title>
<link href="<?php echo site_url('css/style.css')?>" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="<?php echo site_url('script/jquery-1.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('script/banner.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('script/jcarousellite_1.0.1.min.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('script/jquery.easing.min.js')?>"></script>
<script type="text/javascript">
$(function() {
    $(".carouel_area").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev"
    });
});

</script>
</head>

<body>
<!-- wrappr start -->
<div id="content_wrapper">
<!-- top section start -->
	<div class="topContainer">
    <div class="logo"><a href="#"><img src="<?php echo site_url('images/logo.png')?>" alt="Webcon Consulting India Pvt. Ltd." title="Webcon Consulting India Pvt. Ltd." /></a></div>
    <h1 class="logo_right"></h1>
    </div>
<!-- top section end -->
<div class="clear"></div>
<!-- navigaion start -->
<div class="navigaion_pan">

<ul>
    <li><a href="<?php echo site_url('main/index');?>" class="active">Home</a></li>
<li><a href="<?php echo site_url('main/page/1');?>">Who We Are</a></li>

<li class="drop"><a href="<?php echo base_url();?>main/page/17">What We Do</a>
<div class="drop_pan" style="width:160px;">
<ul>
<li><a href="#">Skill Development Training</a></li>
<li><a href="#">Implementing CSR Initiative</a></li>
</ul>
</div>
</li>

<li><a href="#">Recruitment</a></li>
<li><a href="#">Photo Gallery</a></li>
<li><a href="#">Resouce Centre</a></li>
<li><a href="<?php echo base_url();?>main/page/19">Contact Us</a></li>
</ul>




</div>
<!-- navigaion end -->