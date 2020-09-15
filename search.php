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


<?php wp_head(); ?>		
</head>
<body <?php body_class(); ?>  >


	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri(); ?>/images/logo-1.png" alt="" /></a>
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
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
					<li><a href="#"><span class="rss"> </span></a></li>
					<li><a href="#"><span class="drbl"> </span></a></li>
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

	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-tre">

						<?php 

							while(have_posts()):the_post()

						 ?>
												
							<div class="col-md-6 abt-left">

								
													
								<p>
									You Searched For: <?php echo get_search_query(); ?>
								</p> <br><br>

								<a href=" <?php the_permalink(); ?> "> <?php the_post_thumbnail(); ?> </a>
								
								

								<h6> <?php

								if( function_exists('the_field') ){
									 the_field('subtitle_name'); 
								}

								

								 ?> </h6>



								<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?>  </a></h3>
								<p> <?php echo wp_trim_words(get_the_content(),15,'............'); ?>  </p>
								<a href="<?php the_permalink(); ?>">Read More</a>
								<label>  <?php the_time('M d, Y'); ?> </label>
							</div>




							<?php endwhile;  ?>

							<?php 
								if( !have_posts() ){




										echo "<h2> Nothing Found </h2>";

								}

							 ?>

							


						
					</div>	
				</div>
				<div class="col-md-4 about-right heading">
					<?php get_sidebar(); ?>
				</div>
				<div class="clearfix"></div>			
			</div>		
		</div>
	</div>
	<!--about-end-->
	<?php get_footer(); ?>