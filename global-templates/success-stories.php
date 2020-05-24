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
    <h2 class="text-center mb-4"><?_e('Our Success Stories', 'kks-theme')?></h2>
        <div class="row">
        <?get_template_part('loop-templates/content', 'storiesUpper');?>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="carousel-inner">
                <?php $stories = get_posts(array('post_type' => 'success_story', 'posts_per_page' => 5)); ?>
                    <? $count = 0; ?>
                    <? foreach($stories as $story) : ?>
                        <div class="carousel-item
                            <? echo ($count == 0) ? 'active' : ''; ?>">
                            <? $image = wp_get_attachment_image_src(get_post_thumbnail_id($story->ID),'blog-large') ?>
                            <img src="<? echo $image[0] ?>" class="img-fluid d-block success-cat" alt="Success stories here"/>
                            <div class="carousel-caption d-md-block">
                                <h5><?the_field('success_name')?></h5>
                                <p><?the_field('success_content');?></p>
                            </div>
                        </div>
                    <? $count++; ?>
                    <? endforeach;?>
                </div>
            </div>
            <?get_template_part('loop-templates/content', 'storiesLower');?>
        </div> 
        <hr>
    </div>
</div>





	

