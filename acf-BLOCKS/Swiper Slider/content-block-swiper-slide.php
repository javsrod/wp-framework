<?php
/**
 * Block: Swiper Block Slide
 *
 * @package JJROD
 */
?>

<!-- ***************************** -->
<!-- Slide -->
<!-- ***************************** -->
<div class="swiper-slide">

    <?php if( get_field('swiper_slide_pic_alt') ): ?><h1 class="hidden_visually"><?php the_field('swiper_slide_pic_alt'); ?></h1><?php endif; ?>

    <?php 
    $link = get_field('swiper_slide_link');
    if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'];
        ?>
        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><div class="slide-link"></div></a>
    <?php endif; ?>


    <?php if( get_field('swiper_slide_pic_desktop') ): ?>
        <picture>

            <source
                media="(max-width: 800px)"
                <?php if( get_field('swiper_slide_pic_mobile') ): ?><?php awesome_acf_responsive_image(get_field( 'swiper_slide_pic_mobile' ),'full','1000px'); ?><?php endif; ?>
            >

            <source
                <?php awesome_acf_responsive_image(get_field( 'swiper_slide_pic_desktop' ),'full','2560px'); ?>
            >

            <img src="<?php awesome_acf_responsive_image(get_field( 'swiper_slide_pic_desktop' ),'',''); ?>" alt="<?php if( get_field('swiper_slide_pic_alt') ): ?><?php the_field('swiper_slide_pic_alt'); ?><?php endif; ?>">
        </picture>
    <?php endif; ?>        

</div><!-- swiper-slide -->

