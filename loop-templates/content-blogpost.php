<? if (have_posts() ) : ?>

    <?while(have_posts() ) : the_post();?>

    <? the_content();?>

    <?php

    $tags = get_the_tags();
    if($tags) : 
        foreach($tags as $tag) : ?>
            <a href="<? echo get_tag_link($tag->term_id);?>" class="badge badge-success">
                <? echo $tag->name;?>
            </a>
        <?endforeach;?>
    <?endif;?>

    <hr class="divider">

    <?php
    $categories = get_the_category();
    foreach($categories as $cat):?>

        <a href="<? echo get_category_link($cat->term_id) ?>" class="badge badge-warning"><?echo $cat->name;?></a>
        
    <?endforeach;?>

    <hr class="divider">

    <?php
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    ?>
    <p><?_e('Posted on', 'kks-theme');?> <? echo get_the_date('l j F, Y '); ?><?_e('by', 'kks-theme')?> <?  echo $fname .  ' ' . $lname ?></p>


    

<? endwhile; else: endif;?>

