<div class="clear"></div>
<!-- banner_inner start -->
<div class="banner_inner">
  <img src="<?php echo site_url('images/sub/phato-g.jpg')?>" alt="" /></div>
<!-- banner_inner end -->

<!-- content area start -->

<div class="content_area">

<h2>Current <span>Job Openings</span></h2>

<table cellpadding="0" cellspacing="2">
<thead>
<tr>
<th width="20%">Job Code</th>
<th width="20%">Job Position</th>
<th width="50%">Qualification &amp; Other Details</th>
<th colspan="3">Action</th>
</tr>
</thead>

<tbody>
<?php foreach ($recruitmentContent as $row):?>	
<tr>
<td><strong><?php echo $row->job_code;?></strong></td>
<td><?php echo $row->job_position;?></td>
<td class="desrp"><?php echo $row->qualification_other_details;?></td>
<td width="5%"><a href="<?php echo site_url('main/recruitment_details/'.$row->id);?>"><img src="images/detail.png" alt="View Detail" /></a></td>
<td width="5%"><a href="#"><img src="images/app.png" alt="Apply" /></a></td>
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
