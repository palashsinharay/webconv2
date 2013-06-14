<div class="left_pan_area">

<div class="left_box">
<div class="left_box_title">Our Features</div>
<div class="left_box_content">
<ul class="features">
    <?php foreach ($featured_menu as $value) : ?>
    <li><a href="<?php echo site_url('main/page/'.$value->id); ?>"><?php echo $value->menutitle; ?></a><img src="<?php echo site_url('images/notice.png')?>" alt="notice" width="20px" height="20px" style="margin-left: 5px;" /></li> 
    <?php endforeach;?>
<!--<li><a href="#">Major Clients </a></li> 
<li><a href="#">New Initiative </a></li> 
<li><a href="#">Tender &amp; Notice </a></li> 
<li><a href="#">NJMC Job</a></li> -->
</ul>
</div>
<div class="left_box_bottom"></div>
</div>

