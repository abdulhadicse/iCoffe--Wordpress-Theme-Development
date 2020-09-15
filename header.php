<?php global $batch140; ?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html <?php  language_attributes(); ?> >
<head>
<!-- <title>Coffee Break a Blog Category Flat Bootstarp responsive Website Template | Gallery :: w3layouts</title> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="<?php  bloginfo('charset'); ?>">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $batch140['uf']['url'] ?>">

<style>
	.footer{
		background: <?php echo $batch140['fbg'] ?> ;
	}
	.footer-text p{
		color: <?php echo $batch140['ftc'] ?> !important;
	}
	.header_logo{
		width:  <?php echo $batch140['lw'] ?>px;
	}
	.banner-top{
		background-image: url('<?php echo $batch140['hb']['url']  ?>');
	}
</style>

<?php wp_head(); ?>		
</head>
<body <?php body_class(); ?>  >


	<!--header-top-starts-->

	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="<?php echo site_url(); ?>"><img class="header_logo" src="<?php echo $batch140['lg']['url']  ?>" alt="" /></a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span> 
				 <?php wp_nav_menu(array(
						'theme_location'			=>'primary_menu',
						'container'					=>'',
						'menu_class'				=>'navig',
						'menu_id'					=>'',

					)); ?>
			</div>
			<div class="header-right">
				<div class="search-bar">
					<form method="GET" >
						<input type="text" value="Search" name="s" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="">
					</form>
				</div>
				<ul>
					<li><a href="<?php echo esc_url($batch140['fb'])  ?>"><span class="fb"> </span></a></li>

					<?php if($batch140['tw']): ?>
					<li><a href="<?php echo esc_url($batch140['tw'] ) ?>"><span class="twit"> </span></a></li>
					<?php endif; ?>



					<li><a href="<?php echo esc_url($batch140['pin'])  ?>"><span class="pin"> </span></a></li>
					<li><a href="<?php echo esc_url($batch140['rss'])  ?>"><span class="rss"> </span></a></li>
					<li><a href="<?php echo esc_url($batch140['dri'])  ?>"><span class="drbl"> </span></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				<div class="banner-text">
					<h1> <?php echo $batch140['bs'] ?>  </h1>
				</div>
			</div>
		</div>
	</div>
	<!--banner-end-->