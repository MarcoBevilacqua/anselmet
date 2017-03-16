<?php
/**
 * The template used for displaying page content.
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
						$pagename = get_query_var('pagename');
						$category_name = "";
						$categories = array(
							'archivio-news' => 'news', 
							'archivio-press' => 'stampa',
							'news-archive' => 'news-en',
							'press-archive' => 'stampa-en'
						);

						if(array_key_exists($pagename, $categories)){
							$category_name = $categories[$pagename];
							query_posts('category_name='.$category_name);
						}

						while ( have_posts() ) : the_post();

							get_template_part( 'content', 'page' );

							//do_action( 'himalayas_before_comments_template' );
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() )
								//comments_template();
			      		do_action ( 'himalayas_after_comments_template' );

						endwhile; ?>
					</div><!-- #content -->
				</div><!-- #primary -->

				<?php  //himalayas_sidebar_select(); ?>
			</div>
		</main>
	</div>

	<?php do_action( 'himalayas_after_body_content' ); ?>

<?php get_footer(); ?>