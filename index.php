<?php
get_header();
get_template_part('templates/response-box');
?>
    <!--header-->
    <header class="header-back-img position-relative">
        <!--top menu-->
        <?php get_template_part('templates/top-menu') ?>
        <!--main header-->
        <?php get_template_part('templates/index-header') ?>
    </header>
    <!--content-->
    <div class="mt-3 mt-5 position-relative -z-index-0">
        <!--new article-->
        <?php get_template_part('templates/new-posts'); ?>
        <!--most view article-->
        <?php get_template_part('templates/most-view-posts'); ?>
        <!--category-->
        <div class="container-fluid mt-10">
            <div class="row for-back-color position-relative">
                <div class="col-12 col-lg-4">
                    <div class="sub-top-txt font-weight-bold px-3 mr-3 mr-lg-5 text-orange-dark">
                        دسته بندی
                    </div>
                    <h2 class="mt-3 font-weight-bold fs35 mr-3 mr-lg-5 text-Purple-dark-withe w-space">
                        <?php echo get_cmb2_values('general_options', 'category_main_text'); ?>
                    </h2>
                    <div class="mr-3 mr-lg-5 mt-2 fs15 lh-1-6 text-dark-white pb-5">
                        <?php echo get_cmb2_values('general_options', 'category_small_text'); ?>
                    </div>
                    <a href="<?php echo home_url() . '/index.php/all-categories' ?>" title="همه دسته بندی"
                       class="fs14 mr-3 mr-lg-5 btn-all-cat text-white border-radios-10">همه دسته بندی
                        ها</a>
                    <img src="<?php echo FILE_URI; ?>/assets/img/download9.png" alt="" title=""
                         class="position-absolute right-left-animation float-img9 d-none d-lg-block">
                    <img src="<?php echo FILE_URI; ?>/assets/img/download10.png" alt="" title=""
                         class="position-absolute rotation-animation float-img13 d-none d-lg-block">

                </div>
                <div class="col-12 col-lg-8 mt-4 mt-lg-0 position-relative">
                    <div class="swiper swiper1 mySwiper">
                        <div class="swiper-wrapper">

                            <?php
                            $cat_args = array(
                                'parent' => 0,
                            );
                            $get_cats = get_categories($cat_args);
                            foreach ($get_cats as $get_cat):
                                ?>
                                <div class="swiper-slide swiper-slide1 pb-5 pt-4">
                                    <!--img-->
                                    <div class="row mr-4 pt-2">
                                        <div class="col-4 col-lg-6 img-p-cat p-4 bg-white border-radios-10">
                                            <img src="<?php echo get_term_meta($get_cat->term_id, '__term_meta_text')[0]; ?>"
                                                 class="object-cover w-100 border-radios-10 shaking-fast"
                                                 alt="<?php echo $get_cat->name; ?>"
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
                                    <a href="<?php echo esc_url(get_category_link($get_cat->cat_ID)); ?>"
                                       title="<?php echo $get_cat->name; ?>"
                                       class="fs14 btn-more-cat border-radios-5 cursor-pointer mr-4">مشاهده</a>
                                </div>
                            <?php
                            endforeach;
                            ?>

                        </div>
                    </div>
                    <img src="<?php echo FILE_URI; ?>/assets/img/download13.png" alt="" title=""
                         class="position-absolute right-left-animation float-img7 d-none d-lg-block">
                    <img src="<?php echo FILE_URI; ?>/assets/img/download12.png" alt="" title=""
                         class="position-absolute up-down-animation float-img8 d-none d-lg-block">
                </div>
            </div>
        </div>

        <!--site casts-->
        <div class="container pt-0 pt-md-5">
            <div class="font-weight-bold mx-auto text-orange sub-top-txt px-3">پادکست</div>
            <h2 class="font-weight-bold mt-3 fs35 text-Purple-dark text-center w-space">پست های صوتی
                <svg class="right-left-animation mr-2" width="23" height="15" viewBox="0 0 23 15" fill="#1f2278">
                    <path class="" opacity="0.6"
                          d="M16.5073 5.95329L21.0752 5.54932C22.1003 5.54932 22.9315 6.38856 22.9315 7.42367C22.9315 8.45878 22.1003 9.29802 21.0752 9.29802L16.5073 8.89404C15.7031 8.89404 15.0511 8.23571 15.0511 7.42367C15.0511 6.61027 15.7031 5.95329 16.5073 5.95329"></path>
                    <path class=""
                          d="M1.16786 6.02753C1.23926 5.95544 1.50598 5.65076 1.75653 5.39776C3.21811 3.81313 7.03437 1.22195 9.03073 0.428959C9.33382 0.302461 10.1003 0.0331419 10.5112 0.0140991C10.9032 0.0140991 11.2776 0.105232 11.6346 0.284778C12.0805 0.536415 12.4361 0.933592 12.6328 1.4015C12.7581 1.72523 12.9548 2.69777 12.9548 2.71545C13.1501 3.77776 13.2565 5.50521 13.2565 7.41493C13.2565 9.23215 13.1501 10.8889 12.9898 11.9689C12.9723 11.9879 12.7756 13.1944 12.5614 13.6079C12.1694 14.3642 11.4029 14.8321 10.5826 14.8321H10.5112C9.97638 14.8144 8.85292 14.3451 8.85292 14.3288C6.96297 13.5358 3.23697 11.0698 1.73902 9.43074C1.73902 9.43074 1.31604 9.00908 1.13284 8.74656C0.84726 8.36843 0.70447 7.90052 0.70447 7.43261C0.70447 6.9103 0.864772 6.42471 1.16786 6.02753"></path>
                </svg>
            </h2>
            <div class="row position-relative">
                <div class="col-12 mt-5">
                    <div class="swiper swiper3 mySwiper3">
                        <div class="swiper-wrapper">
                            <!--repeat here-->
                            <?php
                            $newest = array(
                                'post_type' => array('post'),
                                'post_status' => 'publish',
                                'meta_value' => '',
                                'meta_key' => 'voice_file',
                                'meta_compare' => '!=',
                                'order' => 'DESC',
                                'posts_per_page' => 5
                            );
                            $new_posts = new WP_Query($newest);
                            if ($new_posts->have_posts()) :
                                while ($new_posts->have_posts()) : $new_posts->the_post();
                                    ?>
                                    <div class="swiper-slide swiper-slide3 pt-3 px-3  position-relative">
                                        <!--podcast repeat-->
                                        <?php get_template_part('templates/podcast') ?>
                                    </div>
                                <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
                <img src="<?php echo FILE_URI; ?>/assets/img/download7.png"
                     class="position-absolute up-down-animation float-img14 d-none d-md-block"
                     alt="" title="">
            </div>
        </div>

        <!--introduction-->
        <div class="container pt-5">
            <div class="row">

                <?php
                if (is_active_sidebar('main_page_widget')) {
                    dynamic_sidebar('main_page_widget');
                }
                ?>
                <div class="col-12 col-lg-6 lh-2 mt-3 text-secondary text-justify">
                    <div class="p-index-comments bg-orange-dark pt-5 px-5 pb-4 mt-5 fs16 text-white">
                        <?php
                        if (is_active_sidebar('main_page_widget_middle')) {
                            dynamic_sidebar('main_page_widget_middle');
                        }
                        ?>
                        <div class="row">
                            <div class="col-6">
                                <p class="font-weight-bold text-white pb-0 mb-2">
                                    مهدی پایکوب
                                </p>
                                <p class="fs13">کارشناس پرستاری</p>
                            </div>
                            <div class="col-6 text-left">
                                <img src="<?php echo FILE_URI; ?>/assets/img/download30.png" class="w-50 op5" alt=""
                                     title="">
                            </div>
                        </div>
                        <div class="top-ind-icon position-absolute bg-white p-2 border-radios-10">
                            <img src="<?php echo FILE_URI; ?>/assets/img/Annotation%202023-02-09%20051100.png"
                                 class="border-radios-10" width="50"
                                 height="50" alt="" title="">
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-6 lh-2 mt-3 text-secondary text-justify pt-4">
                    <img src="<?php echo FILE_URI; ?>/assets/img/Annotation%202023-02-03%20142128.png" class="w-100"
                         alt="" title="">
                </div>


                <?php
                if (is_active_sidebar('main_page_widget_bottom')) {
                    dynamic_sidebar('main_page_widget_bottom');
                }
                ?>

            </div>
        </div>
    </div>
    <!--footer-->
<?php get_template_part('templates/footer') ?>
<?php
get_footer();
