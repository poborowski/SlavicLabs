<?php
    $potencial = get_field('potencial');
?>
<h1 style="display:none">SlavicLabs</h1>
<section class="unlockPotencial">
    <div class="container">
        <div class="sliderunlock">

            <?php
    if( have_rows('potencial') ):

        // Loop through rows.
            while( have_rows('potencial') ) : the_row();
    if( have_rows('potencjal_box') ):

    // Loop through rows.
        while( have_rows('potencjal_box') ) : the_row();
 
        // Load sub field value.
        $img =  get_sub_field('zdjecie');
        $heading =  get_sub_field('naglowek');
        $text =  get_sub_field('tekst');
        $link =  get_sub_field('link_do_produktu');
       ?>
            <div class=" row">
                <div class="col-12 col-md-6 unlockimage">
                    <img class="lazy" src="<?= $img ?>" alt="zdjecie główne">
                </div>
                <div class="col-12 col-md-6 unlockbox">
                    <p class="bigtext white"><?= $heading ?></p>
                    <p class="smalltext white"><?= $text ?></p>
                    <a class="button" href="<?= $link ?>">

                        <?php _e( 'Kup teraz','slaviclabs' ); ?>
                    </a>
                </div>
            </div>
            <?php
                endwhile;
                else :
                endif;
            endwhile;
            else :
            endif;
            ?>
        </div>
    </div>
</section>