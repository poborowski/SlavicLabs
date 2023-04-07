<?php

$loyaltyLvls = [
    [
        "icon"=> "/loyalty/hand.svg",
        "heading"=> "Poziom 1",
        "text" => "Złóż zamówienie jednorazowe lub subskrypcyjne, zbieraj punkty i
        oszczędzaj!",
        "lista" => ['1 zł=1 punkt, wdasz 100 zł 
        zdobywasz 100 punktów','prezent urodzinowy to dodatkowe punkty'],
    ],
    [
        "icon"=> "/loyalty/rocket.svg",
        "heading"=> "Poziom 2",
        "text" => "Załóż konto lub zaloguj się, by korzystać z punktów i zdobywać je za
        dodatkowe aktywności!",
        "lista" => ['1 zł=1 punkt, wdasz 100 zł 
        zdobywasz 100 punktów','prezent urodzinowy to dodatkowe punkty','prezent urodzinowy to dodatkowe punkty'],
    ],
    [
        "icon"=> "/loyalty/sunny.svg",
        "heading"=> "Poziom 3",
        "text" => "Zdobyte punkty wymieniaj na kupony zniżkowe i obniżaj ceny kolejnych
        zamówień!",
        "lista" => ['1 zł=1 punkt, wdasz 100 zł 
        zdobywasz 100 punktów','prezent urodzinowy to dodatkowe punkty','prezent urodzinowy to dodatkowe punkty'],
    ],
    ];
?>
<section class="loyaltyLvls">
    <div class="row">
        <p class="col-12 loyaltyLvlsBigHeading"><?php _e( 'Poziomy w Programie lojalnościowym','slaviclabs' ); ?></p>
        <?php
        foreach($loyaltyLvls  as $loyaltyLvlsContent ){
        $iconbox = $loyaltyLvlsContent ["icon"];
        $headingbox = $loyaltyLvlsContent ["heading"];
        $textbox = $loyaltyLvlsContent ["text"];
        $list = $loyaltyLvlsContent["lista"];
        ?>
        <div class="col-12 col-md-4 ">
            <div class="loyaltyLvlsBox">
                <img class="loyaltyLvlsIcon" src="<?= IMGS ?><?= $iconbox ?>" alt="ikona poziomu">
                <p class="loyaltyLvlsHeading"><?php _e( $headingbox,'slaviclabs' ); ?></p>
                <p class="loyaltyLvlsText"><?php _e( $textbox,'slaviclabs' ); ?></p>
                <ul>
                    <?php
            for ($i = 1; $i <= count($list); $i++) {
                echo "<li>" . $list[$i-1] . "</li>";
            }
            ?>
                </ul>
            </div>
        </div>
        <?php } ?>

    </div>
</section>