<?php
/**
 * The template for displaying a single cat
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
	
		<div class="row">

			<?get_template_part('loop-templates/content-cat_portfolio', 'single' );	?>
				<div class="row">
					<main class="site-main col-sm-12 col-md-6 col-lg-6" id="main">
						
						<?php
							get_template_part('loop-templates/content', 'custompost')
						?>

					</main><!-- #main -->
					
					<div class="col-sm-12 col-md-6 col-lg-6">
						<?php
							get_template_part('loop-templates/content', 'accordion');
						?>
					</div>
				

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
