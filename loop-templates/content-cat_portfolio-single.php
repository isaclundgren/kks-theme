<?php
/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	

    <div class="card">
			<div class="card-header">
				<?php if($client = get_field('client') ) : ?>
					<span class="badge badge-warning">Projekt beställt av</span> <a href="www.bool.se" class="badge badge-success"><? echo $client ?></a>
					
				<?endif;?>
			</div>
			<img src="<?php the_post_thumbnail_url('large' ); ?>" 
			alt="<?the_title();?>">
			<div class="card-body d-flex justify-content-center align-items-center">
				<p class="card-text"><?php the_content(); ?></p>
			</div>
			<div class="card-footer text-muted">
				<?php
				// the_terms(
				// 	get_the_id(),
				// 	'branch',
				// 	__('Branches: ')
				// );
				?>
			</div>
		</div>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
