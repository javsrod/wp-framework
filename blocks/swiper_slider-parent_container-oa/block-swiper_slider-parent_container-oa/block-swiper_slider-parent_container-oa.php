<?php
/**
 * Block: Swiper Slider Parent Container Outside Arrows 
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
<!-- Swiper Slider -->
<!-- ***************************** -->
<div class="swiper-container swiper-outside-arrows">

    <div class="swiper swiper-oa  <?php if( get_field('swiper_set_slider_height') ): ?>swiper-set-height<?php endif; ?> <?php echo esc_attr( $class_name ); ?>">

        <!-- Child Slides -->
        <div class="swiper-wrapper">
          <InnerBlocks />
        </div><!-- swiper-wrapper -->

    <div class="swiper_bottom_nav swiper_bottom_nav-no_arrows">     
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    </div><!-- swiper-block swiper-container -->

    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-next-oa"></div>
    <div class="swiper-button-prev swiper-button-prev-oa"></div>

</div> <!-- swiper-outside-arrow -->

<script>

    var swiper = new Swiper('.swiper-oa', {
      speed: 800,
      // autoplay: {
      //     delay: 4000,
      // },
      // loop: true,
      navigation: {
          nextEl: '.swiper-button-next-oa',
          prevEl: '.swiper-button-prev-oa',
      },
      pagination: {
          el: '.swiper-pagination',
      },
      preventClicks: false,   
    });

</script>
