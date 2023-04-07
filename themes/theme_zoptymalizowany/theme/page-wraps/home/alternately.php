<section class="alternately" id="dlakogo">


    <?php

if( have_rows('sekcje_na_przemian') ):

// Loop through rows.
    while( have_rows('sekcje_na_przemian') ) : the_row();

    // Load sub field value.

    $imgleft =  get_sub_field('obrazek_lewa');
    $color =  get_sub_field('kolor');
    $icon =  get_sub_field('ikona');
    $heading =  get_sub_field('naglowek');
    $tekst =  get_sub_field('tekst');
    $link =  get_sub_field('link');

   ?>
    <div class="alternatelyBox">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 imageBcgAlternatelyBox"><img class="alternatelyBoximg lazy"
                        src="<?= $imgleft ?>" alt="dla kogo zdjecie"></div>
                <div class="col-12 col-md-6 bacgroundcolor" style="background-color:<?= $color ?>">
                    <div class="centerbox">

                        <img class="lazy" src="<?= $icon ?>" alt="dla kogo ikona">
                        <p class="bigtext white">
                            <?= $heading ?>
                        </p>
                        <p class="white">
                            <?= strip_tags($tekst) ?>
                        </p>
                        <a class="button" href="<?= $link ?>"><?php _e( 'Sprawdź teraz','slaviclabs' ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
                endwhile;
                else :
                endif;
        
            ?>


</section>