<?php

$loyaltyGetPoints = [
    [
        "icon"=> "/loyalty/coins.svg",
        "heading"=> "1 zł=1 punkt",
        "text" => "Zrób zakupy",

    ],
    [
        "icon"=> "/loyalty/bag.svg",
        "heading"=> "80 puntów",
        "text" => "Wybierz subskrypcję",

    ],
    [
        "icon"=> "/loyalty/man.svg",
        "heading"=> "20 punktów",
        "text" => "Utwórz konto",
    ],
    [
        "icon"=> "/loyalty/dessert.svg",
        "heading"=> "50 punktów",
        "text" => "Z okazji Twoich urodzin",
    ],
    [
        "icon"=> "/loyalty/star.svg",
        "heading"=> "20 punktów",
        "text" => "Zostaw opinię",
    ],
    [
        "icon"=> "/loyalty/image.svg",
        "heading"=> "30 punktów",
        "text" => "Udostępnij zdjęcie z produktem",
    ],
    [
        "icon"=> "/loyalty/chat.svg",
        "heading"=> "20 punktów",
        "text" => "Poleć na Znajomemu",
    ],
    [
        "icon"=> "/loyalty/instagram.svg",
        "heading"=> "10 punktów",
        "text" => "Obserwuj nas na Instagramie",
    ],
    [
        "icon"=> "/loyalty/facebook.svg",
        "heading"=> "20 punktów",
        "text" => "Dołacz do grupy na Facebooku",
    ],
    ];
?>





<section class="loyaltyGetPoints">
    <div class="row">
        <p class="col-12 loyaltyGetPointsBigHeading"><?php _e( 'Jak zdobyć punkty?','slaviclabs' ); ?></p>
        <?php
        foreach($loyaltyGetPoints  as $loyaltyGetPointsContent ){
        $iconbox = $loyaltyGetPointsContent ["icon"];
        $headingbox = $loyaltyGetPointsContent ["heading"];
        $textbox = $loyaltyGetPointsContent ["text"];
        ?>
        <div class="col-12 col-md-4 loyaltyGetPointsBox">
            <div class="loyaltyGetBox">
                <img class="loyaltyGetPointsIcon" src="<?= IMGS ?><?= $iconbox?>" alt="ikona get points">
                <p class="loyaltyGetPointsHeading"><?php _e( $headingbox,'slaviclabs' ); ?></p>
                <p class="loyaltyGetPointsText"> <?php _e( $textbox,'slaviclabs' ); ?></p>
            </div>
        </div>
        <?php } ?>

    </div>
</section>