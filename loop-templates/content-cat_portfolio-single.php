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

        <? if(has_post_thumbnail() ) : ?>
            <img src="<? the_post_thumbnail_url('medium_large'); ?>" alt="<?the_title();?>" 
            class="img-fluid mb-3 img-thumbnail">
        <?endif;?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
