
<div class="clear"></div>
<!-- banner_inner start -->
<div class="banner_inner">
  <img src="<?php echo site_url('images/sub/phato-g.jpg')?>" alt="" />
</div>
<!-- banner_inner end -->

<!-- content area start -->

<div class="content_area">

<h2>Tender <span>&amp; Notice</span></h2>

<table cellpadding="0" cellspacing="2">
<thead>
<tr>
<th width="10%">Tender Date</th>
<th width="60%">Tender Description</th>
<th width="20%">Last Date of Submission</th>
<th width="10%">Details</th>
</tr>
</thead>

<tbody>
<?php foreach ($tenderList as $value): ?>    
<tr>
<td><?php echo $value->post_date;?></td>
<td class="desrp"><?php echo $value->description;?></td>
<td><?php echo $value->submission_date;?></td>
<td><a href="<?php echo site_url('assets/uploads/files/'.$value->filename);?>"><img src="<?php echo site_url('images/view_tender.png');?>"' alt="View Tender" /></a></td>
</tr>
<?php endforeach; ?>  
<!--<tr>
<td>05-03-2013</td>
<td class="desrp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</td>
<td>05-03-2013</td>
<td><a href="#"><img src="images/view_tender.png" alt="View Tender" /></a></td>
</tr>-->
<!--<tr>
<td>05-03-2013</td>
<td class="desrp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</td>
<td>05-03-2013</td>
<td><a href="#"><img src="images/view_tender.png" alt="View Tender" /></a></td>
</tr>-->
<!--<tr>
<td>05-03-2013</td>
<td class="desrp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</td>
<td>05-03-2013</td>
<td><a href="#"><img src="images/view_tender.png" alt="View Tender" /></a></td>
</tr>-->
<!--<tr>
<td>05-03-2013</td>
<td class="desrp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</td>
<td>05-03-2013</td>
<td><a href="#"><img src="images/view_tender.png" alt="View Tender" /></a></td>
</tr>-->
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
