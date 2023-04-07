<?php

$loyaltyHowWork = [
    [
        "icon"=> "/loyalty/one.svg",
        "heading"=> "Zbierasz punkty",
        "text" => "Złóż zamówienie jednorazowe lub subskrypcyjne, zbieraj punkty i
        oszczędzaj!",

    ],
    [
        "icon"=> "/loyalty/two.svg",
        "heading"=> "Zakładasz konto",
        "text" => "Załóż konto lub zaloguj się, by korzystać z punktów i zdobywać je za
        dodatkowe aktywności!",

    ],
    [
        "icon"=> "/loyalty/three.svg",
        "heading"=> "Wymieniasz punkty",
        "text" => "Zdobyte punkty wymieniaj na kupony zniżkowe i obniżaj ceny kolejnych
        zamówień!",
    ],
    ];
?>


<section class="loyaltyHowWork">
    <div class="container">
        <div class="row">
            <p class="col-12 loyaltyHowWorkBigHeading"><?php _e( 'Jak to działa?','slaviclabs' ); ?></p>
            <?php
        foreach($loyaltyHowWork  as $loyaltyHowWorkContent ){
        $iconbox = $loyaltyHowWorkContent ["icon"];
        $headingbox = $loyaltyHowWorkContent ["heading"];
        $textbox = $loyaltyHowWorkContent ["text"];
        ?>
            <div class="col-12 col-md-4">
                <img class="loyaltyHowWorkIcon" src="<?= IMGS ?><?= $iconbox ?>" alt="ikona how work">
                <p class="loyaltyHowWorkHeading"><?php _e( $headingbox,'slaviclabs' ); ?></p>
                <p class="loyaltyHowWorkText"><?php _e( $textbox ,'slaviclabs' ); ?></p>
            </div>
            <?php } ?>

        </div>
    </div>
</section>