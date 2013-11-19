
<?php get_header(); ?>

<?php if ( have_posts() ) {
	while ( have_posts() ){
		the_post();
?>

<div id="contenidoproyecto" class="clearfix">

<div id="proyectoinfo" class="clearfix">

	<h3><?php the_title();?></h3></br>

<p><?php the_content();?></p>

</div>

<div id="slider" class="clearfix">

	<?php
		$featured_id = get_post_thumbnail_id( $post->ID );

		$args = array(
			'post_type' => 'attachment',
			'numberposts' => -1,
			
			'post_parent' => $post->ID,
			'exclude' => $featured_id
		); 

		$attachments = get_posts($args);
		if ($attachments) {
			foreach ($attachments as $attachment) {
				$url = wp_get_attachment_url($attachment->ID);
		?>
			<img class="imagenSingle" src="<?php echo $url; ?>">

			
		<?php
			}
		} else { ?>
			<iframe src="//player.vimeo.com/video/<?php echo get_post_meta($post->ID, 'id_vimeo', true); ?>?title=0&amp;byline=0&amp;portrait=0" width="580" height="326" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		<?php }
	?>


			
			

</div>



</div>

<?php 
}
}
?>

<?php get_footer(); ?>	
