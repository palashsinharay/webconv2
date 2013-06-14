
<div class="clear"></div>
<!-- banner_inner start -->
<div class="banner_inner">
 <img src="<?php echo site_url('images/sub/phato-g.jpg')?>" alt="" /></div>
<!-- banner_inner end -->

<!-- content area start -->

<div class="content_area">
<?php //echo "<pre>"; print_r($recruitmentContent); echo "</pre>";?>
<h2>Recruitment <span>Details</span></h2>

<table cellpadding="0" cellspacing="2">
<tbody>
<tr>
<td class="title" width="20%">Job Title :</td>
<td class="desrp" width="80%"><?php echo $recruitmentContent->title;?></td>
</tr>
<tr>
<td class="title">Position :</td>
<td class="desrp"><?php echo $recruitmentContent->job_position;?></td>
</tr>
<tr>
<td class="title">Qualification &amp; Other Details :</td>
<td class="desrp"><?php echo $recruitmentContent->qualification_other_details;?></td>
</tr>
<tr>
<td class="title">Job Code :</td>
<td class="desrp"><?php echo $recruitmentContent->job_code;?></td>
</tr>
<tr>
<td></td>

</tr>
<!--<tr>
<td class="title">Expected Salary:</td>
<td class="desrp"><?php echo $recruitmentContent->salary;?></td>
</tr>-->
<tr>
<td class="title">Vacancies :</td>
<td class="desrp"><?php echo $recruitmentContent->vacancies;?></td>
</tr>
<tr>
<td class="title">Location of Posting :</td>
<td class="desrp"><?php echo $recruitmentContent->location;?></td>
</tr>
<tr>
<td class="title">Job Description :</td>
<td class="desrp">
<?php echo $recruitmentContent->desc;?>
</td>
</tr>
<tr>
<td></td>

<tr>
    <td colspan="2" align="center"><a href="<?php echo site_url('main/recruitment_apply/'.$recruitmentContent->id);?>"><img src="<?php echo site_url('images/apply.png');?>" alt="Apply" /></a></td>
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
