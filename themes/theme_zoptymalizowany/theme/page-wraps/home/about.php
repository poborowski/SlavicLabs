<section class="about" id="onas">
    <div class="container">
        <div class="row">
            <div class="slideAbout">
                <div class="sliderabout">
                    <?php
    if( have_rows('o_nas') ):

        // Loop through rows.
            while( have_rows('o_nas') ) : the_row();
    if( have_rows('o_nas_box') ):

    // Loop through rows.
        while( have_rows('o_nas_box') ) : the_row();
 
        // Load sub field value.
        $img =  get_sub_field('zdjecie');
        $heading =  get_sub_field('naglowek');
        $text =  get_sub_field('tekst');
        $link =  get_sub_field('link');
       ?>
                    <div class="slideAboutBox">
                        <div class="col-12 col-md-6">
                            <p class="bigtext"><?= $heading ?></p>
                            <p><?= strip_tags($text) ?></p>
                            <a href="<?= $link ?>" class="button"><?php _e( 'Dowiedz się więcej','slaviclabs' ); ?></a>
                        </div>
                        <div class="col-12 col-md-6">
                            <img class="lazy" src="<?= $img ?>" alt="onas">
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
        </div>
    </div>
</section>