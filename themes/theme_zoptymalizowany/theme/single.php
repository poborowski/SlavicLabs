<?php

/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>
<?php
$post_id = get_the_ID();
$post_date = get_the_date();
$post_modified = get_the_modified_date();
$post_author_id = get_post_field( 'post_author', $post_id );
$post_author_name = get_the_author_meta( 'display_name', $post_author_id );
?>
<section class="breadcrumb singlePostBredcrubs">
    <?php
if ( function_exists('woocommerce_breadcrumb') ) {
    woocommerce_breadcrumb( '<p id="breadcrumbs">','</p>' );
}?>
    <section class="imgSinglePost">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <?php
echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

                </div>
                <div class="col-12 col-md-6">
                    <header class="entry-header">
                        <p> <?= $post_date?></p>

                        <?php
the_title(
sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ),
'</h2>'
);
?>
                        <p> <?php echo (strlen(get_the_excerpt()) > 170) ? substr(get_the_excerpt(), 0, 167) . '...' : get_the_excerpt(); ?>
                        </p>
                        <?php if ( 'post' == get_post_type() ) : ?>

                        <div class="entry-meta">
                            <?php //understrap_posted_on(); ?>
                        </div><!-- .entry-meta -->

                        <?php endif; ?>

                    </header><!-- .entry-header -->
                </div>
            </div>
        </div>
    </section>
</section>

<div class="wrapper" id="single-wrapper">

    <div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

        <div class="row">


            <main class="site-main mx-auto my-5" id="main">

                <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('loop-templates/content', 'single'); ?>

                <?php endwhile; // end of the loop. 
				?>


                <div class="container">
                    <div class="dateAndAuthorPost row">
                        <p class="col-12 col-md-3">Data dodania: <?= $post_date?></p>
                        <p class="col-12 col-md-4">Data aktualizacji: <?= $post_modified?></p>
                        <p class="col-12 col-md-5 authorDate"><img class="lazy" src="<?= IMGS ?>/avatarheader.svg"
                                alt="avataraccount">Autor_ka: <?= $post_author_name?></p>
                    </div>
                </div>
            </main><!-- #main -->

        </div><!-- .row -->

    </div><!-- #content -->

    <div class="wrapper-related-posts mt-5">

        <section class="posts-home pb-5 py-md-5 gray">
            <h2 class="heading text-center mb-5"><?= __('Przeczytaj  <span>także</span>'); ?></h2>
            <div class="relatedScroll mx-auto mb-5">
                <?php

				// The Query
				$args = array(
					'post_type' => 'post',
					'post__not_in' => array(get_the_ID()),
					'post_status' => 'publish',
					'posts_per_page' => 8,
					'order' => 'DESC',
				);

				$the_query = new WP_Query($args);
				// The Loop
				if ($the_query->have_posts()) {

					while ($the_query->have_posts()) {
						$the_query->the_post();
						echo '<div class="col-12 col-md-3">';
						echo get_template_part('loop-templates/post-card');
                        ?>
                <p class="relatedAuthor"><?= $post_author_name?></p>
                <?php
						echo '</div>';
					}
				}
				/* Restore original Post Data */
				wp_reset_postdata(); ?>


            </div>

        </section>

    </div>

</div><!-- #single-wrapper -->

<?php get_footer();