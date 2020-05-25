<?php
/**
 * Custom Hero ACF.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



?>


<section id="hero" class="img-fluid d-flex align-items-center" style="background-image:linear-gradient(rgba(102,102,102,0.6), rgba(102,102,102,0.6)) ,url('<? echo the_field('background_image')['url'] ?>');">
    <div class="container">
        <div class="customlogo d-flex justify-content-center align-items-center">
            <?php
            $herologo = get_field('hero_logo');
            if($herologo) : ?>
                <img src="<? echo esc_url ($herologo); ?>" alt="Hero Logo">
            <?php endif;?>
        </div>
        <div class="btn d-flex justify-content-center">
            <?php
            $link = get_field('hero_link');
            if($link) : ?>
                <a class="btn btn-secondary text-center mb-2 herobtn" href="<?php echo esc_url( $link ); ?>"><?_e('Our Cats', 'kks-theme')?></a>
                <?php else : ?>
                 <a href="#" class="btn btn-primary"><?_e('Add a custom field', 'kks-theme')?></a>
             <?php endif;?>
        </div>
        
        
    </div>
</section>
