<?php

/*
Template Name: About Page
*/
 get_header() ?>
	<!--team-starts-->
	<div class="team">
		<div class="container">
		<div class="team-top heading">
			<h3>OUR TEAM</h3>
		</div>
			<div class="team-bottom">

				<?php 

					$team_custom_post = new WP_Query(array(
						'post_type'		=>'our_team'
					));
					while($team_custom_post->have_posts()):$team_custom_post->the_post()

				 ?>
				<div class="col-md-3 team-left">
					<?php the_post_thumbnail(); ?>
					<h4><?php the_title(); ?></h4>
					<p> <?php echo wp_trim_words( get_the_content(), -1, false ) ?> </p>
				</div>
			<?php endwhile;
				wp_reset_query();
			?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--team-end-->
	<?php get_footer(); ?>

