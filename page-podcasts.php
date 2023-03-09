<?php
get_header();
get_template_part( 'templates/single-header', null, array( 'پادکست ها' ) );
?>
    <!--content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mb-3">
                <img src="<?php echo FILE_URI; ?>/assets/img/pod.png" class="width-80-100" alt="">
                <span class="font-weight-bold fs28 text-Purple-dark -ver-7"> شنونده ما باشید ...</span>
            </div>
			<?php
			$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$newest    = array(
				'post_type'      => array( 'post' ),
				'post_status'    => 'publish',
				'meta_value'     => '',
				'meta_key'       => 'voice_file',
				'meta_compare'   => '!=',
				'order'          => 'DESC',
				'paged'          => $paged,
			);
			$new_posts = new WP_Query( $newest );
			if ( $new_posts->have_posts() ) :
				while ( $new_posts->have_posts() ) : $new_posts->the_post();
					?>
                    <div class="col-12 col-md-6 col-lg-4 mt-5">
                        <div class="pt-3 px-3 position-relative all-casts swiper-slide3">
                            <?php echo get_template_part('templates/podcast');?>
                        </div>
                    </div>
				<?php
				endwhile;
			endif;
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
<?php
get_template_part( 'templates/footer');

get_footer();