<section class="blog" id="blog">
    <div class="container">
        <div class="row">
            <img class="lazy" src="<?= IMGS ?>/book.svg" alt="">
            <p class="white bigtext center"> <?php _e( 'Blog','slaviclabs' ); ?></p>


            <?php
      // Query to retrieve latest posts from WordPress
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) :
          $query->the_post();
    ?>
            <div class="card mb-3">
                <div class="card-body">
                    <a class="row" href="<?php the_permalink(); ?>">
                        <div class="col-12 col-md-5">
                            <img class="card-img-top lazy" src="<?php echo get_the_post_thumbnail_url(); ?>"
                                alt="blog zdjecie">
                        </div>
                        <div class=" col-12 col-md-7">
                            <p class="card-subtitle mb-2 text-muted"><?php echo get_the_date(); ?></p>
                            <p class="card-title"><?php the_title(); ?></p>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <button>Więcej</button>
                        </div>
                    </a>

                </div>
                <?php
        endwhile;
      endif;

      wp_reset_postdata();
    ?>

            </div>
            <a class="center button showmore" href="">Pokaż więcej</a>
        </div>
    </div>


</section>