






<div class="col-sm-12 col-md-6 col-lg-4 d-flex">
    <div class="card mb-2 card-adoption" >
        <div class="card-header">
        <? if($adoption = get_field('adoption') ) : ?>
            <i class="fa <? echo $adoption; ?> fa-3x"></i>
        <?endif;?>
        </div>
        <div class="card-body">
     
            <h5 class="card-title"><?the_title();?></h5>
            <p class="card-text"><?the_content();?></p>

            <div class="flex d-flex flex-column">
                <!-- <div class="linkbtn"> -->
                    <?if($adoption_link = get_field('adoptions_link') ) : ?>
                        <a href="<? echo $adoption_link;?>" class="btn btn-secondary "><?_e('Read more', 'kks-theme')?></a>
                    <?endif;?>
                <!-- </div> -->
            </div>
            
        </div>
    </div>
</div>

