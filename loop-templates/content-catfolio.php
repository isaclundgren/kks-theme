
<div class="col-sm-12 col-md-6 col-lg-3 d-flex">
    <div class="card mb-2 text-center card-catfolio" >
        <? if(has_post_thumbnail() ) : ?>
            <a href="<? the_permalink(); ?>">
            <img class="card-img-top img-fluid" 
            src="<?the_post_thumbnail_url();?>" 
            alt="<?the_title();?>">
            </a>
        <?endif;?>

        <div class="card-body">
            <h5 class="card-title">
            <?the_title();?>
            </h5>
            <hr>
            <div class="meta-data">
                <?php
                    if($age = get_field('cat_age')) {
                        $bday = new DateTime($age); 
                        $today = new Datetime(date('m.d.y'));
                        $diff = $today->diff($bday);
                    }
                ?>
                <p class="card-text">
                    <?printf(
                        __(' Age: %d year and %d months', 'kks-theme'), 
                        $diff->y, $diff->m);  ?>
                </p>
                <hr>

                <?php
                    if($cat_location = get_field('cat_location') ) : ?>
                    <p class="card-text"><?_e('Location', 'kks-theme')?>: <? echo $cat_location ?></p>
                <?endif;?>
            </div>
        </div>
        <div class="card-footer">
            <a href="<?the_permalink();?>" class="btn btn-secondary"><?_e('Read more', 'kks-theme')?></a>
        </div>
    </div>
</div>

