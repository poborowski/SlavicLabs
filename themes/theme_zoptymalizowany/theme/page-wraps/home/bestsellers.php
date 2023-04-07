<section class="bestsellers" id="bestsellers">
    <div class="container">
        <div class="bestsellersbox">
            <p class="bigtext center"><?php _e( 'Bestsellers','slaviclabs' ); ?></p>
            <div class="boxbestselersproduct ">
                <?php
$query_args =  array(
    'posts_per_page' =>  4, // -1 (for all)
    'post_type'      =>  array( 'product' ),
    'post_status'    =>  'publish',
    'meta_key'       => 'total_sales',
    'order'          => 'DESC',
    'orderby'        => 'meta_value_num',
);

$query = new WP_Query( $query_args );

if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
    $sale_price = get_post_meta( get_the_ID(), '_sale_price', true );
?>

                <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="product col-12 col-md-3 center">
                    <?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?>
                    <span class="onsale"><?php echo $sale_price; ?> </span> <br>
                    <p class="center namebestseller"><?php the_title(); ?></p>
                    <p class="pricebestseller center ">

                        <?php echo get_post_meta( get_the_ID(), '_price', true ); ?> zł <br>
                        <del><?php echo get_post_meta( get_the_ID(), '_regular_price', true ); ?> zł</del>
                    </p>
                    <p class="descriptionbestseller center"><?php echo get_the_excerpt(); ?></p>
                </a>
                <?php
    endwhile;
    wp_reset_postdata();
else :
    // No post found
endif;
?>
            </div>
            <a class="center button" href="/sklep/ "><?php _e( 'Zobacz więcej','slaviclabs' ); ?></a>
        </div>
    </div>
</section>