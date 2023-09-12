<?php
/**
 * Default Page Header Template
 *
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */
?>

<?php $featImg = ""; if(isset($featImg)) $featImg = get_the_post_thumbnail_url(); ?>
<div class="entry-header btm-shadow-light <?php if( get_field('category') ) { echo $clr_variable; } ?>" style="background-image: url('<?php echo $featImg;?>');">
	<div class="gcw sph-rim-edge reveal-left">

		<h1 class="mb-0"><?php the_title(); ?></h1> 
		<?php if( get_field('tag_line') ): ?>
			<p class="tagline mb-0 h4 head-2"><?php the_field('tag_line'); ?></p>
		<?php endif; ?>

    </div>
    <div class="grass"> </div>
</div><!-- .grid-container --> 
