
<div class="clear"></div>
<!-- banner_inner start -->
<div class="banner_inner">
  <img src="<?php echo site_url('images/sub/phato-g.jpg')?>" alt="" /></div>
<!-- banner_inner end -->

<!-- content area start -->

<div class="content_area">

<h2>Resource <span>Center</span></h2>

<table cellpadding="0" cellspacing="2">
<tbody>
<tr><th>Annual Report</th></tr>
<tr>
<td>
<?php foreach ($resource_center_list_Areport as $row):
	  //if($row->type=='Annual Report'):
	  ?>
<div class="column three">
<h6><?php echo $row->title;?></h6>
<a href="<?php echo site_url('assets/uploads/files/')."/".$row->filename;?>" target="_blank"><img src="<?php echo site_url('images/pdf_anl_rpt.png')?>" alt="<?php echo $row->filename;?>" title="<?php echo $row->filename;?>" /></a>
<h5><?php echo $row->date;?></h5>
</div>
<?php //endif; ?>
<?php endforeach;?>

</td>
</tr>

<tr><th>News Letter</th></tr>
<tr>
<td>
<?php foreach ($resource_center_list_newsletter as $row1):
		//if($row1->type=='News Letter'):
?>
<div class="column four">
<h6><?php echo $row1->title;?></h6>
<a href="<?php echo site_url('assets/uploads/files/')."/".$row1->filename;?>" target="_blank"><img src="<?php echo site_url('images/pdf_newslet.png')?>" alt="<?php echo $row1->filename;?>" title="<?php echo $row1->filename;?>" /></a>
<h5><?php echo $row1->date;?></h5>
</div>
<?php //endif; ?>
<?php endforeach;?>


</td>
</tr>

<tr><th>Brochure</th></tr>
<tr>
<td>
<?php foreach ($resource_center_list_brochure as $row2):
	//if($row2->type=='Brochure'):
?>
<div class="column two">
<h6><?php echo $row2->title;?></h6>
<a href="<?php echo site_url('assets/uploads/files/')."/".$row2->filename;?>"><img src="<?php echo site_url('images/pdf_brochure.png')?>" alt="<?php echo $row2->filename;?>" title="<?php echo $row2->filename;?>" /></a>
<h5><?php echo $row2->date;?></h5>
</div>
<?php //endif; ?>
<?php endforeach;?>
</td>
</tr>

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

