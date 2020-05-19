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
            <div class="col-sm-10 justify-content-center">
                <h2 class="text-center mb-4"><?_e('Our Lovely Cats', 'kks-theme')?></h2>
                <p class="text-center"><?_e('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam voluptate debitis repellendus fuga eius deleniti corrupti accusamus? Minus dignissimos esse hic doloribus dolorem? Eos impedit libero reprehenderit optio fuga excepturi.','kks-theme')?></p>
            </div>
        </div>
    </div>
    <div class="container catfolio">
        <div class="row">
            <? while($catfolios->have_posts() ) : $catfolios->the_post(); ?>
                <? get_template_part('loop-templates/content', 'catfolio'); ?>
            <? endwhile;?>
            <?wp_reset_postdata();?>
        </div> 
    </div>
</div>

<? } ?>

	

