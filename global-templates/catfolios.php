<?php
/**
 * Cat portfolio setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$catfolios = new WP_Query([
    'post_type' => 'cat_portfolio',
    'posts_per_page' => 4,
    'orderby' => 'post_title',
    'order' => 'DESC',
]);

if($catfolios->have_posts() ) {
    //We have catfolios
?>


<div class="wrapper" id="wrapper-catfolios">
    <div class="container">
        <div class="row">
            <? while($catfolios->have_posts() ) : $catfolios->the_post(); ?>
                <? get_template_part('loop-templates/content', 'catfolio'); ?>
            <? endwhile;?>
            <?wp_reset_postdata();?>
        </div> 
        <hr>
    </div>
</div>

<? } ?>

	

