<?php 
 $baseurl='/myCMS';

?>
<!DOCTYPE html>
	<html>
		<head>
			<title><?php echo $data['title'];?></title>
			<script type="text/javascript">
				baseurl=<?php echo $baseurl; ?>;
			</script>
			<link type="text/css" rel="stylesheet" href="<?php echo $baseurl; ?>/Assets/CSS/bootstrap.min.css"/>
			<link type="text/css" rel="stylesheet" href="<?php echo $baseurl; ?>/Assets/CSS/bootstrap-theme.css"/>
			<link type="text/css" rel="stylesheet" href="<?php echo $baseurl; ?>/Assets/CSS/bootstrap-theme.min.css"/>
			<link type="text/css" rel="stylesheet" href="<?php echo $baseurl; ?>/Assets/CSS/bootstrap.css"/>
			<link type="text/css" rel="stylesheet" href="<?php echo $baseurl; ?>/Assets/CSS/bootstrap.css.map"/>
			<link type="text/css" rel="stylesheet" href="<?php echo $baseurl; ?>/Assets/CSS/bootstrap-theme.css.map"/>
			<script type="text/javascript" src="<?php echo $baseurl; ?>/Assets/JS/bootstrap.js"></script>
			<script type="text/javascript" src="<?php echo $baseurl; ?>/Assets/JS/bootstrap.min.js"></script>
			<script type="text/javascript" src="<?php echo $baseurl; ?>/Assets/JS/npm.js"></script>
		</head>
		<body>
			<div class="container" style="border:solid 1px; height:20px;">
				<div class='row'>
					<div class='col-sm-3'>1</div>
					<div class='col-sm-9'>3</div>
				</div>
			</div>
		
