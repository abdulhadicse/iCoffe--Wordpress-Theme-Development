<?php get_header(); ?>
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