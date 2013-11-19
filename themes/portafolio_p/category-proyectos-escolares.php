<?php
	$args = array(
		'post_type' => 'post',
		'category' => 2,
		'numberposts' => 2
		);

	$resultados =get_posts($args);
foreach ($resultados as $proyecto): setup_postdata($proyecto); 


	echo$proyecto->post_title;
	echo '</br>';

endforeach; 

wp_reset_postdata ();

	?>




	<?php 

	if (have_posts()): while(have_posts()): the_post();

	echo $post ->post_title;
	echo '</br>';


	 endwhile; endif; ?>