<?php
/**
 * Contact Form 7 setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>



<div class="wrapper" id="wrapper-contact">
    <div class="container">
        <div class="center d-flex justify-content-center mb-3">
        <i class="fa fa-envelope fa-3x"></i>
        </div>
        <h3 class="text-center"><?_e('Contact us', 'kks-theme')?></h3>
        <div class="row">
            <?get_template_part('loop-templates/content', 'form');?> 
        </div> 
    </div>
</div>




	

