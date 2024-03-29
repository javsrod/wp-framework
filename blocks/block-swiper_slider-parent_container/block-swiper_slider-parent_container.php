<?php
/**
 * Block: Swiper Slider Parent Container
 *
 * @package JJROD
 */

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" values.
$class_name = '';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

?>

<!-- ***************************** -->
<!-- Swiper Slider -->
<!-- ***************************** -->
 <div <?php echo $anchor; ?> class="swiper swiper-front <?php if( get_field('swiper_set_slider_height') ): ?>swiper-set-height<?php endif; ?> <?php echo esc_attr( $class_name ); ?>">
    
    <!-- Child Slides -->

      <InnerBlocks class="swiper-wrapper"/>

    <!-- Child Slides End -->

    <!-- <div class="swiper_bottom_nav"> -->
    
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    
    <!-- </div> --> <!-- swiper_bottom_nav -->

</div><!-- swiper-block swiper-container -->

<script>

    var swiper = new Swiper('.swiper-front', {
      speed: 800,
      // autoplay: {
      //     delay: 4000,
      // },
      // loop: true,
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
