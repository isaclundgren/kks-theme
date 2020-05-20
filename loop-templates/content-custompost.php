<? if (have_posts() ) : ?>

    <?while(have_posts() ) : the_post();?>

    <? the_content();?>

    <hr>

    <section class="meta-gender">
    <?php
            the_terms(
                get_the_id(),
                'gender',
                _e('Gender: ', 'kks-theme')
            );
            ?>
            <br>
            <br>
       <?php
            the_terms(
                get_the_id(),
                'city',
                _e('Lives in: ', 'kks-theme')
            );
            ?>
    </section>
     

    <hr class="divider">

        <?php
            $terms = get_the_terms( $post->ID, 'brands' ); 
            foreach($terms as $term):?>
            <?php $term_link = get_term_link($term);?>
             <a href="<?  $term_link ?>" class="badge badge-warning"><?echo $term->name;?></a>
            <?endforeach;?>

            <div class="metadata-wrapper">
                <!-- <a href="#" class="btn btn-warning">Adopt me</a> -->
                <?get_template_part('loop-templates/content', 'accordion');?>
        </div>

        <?php
            $terms = get_the_terms($post->ID, 'brands' ); 
            foreach($terms as $term):?>
            <?php $term_link = get_term_link($term);?>
             <a href="<?  get_the_id(); ?>" class="badge badge-warning"><?echo $term->name;?></a>
            <?endforeach;?>
            

    <?php
    $categories = get_the_category();
    foreach($categories as $cat):?>

        <a href="<? echo get_category_link($cat->term_id) ?>" class="badge badge-warning"><?echo $cat->name;?></a>
        
    <?endforeach;?>

    <hr class="divider">

    <div class="adoptbtn d-flex flex-column">
        <a href="#" class="btn btn-primary mb-3">Adopt me!</a>
    </div>

    

<? endwhile; else: endif;?>

