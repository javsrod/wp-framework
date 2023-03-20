<?php
/**
 * Block: Picture HTML
 *
 * @package JJROD
 */
?>

<?php if( get_field('pic_desktop') ): ?>

    <?php 
        $link = get_field('pic_link');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'];
            ?>
            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
    <?php endif; ?>

    <picture>

        <?php if( get_field('pic_mobile') ): ?>
            <source
                media="(max-width: 700px)"
                src="<?php echo wp_get_attachment_image_url( get_field( 'pic_mobile' ), 'full' ); ?>"
                srcset="<?php echo wp_get_attachment_image_srcset( get_field( 'pic_mobile' ), 'full' ); ?>"
                sizes="(max-width: 1000px) 100vw, 1000px"
            >
        <?php endif; ?>

        <source
          src="<?php echo wp_get_attachment_image_url( get_field( 'pic_desktop' ), 'full' ); ?>"
          srcset="<?php echo wp_get_attachment_image_srcset( get_field( 'pic_desktop' ), 'full' ); ?>"
          sizes="(max-width: 2560px) 100vw, 2560px"
        >

        <img src="<?php echo wp_get_attachment_image_url( get_field( 'pic_desktop' ), 'full' ); ?>" alt="<?php echo get_post_meta(get_field( 'pic_desktop' ) , '_wp_attachment_image_alt', true); ?>">

    </picture>
    
    <?php if( get_field('pic_link') ): ?> </a> <?php endif; ?>

<?php endif; ?>        
