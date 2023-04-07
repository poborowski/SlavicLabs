<?php
    $poziom = get_field('poziom');
?>
<section class="uplvl">
    <div class="scrolimage">
        <img class="uplvlorangebcg" src="<?= IMGS ?>/lvlbcg.jpg" alt="zdjęcie poziomów">
    </div>
    <div class="container">
        <div class="row">
            <img class="lazy" src="<?= IMGS ?>/star.png" alt="gwiazda">
            <p class="bigtext center white center"><?=$poziom['naglowek']?></p>

            <div class="boxlvl" style="display:none">
                <?php
    if( have_rows('poziom') ):

        // Loop through rows.
            while( have_rows('poziom') ) : the_row();
    if( have_rows('poziom_box') ):

    // Loop through rows.
        while( have_rows('poziom_box') ) : the_row();
 
        // Load sub field value.
        $img =  get_sub_field('obrazek');

        $text =  get_sub_field('tekst');

       ?>
                <div class="singlelvl">
                    <img class="lazy" src="<?= $img ?>" alt="ikona poziomu">
                    <p class="white center"><?= $text ?></p>
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

</section>