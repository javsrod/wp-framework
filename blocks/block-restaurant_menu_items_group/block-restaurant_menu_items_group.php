<?php
/**
 * Block: Restaurant Menu Item Group
 *
 * @package JJROD
 */

// Create class attribute allowing for custom "className" values.
$class_name = '';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

?>

<?php if( have_rows('restaurant_menu_items_group') ): ?>
    <ul class="restaurant_menu_items_group <?php echo esc_attr( $class_name ); ?>">
    <?php while( have_rows('restaurant_menu_items_group') ): the_row(); 
        ?>
        <li class="restaurant_menu_item_card">
            
            <?php if( the_sub_field('restaurant_menu_item_standalone') ): ?>
                <h1><?php if( the_sub_field('restaurant_menu_item_name') ): ?><?php the_sub_field('restaurant_menu_item_name'); ?><?php endif; ?></h1>
            <?php else: ?>
                <h4><?php if( the_sub_field('restaurant_menu_item_name') ): ?><?php the_sub_field('restaurant_menu_item_name'); ?><?php endif; ?></h4>
            <?php endif; ?>
            
            <p class="sp"><?php if( the_sub_field('restaurant_menu_item_name_desc_sp') ): ?><?php the_sub_field('restaurant_menu_item_name_desc_sp'); ?><?php endif; ?></p>
            <p><?php if( the_sub_field('restaurant_menu_item_name_desc_eng') ): ?><?php the_sub_field('restaurant_menu_item_name_desc_eng'); ?><?php endif; ?></p>

        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>
