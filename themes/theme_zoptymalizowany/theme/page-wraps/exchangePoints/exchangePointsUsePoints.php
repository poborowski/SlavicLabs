<?php
$usePoints = [
    [
        "icon"=> "/loyalty/coins2.svg",
        "heading"=> "5 zł",
        "text" => "100 punktów",

    ],
    [
        "icon"=> "/loyalty/coins2.svg",
        "heading"=> "10 zł",
        "text" => "200 punktów",

    ],
    [
        "icon"=> "/loyalty/coins2.svg",
        "heading"=> "15 zł",
        "text" => "300 punktów",
    ],
    [
        "icon"=> "/loyalty/coins2.svg",
        "heading"=> "20 zł",
        "text" => "100 punktów",
    ],
    [
        "icon"=> "/loyalty/coins2.svg",
        "heading"=> "25 zł",
        "text" => "200 punktów", 
    ],
    ];
?>

<section class="usePoints">
    <div class="row">
        <p class="col-12 usePointsBigHeading"><?php _e( 'Jak wykorzystać punkty?','slaviclabs' ); ?></p>
        <p class="col-12 usePointsBigText"><?php _e( 'Kliknij „WYMIEŃ” skopiuj kupon zniżkowy i wklej go w polu Kod rabatowy w
            kasie podczas finalizacji zamówienia lub przy aktywnej subskrypcji w koncie Subskrybenta. Uwaga: kod nie
            łączy się z innymi kodami rabatowymi.','slaviclabs' ); ?>
        </p>
        <div class="row">
            <?php
                foreach($usePoints  as $usePointsContent ){
                    $iconbox = $usePointsContent ["icon"];
                    $headingbox = $usePointsContent ["heading"];
                    $textbox = $usePointsContent ["text"];
                    ?>
            <div class="col-12 col-md-4 usePointsBox">
                <div class="useBox">
                    <img class="usePointsIcon" src="<?= IMGS ?><?= $iconbox ?>" alt="ikona użyj punktów">
                    <p class="usePointsHeading"><?php _e( $headingbox ,'slaviclabs' ); ?></p>
                    <p class="usePointsText"><?php _e( $textbox,'slaviclabs' ); ?></p>
                    <button type="submit" class="btnUsePoints">Wymień </button>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</section>