<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	
	background: #DCDDDF url(http://cssdeck.com/uploads/media/items/7/7AF2Qzt.png);
	color: #000;
	font: 14px Arial;
	margin: 0 auto;
	padding: 0;
	position: relative;

}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
	<div>
<!--		<a href='<?php echo site_url('examples/customers_management')?>'>Customers</a> |
		<a href='<?php echo site_url('examples/orders_management')?>'>Orders</a> |
		<a href='<?php echo site_url('examples/products_management')?>'>Products</a> |
		<a href='<?php echo site_url('examples/offices_management')?>'>Offices</a> | -->
		
                <a href='<?php echo site_url('admin/cms_page')?>'>CMS</a> |
				<a href='<?php echo site_url('admin/tender')?>'>Tender</a> |
				<a href='<?php echo site_url('admin/news')?>'>News</a> |
				<a href='<?php echo site_url('admin/job')?>'>Jobs</a> |
				<a href='<?php echo site_url('admin/media_gallery')?>'>Media Library</a> |
				<a href='<?php echo site_url('admin/resource_center')?>'>Resource Center</a> |
				<a href='<?php echo site_url('admin/featured_menu')?>'>Featured Menu</a> |
				<a href='<?php echo site_url('admin/lower_slider')?>'>Lower slider</a> |
<!--		<a href='<?php echo site_url('examples/film_management')?>'>Films</a> |-->
                <a href='<?php echo site_url('auth/logout')?>'>logout</a>
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
