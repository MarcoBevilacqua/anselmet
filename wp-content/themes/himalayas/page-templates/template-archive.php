<?php

/**
 * Template Name: Archive Template
 *
 * Displays the Archive Template of the theme.
 *
 * @package ThemeGrill
 * @subpackage Himalayas
 * @since Himalayas 1.0
 */
?>

<?php get_header(); ?>

<?php do_action( 'himalayas_before_body_content' );

$himalayas_layout = himalayas_layout_class(); ?>

    <div id="content" class="site-content">
        <main id="main" class="clearfix <?php echo $himalayas_layout; ?>">
            <div class="tg-container">

                <div id="primary">
                    <div id="content-2">
                        <?php
                        $cat_id = get_field('categoria_archivio');
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                        $query = new WP_Query(array(
                            'cat'               =>  $cat_id,
                            'status'            => 'publish',
                            'posts_per_page'    => 10,
                            'paged'             => $paged
                        ));

                        if($query->have_posts()){

                            while ( $query->have_posts() ) : $query->the_post();
                                set_query_var( 'current_post' , $query->current_post );
                                get_template_part( 'content', 'archive' );

                                //comments not open

                            endwhile; ?>
                            <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts', $query->max_num_pages); ?></div>
                            <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
                        <?php } else { ?>
                            <h3>No posts</h3>
                        <?php } ?>
                    </div><!-- #content-2 -->
                </div><!-- #primary -->
                <!-- NO SIDEBAR -->
            </div>
        </main>
    </div>

<?php do_action( 'himalayas_after_body_content' ); ?>

<?php get_footer(); ?>