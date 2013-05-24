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
	font-family: Arial;
	font-size: 14px;
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
		<a href='<?php echo site_url('main/employees')?>'>Employees</a> |
                <a href='<?php echo site_url('main/cms_page')?>'>CMS</a> |
				<a href='<?php echo site_url('main/tender')?>'>Tender</a> |
				<a href='<?php echo site_url('main/news')?>'>News</a> |
				<a href='<?php echo site_url('main/job')?>'>Jobs</a> |
				<a href='<?php echo site_url('main/media_gallery')?>'>Media Library</a> |
<!--		<a href='<?php echo site_url('examples/film_management')?>'>Films</a> |-->
                <a href='<?php echo site_url('auth/logout')?>'>logout</a>
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
