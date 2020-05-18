<div class="col-sm-12 col-md-12 col-lg-12">
    <div class="card mb-3">
        <div class="card-body d-flex">

            <? if(has_post_thumbnail() ) : ?>
                <img src="<? the_post_thumbnail_url('blog-small'); ?>" alt="<?the_title();?>" 
                class="img-fluid mb-3 img-thumbnail mr-4">
            <?endif;?>

            <section class="blog-content">
                <h3><?the_title();?></h3>
                <? the_excerpt();?>
            </section>
        </div>
    </div>
</div>