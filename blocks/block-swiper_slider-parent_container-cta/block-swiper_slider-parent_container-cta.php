<?php
/**
 * Block: Swiper Slider Parent Container Call to Action
 *
 * @package JJROD
 */

// Create class attribute allowing for custom "className" values.
$class_name = '';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

?>

<!-- ***************************** -->
<!-- Swiper Slider CTA -->
<!-- ***************************** -->
<div class="swiper-cta-wrapper">

     <div class="swiper swiper-cta <?php if( get_field('swiper_set_slider_height') ): ?>swiper-set-height<?php endif; ?> <?php echo esc_attr( $class_name ); ?>">

    <!-- Child Slides -->

      <InnerBlocks class="swiper-wrapper"/>

    <!-- Child Slides End -->

        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Bottom Nav -->
        <div class="swiper_bottom_nav swiper_bottom_nav-no_arrows">
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div><!-- swiper_bottom_nav -->
            
    </div><!-- swiper-block swiper-container -->

    <!-- CTA Overlay -->
    <div class="swiper-cta-overlay">
        <div class="swiper-cta-overlay-inner">

            <?php get_template_part( 'template-parts/content', 'cta_contact_card' ); ?>

        </div><!-- swiper-cta-overlay-inner -->
    </div><!-- swiper-cta-overlay -->

</div><!-- swiper-container-parent -->


<script>

    var swiper = new Swiper('.swiper-cta', {
        loop: true,
        autoplay: {
            delay: 5000,
        },
        speed: 800,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
            pagination: {
            el: '.swiper-pagination',
        },
        preventClicks: false,   
    });

</script>
