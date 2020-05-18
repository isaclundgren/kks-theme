<?php
/**
 * Cat portfolio setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//Value of catfolio items through ACF

if(get_field('max_portfolio_items', 'option') ) {
    $maxItems = get_field('max_portfolio_items', 'option'); 
} else {
    $maxItems = 4;
}

//Get 'order by' option

$catfolio_order_by = get_field('order_portfolio_items', 'option');

//Sort order

$catfolio_order_asc = get_field('order_ascending', 'option');

$catfolios = new WP_Query([
    'post_type' => 'cat_portfolio',
    'posts_per_page' => $maxItems,
    'orderby' => $catfolio_order_by,
    'order' => ($catfolio_order_asc ? 'asc' : 'desc'),
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

	

