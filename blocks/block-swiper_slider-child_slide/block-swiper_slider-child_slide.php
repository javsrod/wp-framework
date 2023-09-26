<?php
/**
 * Block: Swiper Block Slide
 *
 * @package JJROD
 * 
 */
?>

<!-- ***************************** -->
<!-- Slide -->
<!-- ***************************** -->
<div class="swiper-slide img-cover picture-cover relavite" >

    <!-- Slide Link -->
    <?php 
    $link = get_field('swiper_slide_link');
    if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'];
        ?>
        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><div class="slide-link"></div></a>
    <?php endif; ?>
    <!-- END Slide Link -->

    <!-- Slide Image -->
    <?php if( get_field('swiper_slide_pic_desktop') ): ?>
        <picture>

            <?php if( get_field('swiper_slide_pic_desktop') ): ?>
            <source
                media="(max-width: 800px)"
                src="<?php echo wp_get_attachment_image_url( get_field( 'swiper_slide_pic_desktop' ), 'full' ); ?>"
                scrset="<?php echo wp_get_attachment_image_srcset( get_field( 'swiper_slide_pic_desktop' ), 'full' ); ?>"
                sizes="(max-width: 1000px) 100vw, 1000px"  
            >
            <?php endif; ?>

            <source
              src="<?php echo wp_get_attachment_image_url( get_field( 'swiper_slide_pic_desktop' ), 'full' ); ?>"
              scrset="<?php echo wp_get_attachment_image_srcset( get_field( 'swiper_slide_pic_desktop' ), 'full' ); ?>"
              sizes="(max-width: 2560px) 100vw, 2560px"
            >

            <img src="<?php echo wp_get_attachment_image_url( get_field( 'swiper_slide_pic_desktop' ), 'full' ); ?>" alt="<?php echo get_post_meta(get_field( 'swiper_slide_pic_desktop' ) , '_wp_attachment_image_alt', true); ?>">
        </picture>
    <?php endif; ?>
    <!-- END Slide Image -->

    <!-- Slide Content -->
    <div class="box-over flex-vert">

          <div class="slide-content-wrapper">

                <div class="slide-content-wrapper-inner"> <InnerBlocks />

                </div><!-- slide-content-wrapper-inner -->

          </div><!-- slide-content-wrappe -->

    </div><!-- box-over -->
    <!-- ENDSlide Content -->
 
</div><!-- swiper-slide -->
