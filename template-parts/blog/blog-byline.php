<?php
/**
 * The template part for displaying an author byline
 * 
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */

//gets the ID of the post
$post_id = get_queried_object_id();

//gets the ID of the author using the ID of the post
$author_ID = get_post_field( 'post_author', $post_id );

//Gets all the data of the author, using the ID
$authorData = get_userdata( $author_ID ); 

?>

<?php  if (!in_array( 'administrator', $authorData->roles)): ?>
<p class="byline"><?php the_author_posts_link(); ?> | <?php the_time('F j, Y') ?></p>	
<?php else :?>
<p class="byline"><?php the_time('F j, Y') ?></p>	
<?php endif; ?>
