<?php
/**
 * Success stories setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

    
?>



<div class="wrapper" id="wrapper-stories">
    <div class="container">
        <div class="row">
        <?get_template_part('loop-templates/content', 'storiesUpper');?>
            <div class="carousel-inner">
            <?php $stories = get_posts(array('post_type' => 'success_story', 'posts_per_page' => 5)); ?>
                <? $count = 0; ?>
                <? foreach($stories as $story) : ?>
                    <div class="carousel-item
                        <? echo ($count == 0) ? 'active' : ''; ?>">
                        <img src="<? echo wp_get_attachment_url(get_post_thumbnail_id($story->ID)) ?>" class="img-fluid d-block w-100 success-cat" alt="Success stories here"/>
                        
                    </div>
                <? $count++; ?>
                <? endforeach;?>
            </div>
            <?get_template_part('loop-templates/content', 'storiesLower');?>
        </div> 
        <hr>
    </div>
</div>





	

