<?php

 global $batch140; 
/*
	Template Name:Contact Page
*/
 get_header(); ?>
	<!----start-contact---->
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3>CONTACT</h3>
			</div>
			<div class="contact-bottom">
				<iframe src="<?php echo $batch140['gm'] ?>" frameborder="0" style="border:0"></iframe>
				<div class="contact-text">
					<div class="col-md-4 contact-left">
						<h4>Sed dapibus nunc eu metus commodo, et dictum justo fermentum.</h4>
						<p>Aliquam quis lacus at sapien tempor semper. Sed ultrices et metus et elementum. Nunc sed justo at erat consequat mollis et eu lectus.</p>
						<div class="address">
							
							<?php 
								if( is_active_sidebar( 'address' ) ){

									dynamic_sidebar( 'address' );

								}
							 ?>
						</div>
					</div>	
					<div class="col-md-8 contact-right">
						<?php while(have_posts()){
							the_post();

							the_content();

						} ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!----end-contact---->
	<?php get_footer() ?>