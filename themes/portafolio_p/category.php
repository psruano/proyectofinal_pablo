		
		<?php get_header(); ?>


			<div id="contenido">
				
					<div class="nombrecat">
						 <?php
			 				$queried_object = get_queried_object();
			 				// echo '<pre>';
			 				// print_r( $queried_object);
			 				// echo '</pre>';
			 			?>

			 			<?php echo $queried_object->name; ?>
					</div>

					<?php 
						if( have_posts() ):
							while( have_posts() ):
								the_post();
					?>
					<div class="proyecto">

						<div class="blurtrans"></div>
						<div class="imgproyecto"><a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a></div>
						<div class="txtproyecto"><h3><?php the_title();?></h3></br><?php the_excerpt();?>

							

						</div>

					</div>

					<?php endwhile; endif; ?>

				</div>

			</div> <!--TERMINA div wrapper -->

			

		<?php get_footer(); ?>
