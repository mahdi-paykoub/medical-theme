<?php
get_header();
get_template_part( 'templates/top-menu' );
$category = get_the_category();
$cat_id   = $category[0]->cat_ID;

$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$cat_args  = array(
	'tax_query'   => array(
		array(
			'taxonomy' => 'category',
			'terms'    => $cat_id,
		),
	),
	'post_type'   => array( 'post' ),
	'post_status' => 'publish',
	'order'       => 'DESC',
	'paged'       => $paged
);
$cat_posts = new WP_Query( $cat_args );
if ( $cat_posts->have_posts() ) :
	?>
    <!--new article-->
    <div class="w-100 position-relative mt-5">
        <img src="<?php echo FILE_URI; ?>/assets/img/download10.png"
             class="position-absolute float-img6 rotation-animation up-down-animation" alt="">
        <img src="<?php echo FILE_URI; ?>/assets/img/download5.png"
             class="position-absolute float-img23 up-down-animation" alt="">
        <img src="<?php echo FILE_URI; ?>/assets/img/download9.png"
             class="position-absolute float-img5 up-down-animation" alt="">

        <div class="container">
            <div class="row mt-4">
                <div class="col-12 mb-2">
                <span class="fs28 font-weight-bold text-Purple-dark">
                    <img src="<?php echo FILE_URI; ?>/assets/img/readit.png" width="60" alt="">
                    <?php
                    echo get_cat_name( $cat_id );
                    ?>
                </span>
                </div>
				<?php
				while ( $cat_posts->have_posts() ) : $cat_posts->the_post();
					?>
                    <div class="col-12 col-md-6 col-lg-4 mt-4">
						<?php get_template_part( 'templates/post-swiper' ); ?>
                    </div>
				<?php endwhile; ?>
            </div>


            <!--pagination-->
            <div class="row my-5 py-4">
                <div class="col-12">
                    <div class="pagination d-flex justify-content-center">
						<?php
						pagination_it( $cat_posts );
						?>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php
endif;
wp_reset_postdata();
?>
<?php
get_template_part( 'templates/footer' );
get_footer();