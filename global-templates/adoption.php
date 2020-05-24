<?php
/**
 * USPs setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$adoption = new WP_Query([
    'post_type' => 'cat_adoption',
    'posts_per_page' => 3,
    'orderby' => 'post_title',
    'order' => 'ASC',
]);

if($adoption->have_posts() ) {
    //We have adoption
?>


<div class="wrapper" id="wrapper-adoption">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 justify-content-center">
                <h2 class="text-center mb-4"><?_e('Adoption? - This is how', 'kks-theme')?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <? while($adoption->have_posts() ) : $adoption->the_post(); ?>
                <? get_template_part('loop-templates/content', 'adoption'); ?>
            <? endwhile;?>
            <?wp_reset_postdata();?>
        </div> 
    </div>
</div>

<? } ?>

	

