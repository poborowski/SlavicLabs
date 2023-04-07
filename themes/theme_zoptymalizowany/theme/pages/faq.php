<?php
/**
 * Template Name: Faq
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">



    <section class="breadcrumb">
        <?php
if ( function_exists('woocommerce_breadcrumb') ) {
    woocommerce_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
        <p class="faqWhiteHeading"><?php _e( 'Masz pytania? My znamy odpowiedzi!','slaviclabs' ); ?></p>
        <label class="faqSearchBox">
            <input class="faqinput" type="search" placeholder="Wpisz swoje pytanie...">
            <button class="search-button">
                <i class="fas fa-search"></i>
            </button>
        </label>
    </section>


    <div class="container faq">
        <div class="container row faqbox">
            <p class="faqBigHeading">Pochodzenie produktów</p>
            <p class="faqHeading">Pochodzenie</p>
            <div class="col-12"></div>
            <div class="faqaccordion">
                <button class="accordion"><span class="faqNumber">1</span> Co stanowi nasze produkty?<span
                        class="plus"><img class="lazy" src="<?= IMGS ?>/faqdown.svg" alt="faq down"></span><span
                        class="minus"><img class="lazy" src="<?= IMGS ?>/faqup.svg" alt="faq up"></span></button>
                <div class="panel" style="display: none;">
                    <p>Gdzie wytwarzane są nasze produkty?</p>
                </div>
            </div>

            <div class="faqaccordion">
                <button class="accordion"><span class="faqNumber">2</span> Gdzie wytwarzane są nasze produkty?<span
                        class="plus"><img class="lazy" src="<?= IMGS ?>/faqdown.svg" alt="faq down"></span><span
                        class="minus"><img class="lazy" src="<?= IMGS ?>/faqup.svg" alt="faq up"></span></button>
                <div class="panel" style="display: none;">
                    <p>Nasze produkty produkowane sa w krajach Unii Europejskiej z najwyższej jakości składników
                        pochodzenia
                        natralanego</p>
                </div>
            </div>
        </div>

        <div class="container row faqbox">
            <p class="faqBigHeading">Zamówienia, płatność i dostawa</p>
            <p class="faqHeading">Zamówienia</p>
            <div class="col-12"></div>
            <div class="faqaccordion">
                <button class="accordion"><span class="faqNumber">1</span>Co stanowi nasze produkty?<span
                        class="plus"><img class="lazy" src="<?= IMGS ?>/faqdown.svg" alt="faq down"></span><span
                        class="minus"><img class="lazy" src="<?= IMGS ?>/faqup.svg" alt="faq up"></span></button>
                <div class="panel" style="display: none;">
                    <p>Nasze produkty produkowane sa w krajach Unii Europejskiej z najwyższej jakości składników
                        pochodzenia
                        natralanego?</p>
                </div>
            </div>

            <div class="faqaccordion">
                <button class="accordion"><span class="faqNumber">2</span>Co stanowi nasze produkty?<span
                        class="plus"><img class="lazy" src="<?= IMGS ?>/faqdown.svg" alt="faq down"></span><span
                        class="minus"><img class="lazy" src="<?= IMGS ?>/faqup.svg" alt="faq up"></span></button>
                <div class="panel" style="display: none;">
                    <p>Nasze produkty produkowane sa w krajach Unii Europejskiej z najwyższej jakości składników
                        pochodzenia
                        natralanego?</p>
                </div>
            </div>
            <div class="faqaccordion">
                <button class="accordion"><span class="faqNumber">3</span>Co stanowi nasze produkty?<span
                        class="plus"><img class="lazy" src="<?= IMGS ?>/faqdown.svg" alt="faq down"></span><span
                        class="minus"><img class="lazy" src="<?= IMGS ?>/faqup.svg" alt="faq up"></span></button>
                <div class="panel" style="display: none;">
                    <p>Nasze produkty produkowane sa w krajach Unii Europejskiej z najwyższej jakości składników
                        pochodzenia
                        natralanego?</p>
                </div>
            </div>
            <div class="faqaccordion">
                <button class="accordion"><span class="faqNumber">4</span>Co stanowi nasze produkty?<span
                        class="plus"><img class="lazy" src="<?= IMGS ?>/faqdown.svg" alt="faq down"></span><span
                        class="minus"><img class="lazy" src="<?= IMGS ?>/faqup.svg" alt="faq up"></span></button>
                <div class="panel" style="display: none;">
                    <p>Nasze produkty produkowane sa w krajach Unii Europejskiej z najwyższej jakości składników
                        pochodzenia
                        natralanego?</p>
                </div>
            </div>
        </div>


        <div class="container row faqbox">

            <p class="faqHeading">Płatność</p>
            <div class="col-12"></div>
            <div class="faqaccordion">
                <button class="accordion"><span class="faqNumber">1</span>Co stanowi nasze produkty?<span
                        class="plus"><img class="lazy" src="<?= IMGS ?>/faqdown.svg" alt="faq down"></span><span
                        class="minus"><img class="lazy" src="<?= IMGS ?>/faqup.svg" alt="faq up"></span></button>
                <div class="panel" style="display: none;">
                    <p>Nasze produkty produkowane sa w krajach Unii Europejskiej z najwyższej jakości składników
                        pochodzenia
                        natralanego?</p>
                </div>
            </div>

            <div class="faqaccordion">
                <button class="accordion"><span class="faqNumber">2</span>Co stanowi nasze produkty?<span
                        class="plus"><img class="lazy" src="<?= IMGS ?>/faqdown.svg" alt="faq down"></span><span
                        class="minus"><img class="lazy" src="<?= IMGS ?>/faqup.svg" alt="faq up"></span></button>
                <div class="panel" style="display: none;">
                    <p>Nasze produkty produkowane sa w krajach Unii Europejskiej z najwyższej jakości składników
                        pochodzenia
                        natralanego?</p>
                </div>
            </div>
            <div class="faqaccordion">
                <button class="accordion"><span class="faqNumber">3</span>Co stanowi nasze produkty?<span
                        class="plus"><img class="lazy" src="<?= IMGS ?>/faqdown.svg" alt="faq down"></span><span
                        class="minus"><img class="lazy" src="<?= IMGS ?>/faqup.svg" alt="faq up"></span></button>
                <div class="panel" style="display: none;">
                    <p>Nasze produkty produkowane sa w krajach Unii Europejskiej z najwyższej jakości składników
                        pochodzenia
                        natralanego?</p>
                </div>
            </div>
            <div class="faqaccordion">
                <button class="accordion"><span class="faqNumber">4</span>Co stanowi nasze produkty?<span
                        class="plus"><img class="lazy" src="<?= IMGS ?>/faqdown.svg" alt="faq down"></span><span
                        class="minus"><img class="lazy" src="<?= IMGS ?>/faqup.svg" alt="faq up"></span></button>
                <div class="panel" style="display: none;">
                    <p>Nasze produkty produkowane sa w krajach Unii Europejskiej z najwyższej jakości składników
                        pochodzenia
                        natralanego?</p>
                </div>
            </div>
        </div>
    </div>
</div><!-- #page-wrapper -->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
            this.classList.remove("active");
        } else {
            panel.style.display = "block";
            this.classList.add("active");
        }
    });
}
</script>
<?php
get_footer();