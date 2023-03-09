<!--new article-->
<div class="m-v-back-img w-100 position-relative">
    <img src="<?php echo FILE_URI; ?>/assets/img/download10.png"
         class="position-absolute float-img6 rotation-animation up-down-animation"
         alt=""
         title="">
    <img src="<?php echo FILE_URI; ?>/assets/img/download5.png"
         class="position-absolute float-img4 up-down-animation" alt="" title="">
    <img src="<?php echo FILE_URI; ?>/assets/img/download9.png"
         class="position-absolute float-img5 up-down-animation" alt="" title="">
    <div class="container">
        <div class="font-weight-bold mx-auto text-orange sub-top-txt px-3">مقالات مهم ما</div>
        <h2 class="font-weight-bold mt-3 fs35 text-Purple-dark text-center">جدید ترین مقالات
            <svg class="right-left-animation mr-2" width="23" height="15" viewBox="0 0 23 15" fill="#1f2278">
                <path class="" opacity="0.6"
                      d="M16.5073 5.95329L21.0752 5.54932C22.1003 5.54932 22.9315 6.38856 22.9315 7.42367C22.9315 8.45878 22.1003 9.29802 21.0752 9.29802L16.5073 8.89404C15.7031 8.89404 15.0511 8.23571 15.0511 7.42367C15.0511 6.61027 15.7031 5.95329 16.5073 5.95329"></path>
                <path class=""
                      d="M1.16786 6.02753C1.23926 5.95544 1.50598 5.65076 1.75653 5.39776C3.21811 3.81313 7.03437 1.22195 9.03073 0.428959C9.33382 0.302461 10.1003 0.0331419 10.5112 0.0140991C10.9032 0.0140991 11.2776 0.105232 11.6346 0.284778C12.0805 0.536415 12.4361 0.933592 12.6328 1.4015C12.7581 1.72523 12.9548 2.69777 12.9548 2.71545C13.1501 3.77776 13.2565 5.50521 13.2565 7.41493C13.2565 9.23215 13.1501 10.8889 12.9898 11.9689C12.9723 11.9879 12.7756 13.1944 12.5614 13.6079C12.1694 14.3642 11.4029 14.8321 10.5826 14.8321H10.5112C9.97638 14.8144 8.85292 14.3451 8.85292 14.3288C6.96297 13.5358 3.23697 11.0698 1.73902 9.43074C1.73902 9.43074 1.31604 9.00908 1.13284 8.74656C0.84726 8.36843 0.70447 7.90052 0.70447 7.43261C0.70447 6.9103 0.864772 6.42471 1.16786 6.02753"></path>
            </svg>
        </h2>
        <div class="row mt-4 px-4">
            <div class="swiper swiper2 mySwiper2">
                <div class="swiper-wrapper">
					<?php
					$newest    = array(
						'post_type'      => array( 'post' ),
						'post_status'    => 'publish',
						'posts_per_page' => 5
					);
					$new_posts = new WP_Query( $newest );
					if ( $new_posts->have_posts() ) :
						while ( $new_posts->have_posts() ) : $new_posts->the_post();
							?>
                            <div class="swiper-slide swiper-slide2 pb-5 pt-4">
								<?php get_template_part( 'templates/post-swiper' ) ?>
                            </div>
						<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>
                </div>
            </div>
        </div>
    </div>
</div>