<?php
// Widget Areas
function wpt_create_widget( $name, $id, $description ) {

    register_sidebar(array(
        'name' => __( $name ),   
        'id' => $id, 
        'description' => __( $description ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="module-heading">',
        'after_title' => '</h4>'
    ));

}

wpt_create_widget( 'Default Sidebar', '', 'Displays on the side of pages with a sidebar' );
