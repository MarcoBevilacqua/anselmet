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
                        $query = new WP_Query(array(
                            'cat'               =>  $cat_id,
                            'status'            => 'publish',
                            'posts_per_page'    => 10
                        ));

                        if($query->have_posts()){

                            while ( $query->have_posts() ) : $query->the_post();
                                set_query_var( 'current_post' , $query->current_post );
                                get_template_part( 'content', 'archive' );

                                do_action( 'himalayas_before_comments_template' );
                                //comments are not open
                                do_action ( 'himalayas_after_comments_template' );

                            endwhile;

                        } else {
                            ?> <h3>No posts</h3>
                        <?php } ?>
                    </div><!-- #content-2 -->
                </div><!-- #primary -->

                <?php  himalayas_sidebar_select(); ?>
            </div>
        </main>
    </div>

<?php do_action( 'himalayas_after_body_content' ); ?>

<?php get_footer(); ?>