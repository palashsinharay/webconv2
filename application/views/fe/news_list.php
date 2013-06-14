
<div class="clear"></div>
<!-- banner_inner start -->
<div class="banner_inner">
  <img src="<?php echo site_url('images/sub/phato-g.jpg')?>" alt="" /></div>
<!-- banner_inner end -->

<!-- content area start -->

<div class="content_area">

<h2>News <span>&amp; List</span></h2>

<table cellpadding="0" cellspacing="2">
<thead>
<tr>
<th width="10%">News Date</th>
<th width="80%">News Headline</th>
<th width="10%">Details News</th>
</tr>
</thead>

<tbody>
<?php foreach ($newslist as $row):?>	
<tr>
<td><?php echo $row->date;?></td>
<td class="desrp"><?php echo $row->title;?></td>
<td><a href="<?php echo site_url('main/news_details/'.$row->id);?>"><img src="<?php echo site_url('images/detail.png')?>" alt="News Details" title="News Details" /></a></td>
</tr>
<?php endforeach;?>
</tbody>
</table>







<div class="clear"></div>
</div>

<!-- content area end -->








<div class="clear"></div>
</div>  
<!-- wrappr end -->
<div class="clear"></div>
<!-- Footer start -->
