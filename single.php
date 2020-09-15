<?php get_header(); ?>
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-12 about-left">
					<div class="about-tre">

						<?php 

							while(have_posts()):the_post()

						 ?>
												
							<div class="col-md-8 abt-left">
								<a class="single_img" href=" <?php the_permalink(); ?> "> <?php the_post_thumbnail(); ?> </a>
								
								

								<h6> <?php

								if( function_exists('the_field') ){
									 the_field('subtitle_name'); 
								}

								

								 ?> </h6>



								<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?>  </a></h3>

								<?php the_content(); ?>

								<?php 

									comments_template();
								 ?>
								
							</div>




							<?php endwhile;  ?>

							


						
					</div>	
				</div>
				
				<div class="clearfix"></div>			
			</div>		
		</div>
	</div>
	<!--about-end-->
	<?php get_footer(); ?>