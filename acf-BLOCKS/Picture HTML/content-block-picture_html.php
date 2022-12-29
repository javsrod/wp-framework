<?php
/**
 * Block: Picture HTML
 * content-block-picture_html.php
 *
 * @package JJROD
 */
?>

<?php if( get_field('pic_desktop') ): ?>
    <picture>

        <?php if( get_field('pic_mobile') ): ?>
        <source
            media="(max-width: 700px)"
            src="<?php echo wp_get_attachment_image_url( get_field( 'pic_mobile' ), 'full' ); ?>"
            scrset="<?php echo wp_get_attachment_image_srcset( get_field( 'pic_mobile' ), 'full' ); ?>"
            sizes="(max-width: 1000px) 100vw, 1000px"  
        >
        <?php endif; ?>

        <source
          src="<?php echo wp_get_attachment_image_url( get_field( 'pic_desktop' ), 'full' ); ?>"
          scrset="<?php echo wp_get_attachment_image_srcset( get_field( 'pic_desktop' ), 'full' ); ?>"
          sizes="(max-width: 2560px) 100vw, 2560px"
        >

        <img src="<?php echo wp_get_attachment_image_url( get_field( 'pic_desktop' ), 'full' ); ?>" alt="<?php echo get_post_meta(get_field( 'pic_desktop' ) , '_wp_attachment_image_alt', true); ?>">
    </picture>
<?php endif; ?>
