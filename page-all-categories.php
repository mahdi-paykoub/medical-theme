<?php
get_header();
get_template_part( 'templates/single-header', null, array( 'دسته ها', 1 ) );
?>
    <!--content-->
    <div class="container mt-5 pb-5">
        <div class="row position-relative">
			<?php
			$cat_args = array(
				'parent'     => 0,
				'hide_empty' => 0
			);
			$get_cats = get_categories( $cat_args );
			foreach ( $get_cats as $get_cat ):
				?>
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="swiper-slide swiper-slide1 pb-5 pt-4">
                        <!--img-->
                        <div class="row mr-4 pt-2">
                            <div class="col-4 col-lg-6 img-p-cat p-4 bg-white border-radios-10">
                                <img src="<?php echo get_term_meta( $get_cat->term_id, '__term_meta_text' )[0]; ?>"
                                     class="object-cover w-100 border-radios-10" alt="<?php echo $get_cat->name; ?>"
                                     title="<?php echo $get_cat->name; ?>">
                            </div>
                        </div>
                        <!--title-->
                        <h3 class="font-weight-bold fs28 text-Purple-dark mr-4 mt-3">
							<?php echo $get_cat->name; ?>
                        </h3>
                        <p class="text-justify mx-4 fs14 pt-2 lh-1-6 pb-3">
							<?php echo $get_cat->description; ?>
                        </p>
                        <a href="<?php echo esc_url( get_category_link( $get_cat->cat_ID ) ); ?>"
                           title="<?php echo $get_cat->name; ?>"
                           class="fs14 btn-more-cat border-radios-5 cursor-pointer mr-4">مشاهده</a>
                    </div>
                </div>
			<?php endforeach; ?>
            <img src="<?php echo FILE_URI; ?>/assets/img/download10.png"
                 class="position-absolute float-img18 -z-index-1 rotation-animation" alt="">
        </div>
    </div>
    <!--articles-->
<?php get_template_part( 'templates/most-view-posts' ) ?>
    <div class="mt-10"></div>

<?php
get_template_part( 'templates/footer' );
get_footer();