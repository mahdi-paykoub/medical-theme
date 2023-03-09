<?php
get_header();
get_template_part( 'templates/top-menu' );

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
                <div class="col-12 mb-3">
                <span class="fs28 font-weight-bold text-Purple-dark">
                    <img src="<?php echo FILE_URI; ?>/assets/img/readit.png" width="60" alt="">
                    آرشیو مقالات
                </span>
                </div>

				<?php
				$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$newest    = array(
					'post_type'      => array( 'post' ),
					'post_status'    => 'publish',
					'order'          => 'DESC',
					'paged'          => $paged
				);
				$new_posts = new WP_Query( $newest );
				if ( $new_posts->have_posts() ) :
					while ( $new_posts->have_posts() ) : $new_posts->the_post();
						?>
                        <div class="col-12 col-md-6 col-lg-4 mt-4">
							<?php get_template_part( 'templates/post-swiper' ); ?>
                        </div>
					<?php
					endwhile;
				endif;
				wp_reset_postdata();
				?>

            </div>
            <!--pagination-->
            <div class="row my-5 py-4">
                <div class="col-12">
                    <div class="pagination d-flex justify-content-center">
				        <?php
				        pagination_it( $new_posts );
				        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
get_template_part( 'templates/footer' );
get_footer();