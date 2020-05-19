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
        <h1 class="text-center"><?the_field('hero_title')?></h1>
        <h2 class="text-center"><?the_field('hero_subtitle')?></h2>
        <div class="btn d-flex justify-content-center">
            <a href="#" class="btn btn-primary text-center mb-2 herobtn">Click me</a>
        </div>
        <!-- <img src="<?   ?>" alt="Hero Image" class="img-fluid"> -->
        
    </div>
</section>
