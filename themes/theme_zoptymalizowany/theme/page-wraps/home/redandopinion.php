<?php
    $redWrap = get_field('czerwona_sekcja','17');
?>

<section class="redwrap" style="background-image:url(<?= IMGS ?>/redbcg.jpg)" alt="zdjecie w tle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="redwrapname">
                    <?php _e( 'Karol Wyszomirski','slaviclabs' ); ?>
                </p>
            </div>
            <div class="col-12 col-md-2">
                <img class="lazy" src="<?= $redWrap['obrazek'] ?>" alt="neuro hacking zdjecie">
            </div>

            <div class="col-12 col-md-2">
                <p class="white valueanimated" akhi="<?= $redWrap['ksiazki']['liczba'] ?>">
                    0</p>
                <p class="white"><?= strip_tags($redWrap['ksiazki']['tekst']) ?></p>
            </div>
            <div class="col-12 col-md-2">
                <p class="white valueanimated" akhi="<?= $redWrap['doswiadczenie']['liczba'] ?>">
                    0</p>
                <p class="white"><?= strip_tags($redWrap['doswiadczenie']['tekst']) ?></p>
            </div>
            <div class="col-12 col-md-3">
                <p class="white valueanimated" akhi="<?= $redWrap['godziny']['liczba'] ?>">
                    0</p>
                <p class="white"><?= strip_tags($redWrap['godziny']['tekst']) ?></p>
            </div>
            <div class="col-12 col-md-3">
                <p class="white valueanimated" akhi="<?= $redWrap['secje']['liczba'] ?>">
                    0</p>
                <p class="white"><?= strip_tags($redWrap['secje']['tekst']) ?></p>
            </div>

        </div>
    </div>
</section>
<section class="opinions">
    <div class="container">
        <div class="row">
            <div class="slideropinion">
                <?php

    if( have_rows('opinie','17') ):

    // Loop through rows.
        while( have_rows('opinie','17') ) : the_row();
 
        // Load sub field value.
   
        $text =  get_sub_field('tekst');
        $author =  get_sub_field('autor');
        $position =  get_sub_field('stanowisko');
        $img =  get_sub_field('zdjecie');

       ?>
                <div class="slideOpinionsBox">
                    <p class="col-12 opinion"><?= strip_tags($text) ?></p>
                    <p class="col-2">
                        <img class="lazy" src="<?= $img ?>" alt=" zdjecie autora opini">
                    </p>
                    <div class="col-10">
                        <p class="authoropinion"><?= $author ?></p>
                        <p class="positionopinion"><?= $position ?></p>
                    </div>
                </div>
                <?php
                endwhile;
                else :
                endif;
        
            ?>
            </div>
        </div>
    </div>
</section>