<?php
/**
 * Template Name: Category Template
 *
 * Displays the Wine catagory Template of the theme.
 *
 * @package ThemeGrill
 * @subpackage Himalayas
 * @since Himalayas 1.0
 */
?>

<?php get_header(); ?>

	<?php do_action( 'himalayas_before_body_content' );
	$cl = pll_current_language();
	$himalayas_layout = himalayas_layout_class(); ?>
	<!-- category image -->
	<div class="tg-container">
		<div class="tg-container" style="margin-bottom: 25px;margin-top:120px;">
			<div class="tg-column-4 image">
				<?php echo get_the_post_thumbnail('', 'full' ) ?>
			</div>
			<div class="tg-column-5">
				<h2><?php echo get_the_title(); ?></h2>
				<?php if ($cl == 'it') {
					the_field('testo');
				} else {
					the_field('testo_categoria_en');
				} ?>
			</div>
		</div>
		<div class="tg-container">
			<?php
			$title_query = new WP_Query('category_name='.get_the_title());
			$index = 0;
			while ( $title_query->have_posts() ) : $title_query->the_post();
				echo '<a class="wine-selector" href="#" data-pst="'.$index.'">' .
					 '<div class="tg-column-2 wine-selector-div"><span>' . get_the_title() .
					 '</span></div></a>';
					 $index++;
			endwhile;
			wp_reset_query(); ?>
		</div>
	</div>
	<!-- end category image -->

	<div id="posts-content" style="margin-top:40px; background-color:#f1f1f1;" class="wine-slider">
        <ul>
		<?php
		$query = new WP_Query('category_name='.get_the_title());
		while ( $query->have_posts() ) : $query->the_post();
			get_the_title();
			if($cl == 'it'){
				get_template_part( 'content', 'wine' );
			} else {
				get_template_part( 'content', 'wine-en' );
			}

		endwhile; ?>
        </ul>
	</div>

	<?php do_action( 'himalayas_after_body_content' ); ?>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/unslider/unslider-min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/unslider/unslider.css" >
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/unslider/unslider-dots.css" >
<script type="text/javascript">

    jQuery(document).ready(function(){

        var slider = jQuery('.wine-slider').unslider({
        	arrows		: false,
			speed 		: 1000
        });

		//move slider on btn click
        jQuery(document).on('click', '.wine-selector', function(e){
			e.preventDefault();
			jQuery('.wine-selector-div').removeClass('clicked');
			var _id = jQuery(this).data('pst');
			slider.unslider('animate:' + _id);
			jQuery(this).find('.wine-selector-div').addClass('clicked');
		});
    });

</script>
<?php get_footer(); ?>