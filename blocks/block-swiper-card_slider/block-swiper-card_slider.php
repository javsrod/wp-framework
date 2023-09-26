<?php
/**
 * Block: Swiper Community Slider
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
<!-- <div class="hidden_shadow_fixer">   -->
    
    <div class="swiper card_swiper <?php echo esc_attr( $class_name ); ?>"> <!-- "swiper" required -->
        <div class="swiper-wrapper"> <!-- "swiper-wrapper" Required -->


            <?php if( have_rows('cardswiperslider_slides') ): ?>

                <?php while( have_rows('cardswiperslider_slides') ): the_row(); 
                    $cardswiperslider_image = get_sub_field('cardswiperslider_image');
                    ?>
                     <div class="swiper-slide card_swiper-slide">
                        <p><?php the_sub_field('cardswiperslider_heading'); ?></p>
                        <?php echo wp_get_attachment_image( $cardswiperslider_image, 'full' ); ?>
                    </div><!-- swiper-slide -->
                <?php endwhile; ?>

            <?php endif; ?>

        </div><!-- swiper-wrapper -->

        <!-- <div class="swiper_bottom_nav"> -->

            <!-- <div class="swiper_bottom_nav-scrollbar">
                <div class="swiper-scrollbar"></div>
            </div> --> <!-- swiper_bottom_nav-scrollbar -->

            <!-- Add Arrows -->
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->

        <!-- </div> --> <!-- swiper_bottom_nav -->
    </div><!-- card_swiper -->

<!-- </div> --><!-- hidden_shadow_fixer -->

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".card_swiper", {
        speed: 500,
        loop: true,
        autoplay: {
            delay: 1750,
            disableOnInteraction: false,
        },
        // navigation: {
        //     nextEl: ".swiper-button-next",
        //     prevEl: ".swiper-button-prev",
        // },
      
        // scrollbar: {
        //     el: ".swiper-scrollbar",
        // },

        // Default Mobile Parameters
        slidesPerView: 2,   
        spaceBetween:14,   

         // Responsive breakpoints  
        breakpoints: {  
            //* Mobile Large & Up */  
            570: {       
                slidesPerView: 3,
                spaceBetween: 14,    
            },     
            //* Tablet & UP */  
            800: {       
                slidesPerView: 4,       
                spaceBetween: 20,     
            },   
            //* Laptop Med & UP */    
            1024: {       
                slidesPerView: 6,       
                spaceBetween: 20,     
            }, 
            //* Desktop Medium & UP */
            1500: {       
                slidesPerView: 7,       
                spaceBetween: 30,     
            } 
        } 

    });
</script>
