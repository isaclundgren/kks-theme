<div class="col-sm-12 col-md-6 col-lg-4 d-flex">
    <div class="card mb-2 text-center card-catfolio" >
        <? if(has_post_thumbnail() ) : ?>
            <a href="<? the_permalink(); ?>">
            <img class="card-img-top img-fluid img-thumbnail" 
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
                <p class="card-text"><?printf(' Ålder: %d år och %d månader', $diff->y, $diff->m);  ?></p>
                <hr>

                <?php
                    if($cat_location = get_field('cat_location') ) : ?>
                    <p class="card-text">Besöksort: <? echo $cat_location ?></p>
                <?endif;?>
            </div>
        </div>
        <div class="card-footer">
            <div class="btn btn-primary">Read more</div>
        </div>
    </div>
</div>