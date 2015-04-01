<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head();?>
	
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo|Fjalla+One' rel='stylesheet' type='text/css'>
	<!-- Font Awesome link -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
</head>
<body>
  <div class="container fullwidth">
  	
	<div class="row gray2">
	  	<div class="container setwidth">
		  	<div class="navigation noborder spacing1" id="nav-padding">
		  		<div class="col-xs-4 logodown">

					<!-- SEARCH FORM - START -->
					<form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo('url' ); ?>/search">
						<div class="form-group">
							<div class="col-xs-9">
					    		<input type="text" name="search" class="form-control" placeholder="find something">
					    	</div>

					    	<div class="col-xs-2">
					    		<input type="submit" class="btn btn-primary" value="Search">
					  		</div>
						</div>
					</form>
					<!-- SEARCH FORM - START -->
<!-- 								added custom css to nav btns
 -->		  		</div>
		  		<div class="col-xs-8 bottom">
				  	<ul class="nav nav-pills pull-right">
				  		<!-- <li class="<?php is_active('Home'); ?>"><a class="btn btn-primary btn-sm noborder"  href="<?php bloginfo('url'); ?>/Home">Home</a></li> -->
						<li class="<?php is_active('about'); ?>"><a class="btn btn-primary btn-sm noborder" href="<?php bloginfo('url'); ?>/about">About</a></li>
						<li class="<?php is_active('food'); ?>"><a class="btn btn-primary btn-sm noborder" href="<?php bloginfo('url'); ?>/food">Archive</a></li>
				  		<li class="<?php is_active('user-registration'); ?>"><a class="btn btn-primary btn-sm noborder" href="<?php bloginfo('url'); ?>/user-registration">Register</a></li>
				  	</ul>
			  	</div>
		  	</div>
		</div>
	</div>

	<div class="row white">
		<div class="container">
			<div class="col-xs-12">
				<a href="<?php bloginfo('url'); ?>/Home">
				<img class="img-responsive center3" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo">
				</a>
			</div>
		</div>
	</div>
	
