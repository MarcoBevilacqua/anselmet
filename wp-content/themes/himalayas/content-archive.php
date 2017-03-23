<?php
/**
 * The template used for displaying post content.
 *
 * @package ThemeGrill
 * @subpackage Himalayas
 * @since Himalayas 1.0
 */

$even_odd_class = ($current_post%2 == 0) ? 'even-display' : 'odd-display';

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="tg-container">
   <?php do_action( 'himalayas_before_post_content' );

   if(($current_post%2 == 0)){ ?>
      <div class="tg-column-2">
         <?php
         // Post thumbnail.
         if ( has_post_thumbnail() ) { ?>
            <div class="entry-thumbnail <?php echo $even_odd_class ?>">
               <?php
               // Get the full URI of featured image
               $image_popup_id = get_post_thumbnail_id();
               $image_popup_url = wp_get_attachment_url( $image_popup_id );

               the_post_thumbnail('himalayas-portfolio-image');
               ?>

            </div><!-- entry-thumbnail -->
         <?php }
         ?>
      </div>
      <div class="tg-column-2">
         <div class="entry-content <?php echo $even_odd_class ?>">
            <?php
            the_title( '<h1 class="entry-title">', '</h1>' );
            the_excerpt();
            //the_content();
            wp_link_pages( array(
                'before'            => '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'himalayas' ),
                'after'             => '</div>',
                'link_before'       => '<span>',
                'link_after'        => '</span>'
            ) );
            ?>
         </div>
      </div>
      <?php } else { ?>
      <div class="tg-column-2">
         <div class="entry-content <?php echo $even_odd_class ?>">
            <?php
            the_title( '<h1 class="entry-title">', '</h1>' );
            the_excerpt();
            //the_content();
            wp_link_pages( array(
                'before'            => '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'himalayas' ),
                'after'             => '</div>',
                'link_before'       => '<span>',
                'link_after'        => '</span>'
            ) );
            ?>
         </div>
      </div>
      <div class="tg-column-2">
         <?php
         // Post thumbnail.
         if ( has_post_thumbnail() ) { ?>
            <div class="entry-thumbnail <?php echo $even_odd_class ?>">
               <?php
               // Get the full URI of featured image
               $image_popup_id = get_post_thumbnail_id();
               $image_popup_url = wp_get_attachment_url( $image_popup_id );

               the_post_thumbnail('himalayas-portfolio-image');
               ?>

            </div><!-- entry-thumbnail -->
         <?php }
         ?>
      </div>
   <?php }
   do_action( 'himalayas_after_post_content' ); ?>
   </div><!-- tg-container -->
</article>