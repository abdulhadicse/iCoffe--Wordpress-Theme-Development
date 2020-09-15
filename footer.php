<!--slide-starts-->
<?php global $batch140; ?>
	<div class="slide">
		<div class="container">
			<div class="fle-xsel">
			<ul id="flexiselDemo3">
			<?php 

				$footer_slider = new WP_Query(array(
					'post_type'		=>'footer_slider',
				));
				while($footer_slider->have_posts()):$footer_slider->the_post()

			 ?>
				<li>
					<a href="#">
						<div class="banner-1">
							
							<?php the_post_thumbnail('',array(
								'class'		=>'img-responsive'
							)); ?>
						</div>
					</a>
				</li>	
			<?php endwhile; ?>

			</ul>
							
								
					<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!--slide-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<p> <?php echo $batch140['ft'] ?> </p>
			</div>
			<p class="footer_txt" style="text-align: right;" > <?php echo $batch140['fbt'] ?>  </p>
		</div>
	</div>
	<!--footer-end-->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<?php wp_footer(); ?>
</body>
</html>