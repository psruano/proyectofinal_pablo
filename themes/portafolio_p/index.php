		
		<?php get_header(); ?>

			
			<div id="contenido">
				
				<?php 
					$queryHome = new WP_Query( 'category_name=featured' );
					if( $queryHome -> have_posts() ):
						while( $queryHome -> have_posts() ):
							$queryHome -> the_post();
				?>

					<div class="proyecto">

						<div class="blurtrans"></div>
						<div class="imgproyecto"><a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a></div>
						<div class="txtproyecto"><a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></br><?php the_excerpt();?></a>

							

						</div>



					</div>

				<?php endwhile; endif; ?>
					

				</div>

			</div> <!--TERMINA div wrapper -->

			

			

		<?php get_footer(); ?>
