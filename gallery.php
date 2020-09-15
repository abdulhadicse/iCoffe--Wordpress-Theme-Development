<?php 
/*
Template Name: Gallery Page
*/

get_header(); ?>
	<!--gallery-starts-->
	<div class="gallery">
		<div class="container">
			<div class="gallery-top heading">
				<h3>OUR GALLERY</h3>
			</div>
			<section>
				<ul id="da-thumbs" class="da-thumbs">

					<?php

					$gallery_custom_post =	new WP_query(array(
							'post_type'			=>'coffee_gallery'
						));


					 while($gallery_custom_post ->have_posts() ):$gallery_custom_post -> the_post() ?>


					<li>
						<a href="images/g-1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<?php the_post_thumbnail(); ?>
							<div>
								<h5><?php the_title(); ?></h5>
								<span><?php the_content(); ?></span>
							</div>
						</a>
					</li>

				<?php endwhile; ?>


					<div class="clearfix"> </div>
				</ul>
			</section>

        </div>
	</div>
	<!--gallery-end-->
	<?php get_footer(); ?>