    /* ==========================================================================
      PICTURE HTML TAG BLOCK
       ========================================================================== */

        acf_register_block_type(array(
            'name'                  => 'Picture HTML',
            'title'                 => __( 'Picture HTML'),
            'description'         => __( 'Picture HTML'),
            'render_template' => 'template-parts/blocks/content-block-picture_html.php',
            'category'            => 'formatting',
            'icon'                  => 'editor-ol',
        ));

        acf_register_block_type(array(
            'name'                  => 'Picture & Text',
            'title'                 => __( 'Picture & Text'),
            'description'         => __( 'Picture & Text'),
            'render_template' => 'template-parts/blocks/content-block-picture_html.php',
            'category'            => 'formatting',
            'icon'                  => 'editor-ol',
            'supports'      => array(
                        'jsx' => true
                    ),
        ));
