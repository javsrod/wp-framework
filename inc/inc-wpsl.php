<?php
/**
 * WPSL Store Locator PLUGIN improvements made along the way...
 * 
 * @author JJROD Framework
 * @see https://wpstorelocator.co/documentation/
 * @version 1.0
 */

// WPSL Custom Markers Folder in theme
add_filter( 'wpsl_admin_marker_dir', 'custom_admin_marker_dir' );

function custom_admin_marker_dir() {

    $admin_marker_dir = get_stylesheet_directory() . '/wpsl-markers/';

    return $admin_marker_dir;
}



// WPSL Custom Template
add_filter( 'wpsl_templates', 'custom_templates' );

function custom_templates( $templates ) {

    /**
     * The 'id' is for internal use and must be unique ( since 2.0 ).
     * The 'name' is used in the template dropdown on the settings page.
     * The 'path' points to the location of the custom template,
     * in this case the folder of your active theme.
     */
    $templates[] = array (
        'id'   => 'custom-store-locator-template',
        'name' => 'Custom Store Locator',
        'path' => get_stylesheet_directory() . '/' . 'template-parts/wpsl/wpsl-custom-store-locator-template.php',
    );

    return $templates;
}

// WPSL Custom META
add_filter( 'wpsl_meta_box_fields', 'custom_meta_box_fields' );

function custom_meta_box_fields( $meta_fields ) {

    $meta_fields[__( 'Additional Information', 'wpsl' )] = array(
        'phone' => array(
            'label' => __( 'Tel', 'wpsl' )
        ),
        // 'fax' => array(
        //     'label' => __( 'Fax', 'wpsl' )
        // ),
        // 'email' => array(
        //     'label' => __( 'Email', 'wpsl' )
        // ),
        // 'url' => array(
        //     'label' => __( 'Url', 'wpsl' )
        // ),
        'order_online_url' => array(
            'label' => __( 'Order Online', 'wpsl' )
        ),
        'order_for_delivery' => array(
            'label' => __( 'Order for Delivery', 'wpsl' )
        ),
        'store_rewards_url' => array(
            'label' => __( 'Store Rewards', 'wpsl' )
        ),
        'store_gift_card' => array(
            'label' => __( 'Buy Gift Card', 'wpsl' )
        ),
        // 'pick_up_available' => array(
        //     'label' => __( 'Pick Up Available', 'wpsl' )
        // ),

        // 'closed_temp' => array(
        //     'label' => __( 'Temporarily Closed', 'wpsl' )
        // )
    );

    return $meta_fields;
}

// WPSL JSON response
add_filter( 'wpsl_frontend_meta_fields', 'custom_frontend_meta_fields' );

function custom_frontend_meta_fields( $store_fields ) {

    $store_fields['wpsl_order_online_url'] = array(
        'name' => 'order_online_url',
        'type' => 'url'
    );

    $store_fields['wpsl_order_for_delivery'] = array(
        'name' => 'order_for_delivery',
        'type' => 'url'
    );

    $store_fields['wpsl_store_rewards_url'] = array(
        'name' => 'store_rewards_url',
        'type' => 'url'
    );

    $store_fields['wpsl_store_gift_card'] = array(
        'name' => 'store_gift_card',
        'type' => 'url'
    );

    // $store_fields['wpsl_pick_up_available'] = array(
    //     'name' => 'pick_up_available',
    //     'type' => 'text'
    // );

    $store_fields['wpsl_closed_temp'] = array(
        'name' => 'closed_temp',
        'type' => 'text'
    );


    $store_fields['wpsl_order_for_delivery'] = array(
        'name' => 'order_for_delivery',
        'type' => 'url'
    );

    return $store_fields;
}


// WPSL Display front end
add_filter( 'wpsl_listing_template', 'custom_listing_template' );

function custom_listing_template() {

    global $wpsl, $wpsl_settings;

    $listing_template = '<li data-store-id="<%= id %>">' . "\r\n";
    $listing_template .= "\t" . '<div class="location-post-item m-box">' . "\r\n";
    $listing_template .= "\t\t" . '<div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<p><%= thumb %>' . "\r\n";
    $listing_template .= "\t\t\t\t" . wpsl_store_header_template( 'listing' ) . "\r\n";
    // $listing_template .= "\t\t\t\t" . '<span class="wpsl-street"><%= address %></span>' . "\r\n";
    // $listing_template .= "\t\t\t\t" . '<% if ( address2 ) { %>' . "\r\n";
    // $listing_template .= "\t\t\t\t" . '<span class="wpsl-street"><%= address2 %></span>' . "\r\n";
    // $listing_template .= "\t\t\t\t" . '<% } %>' . "\r\n";
    // $listing_template .= "\t\t\t\t" . '<span>' . wpsl_address_format_placeholders() . '</span>' . "\r\n";
    // $listing_template .= "\t\t\t\t" . '<span class="wpsl-country"><%= country %></span>' . "\r\n";

    $listing_template .= "\t\t\t" . '</p>' . "\r\n";


    // Check if the 'closed_temp' contains data before including it.
    // $listing_template .= "\t\t\t" . '<% if ( closed_temp ) { %>' . "\r\n";
    // $listing_template .= "\t\t\t" . '<p class="wpsl_closed_temp">Temporarily Closed</p>' . "\r\n";
    // $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";


    // Include the opening hours, unless they are set to hidden on the settings page.
    // if ( !$wpsl_settings['hide_hours'] ) {
    //     $listing_template .= "\t\t\t" . '<% if ( hours ) { %>' . "\r\n";
    //     $listing_template .= "\t\t\t" . '<p><%= hours %></p>' . "\r\n";
    //     $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";
    // }


    // Show the phone, fax or email data if they exist.
    // $listing_template .= "\t\t\t" . '<p class="wpsl-contact-details">' . "\r\n";
    // $listing_template .= "\t\t\t" . '<% if ( phone ) { %>' . "\r\n";
    // $listing_template .= "\t\t\t" . '<span><strong>' . esc_html( $wpsl->i18n->get_translation( 'phone_label', __( 'Phone', 'wpsl' ) ) ) . '</strong>: <%= formatPhoneNumber( phone ) %></span>' . "\r\n";
    // $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";
    // $listing_template .= "\t\t\t" . '<% if ( fax ) { %>' . "\r\n";
    // $listing_template .= "\t\t\t" . '<span><strong>' . esc_html( $wpsl->i18n->get_translation( 'fax_label', __( 'Fax', 'wpsl' ) ) ) . '</strong>: <%= fax %></span>' . "\r\n";
    // $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";
    // $listing_template .= "\t\t\t" . '<% if ( email ) { %>' . "\r\n";
    // $listing_template .= "\t\t\t" . '<span><strong>' . esc_html( $wpsl->i18n->get_translation( 'email_label', __( 'Email', 'wpsl' ) ) ) . '</strong>: <%= email %></span>' . "\r\n";
    // $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";
    // $listing_template .= "\t\t\t" . '</p>' . "\r\n";

    // (CLICK HERE FOR ADDRESS AND TEL)
    $listing_template .= "\t\t\t" . '<p class="click-here"><a href="<%= permalink %>">(CLICK HERE FOR ADDRESS AND TEL)</a></p>' . "\r\n";




    // Check if the 'order_online_url' contains data before including it.
    $listing_template .= "\t\t\t" . '<div class="custom_links_grid"><% if ( order_online_url ) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<p><a class="order_online_url button smallbtn" href="<%= order_online_url %>" target="_blank"><i class="fak fa-movicon-order"></i> ' . __( 'For Pick Up', 'wpsl' ) . '</a></p>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";

    // Check if the 'order_for_delivery_url' contains data before including it.
    $listing_template .= "\t\t\t" . '<% if ( order_for_delivery ) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<p><a class="order_for_delivery button smallbtn" href="<%= order_for_delivery %>" target="_blank"><i class="fa-solid fa-moped"></i> ' . __( 'For Delivery', 'wpsl' ) . '</a></p>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";

    // Check if the 'store_rewards_url' contains data before including it.
    $listing_template .= "\t\t\t" . '<% if ( store_rewards_url ) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<p><a class="store_rewards_url button smallbtn" href="<%= store_rewards_url %>" target="_blank"><i class="fa-solid fa-stars"></i> ' . __( 'Rewards', 'wpsl' ) . '</a></p>' . "\r\n";
    $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";

    // Attach Gift Card Url
    $listing_template .= "\t\t\t" . '<% if ( store_gift_card ) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<p><a class="store_gift_card button smallbtn" href="<%= store_gift_card %>" target="_blank"><i class="fa-solid fa-gift-card"></i> ' . __( 'Gift Cards', 'wpsl' ) . '</a></p>' . "\r\n";

    // Check if the 'apple_app' contains data before including it.
    // $listing_template .= "\t\t\t" . '<% if ( apple_app ) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<p><a class="apple_app_url button smallbtn" href="https://apps.apple.com/us/app/toast-takeout/id1362180579?ls=1" target="_blank"><i class="fa-brands fa-apple"></i> ' . __( 'App Download', 'wpsl' ) . '</a></p>' . "\r\n";
    // $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";


    // // Check if the 'android_app' contains data before including it.
    // $listing_template .= "\t\t\t" . '<% if ( android_app ) { %>' . "\r\n";
    $listing_template .= "\t\t\t" . '<p><a class="android_app_url button smallbtn" href="https://play.google.com/store/apps/details?id=com.toasttab.consumer&utm_source=landingpage&utm_campaign=landingpage&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1" target="_blank"><img src="'.get_template_directory_uri().'/wpsl-markers/android.png" /> ' . __( 'App Download', 'wpsl' ) . '</a></p>' . "\r\n";
    // $listing_template .= "\t\t\t" . '<% } %>' . "\r\n";

    $listing_template .= "\t\t\t" . '<% } %></div>' . "\r\n";


    $listing_template .= "\t\t" . '</div>' . "\r\n";//

    // Check if we need to show the distance.
    if ( !$wpsl_settings['hide_distance'] ) {
        $listing_template .= "\t\t" . '<%= distance %> ' . esc_html( $wpsl_settings['distance_unit'] ) . '' . "\r\n";
    }

    $listing_template .= "\t\t" . '<%= createDirectionUrl() %>' . "\r\n";
    $listing_template .= "\t" . '</div>' . "\r\n"; // .location-post-item .m-box
    $listing_template .= "\t" . '</li>' . "\r\n";

    return $listing_template;
}

?>
