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
<section class="exchangePointsLvl">
    <div class="row">
        <p class="col-12 exchangePointsLvlBigHeading"><?php _e( 'Poziomy w Programie lojalnościowym','slaviclabs' ); ?>
        </p>
        <div class="col-12 row rageExchangePointsLvl">
            <div class="col-12 col-md-5 rageExchangePointsLvlTextBox">
                <p>Twój poziom w Programie:<span>Poziom 1</span></p>
                <p>Do kolejnego poziomu brakuje Ci: <span>198,76 zł</span></p>
            </div>
            <div class="col-12 col-md-7">
                <div class="scaleLvl">
                    <p class="scaleLvlLeft">Poziom 1</p>
                    <p class="scaleLvlCenter">Ty, obecnie</p>
                    <p class="scaleLvlRight">Poziom 2</p>
                </div>
                <input type="range">
                <div class="establish">
                    <p class="establishLeft">wydane 301,22 zł</p>
                    <p class="establishRight">wskakujesz tu, gdy łączna wartość Twoich zamówień przekroczy 500 zł.</p>
                </div>
            </div>
        </div>
        <?php
        foreach($loyaltyLvls  as $loyaltyLvlsContent ){
        $iconbox = $loyaltyLvlsContent ["icon"];
        $headingbox = $loyaltyLvlsContent ["heading"];
        $textbox = $loyaltyLvlsContent ["text"];
        $list = $loyaltyLvlsContent["lista"];
    
        ?>
        <div class="col-12 col-md-4">
            <div class=" exchangePointsLvlsBox">
                <img class="exchangePointsLvlsIcon" src="<?= IMGS ?><?= $iconbox ?>" alt="ikona poziomu">
                <p class="exchangePointsLvlsHeading"><?php _e( $headingbox,'slaviclabs' ); ?></p>
                <p class="exchangePointsLvlsText"><?php _e( $textbox,'slaviclabs' ); ?></p>
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