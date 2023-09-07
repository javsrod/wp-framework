<?php   
/**
 *  Modifications to the basic blog and blog posts.
 * 
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a href="'.home_url('/news' ).'" rel="nofollow">News</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp&#62;&nbsp;&nbsp;";
        the_category(' &bull; ');
            // if (is_single()) {
            //     echo " &nbsp;&nbsp&#62;&nbsp;&nbsp; ";
            //     the_title();
            // }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp&#62;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp&#62;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}