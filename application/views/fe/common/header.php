<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $site_data->sname; ?></title>
<link href="<?php echo site_url('css/style.css')?>" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('css/jquery.lightbox-0.4.css')?>" media="screen" />
<link href="<?php echo site_url('css/style_popup.css')?>" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="<?php echo site_url('script/jquery-1.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('script/banner.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('script/jcarousellite_1.0.1.min.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('script/jquery.easing.min.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('script/jquery.lightbox-0.4.js')?>"></script>

<script type="text/javascript">
$(function() {
    $(".carouel_area").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev"
    });
});

</script>
<script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
</script>

</head>

<body>
<!-- wrappr start -->
<div id="content_wrapper">
<!-- top section start -->
	<div class="topContainer">
    <div class="logo"><a href="<?php echo site_url('main/index');?>"><img src="<?php echo site_url('images/logo.png')?>" alt="Webcon Consulting India Ltd." title="Webcon Consulting India Ltd." /></a></div>
    <h1 class="logo_right"></h1>
    </div>
<!-- top section end -->
<div class="clear"></div>
<!-- navigaion start -->
<div class="navigaion_pan">

<ul>

<li><a href="<?php echo site_url('main/index');?>" class="<?php echo $this->uri->segment(2)=='index'?'active':'';?>">Home</a></li>
<li class="drop"><a id="Who We Are" class="<?php echo $this->uri->segment(2)=='page'?'active':'';?>" href="#<?php //echo site_url('main/page/1');?>">Who We Are</a>
<div class="drop_pan" style="width:200px;">
<ul>
<?php foreach($whoweare_links as $values):?>
<li><a id="<?php echo $values->id;?>" class="<?php echo $this->uri->segment(3)==$values->id?'subactive':'';?>" href="<?php echo site_url('main/page/'.$values->id);?>"><?php echo $values->menutitle;?></a></li>
<?php endforeach;?>
</ul>
</div>
</li>


<li class="drop"><a class="<?php echo $this->uri->segment(2)=='categories'?'active':'';?>" href="<?php echo base_url();?>main/page/17">What We Do</a>
<div class="drop_pan" style="width:160px;">
<ul>
    
    <?php foreach($whatwedo_links as $values):?>
    <?php //echo "<pre>"; print_r($values); echo "</pre>" ;?>
    <li><a id="<?php echo $values->categories_id;?>" class="<?php echo $this->uri->segment(3)==$values->categories_id?'subactive':'';?>" href="<?php echo site_url('main/categories/'.$values->categories_id);?>"><?php echo $values->category_name;?></a></li>
    <?php endforeach;?>
</ul>
</div>
</li>

<li><a class="<?php echo $this->uri->segment(2)=='recruitment'?'active':'';?>" href="<?php echo site_url('main/recruitment')?>">Recruitment</a></li>
<li><a class="<?php echo $this->uri->segment(2)=='gallery'?'active':'';?>" href="<?php echo site_url('main/gallery')?>">Photo Gallery</a></li>
<li><a class="<?php echo $this->uri->segment(2)=='resource_center_list'?'active':'';?>" href="<?php echo site_url('main/resource_center_list')?>">Resouce Centre</a></li>
<li><a class="<?php echo $this->uri->segment(2)=='contact_us'?'active':'';?>" href="<?php echo site_url('main/contact_us');?>">Contact Us</a></li>
</ul>




</div>
<!-- navigaion end -->