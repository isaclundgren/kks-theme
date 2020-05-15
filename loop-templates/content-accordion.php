<!-- Reapeter accordion for cats -->

<?php

        if(have_rows('accordion_repeater_cats') ) : 
            $i = 1;

            echo '<div id="accordion" class="ml-4">';

        while(have_rows('accordion_repeater_cats') ) : the_row();

            $title = get_sub_field('accordion_title');
            $content = get_sub_field('accordion_content');

            ?>


        <div class="card">
            <div class="card-header" id="heading-<?php echo $i;?>">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-<?php echo $i;?>" aria-expanded="true" aria-controls="collapse-<?php echo $i;?>">
                    <?php echo $title; ?>
                </button>
                </h5>
            </div>
            
            <div id="collapse-<?php echo $i;?>" class="collapse" aria-labelledby="heading-<?php echo $i;?>" data-parent="#accordion">
                <div class="card-body">
                <?php echo $content; ?>
                </div>
            </div>
        </div> 
        
        <? $i++;

        endwhile;

        echo '</div>';
    else : echo 'Nothing found';

    endif;
?>



