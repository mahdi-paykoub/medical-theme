<?php
get_header();
get_template_part( 'templates/single-header', null, array( 'درباره  ما' ) );
?>
    <div class="container mt-5 py-5">
        <div class="row">
            <!--top about us-->
            <div class="col-12 col-lg-6 pl-5 ml-md-0">
                <div class="about-us-l-img">
                    <ul>
                        <li class="px-2 mt-auto"><img src="<?php echo FILE_URI; ?>/assets/img/pic-1.ad1ed7ee.jpg"
                                                      class="w-100 mr-3 mr-md-0" alt=""></li>
                        <li class="px-2"><img src="<?php echo FILE_URI; ?>/assets/img/pic-2.0593bc2f.jpg" class="w-100  mr-2 mr-md-0"
                                              alt=""></li>
                        <li class="px-2 mt-3 mr-auto"><img src="<?php echo FILE_URI; ?>/assets/img/pic-3.fa689b10.jpg"
                                                           class="w-100" alt=""></li>
                        <li class="px-2 mt-3">
                            <div class="exp-bx mr-2">
                                7
                                <span class="d-block text-Purple-dark">سال تجربه</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <img src="<?php echo FILE_URI; ?>/assets/img/download36.png"
                     class="position-absolute right-left-animation -z-index-1 float-img19"
                     alt="">
            </div>
            <div class="col-12 col-lg-6">
                <div class="font-weight-bold text-orange sub-top-txt px-3 mt-5 fs22">درباره ما</div>

	            <?php
	            if ( is_active_sidebar( 'about_us_widget_top' ) ) {
		            dynamic_sidebar( 'about_us_widget_top' );
	            }
	            ?>


                <img src="<?php echo FILE_URI; ?>/assets/img/download38.png"
                     class="position-absolute up-down-animation -z-index-1 float-img20" alt="">

            </div>
        </div>
    </div>


    <div class="container-fluid p-desc mt-5">
        <!--description about us-->
        <div class="col-12 pt-3">
            <div class="text-justify lh-2 p-5">
	            <?php
	            if ( is_active_sidebar( 'about_us_widget_top' ) ) {
		            dynamic_sidebar( 'about_us_widget_main_description' );
	            }
	            ?>
            </div>
        </div>
    </div>
    <div class="container pb-5 ">
        <!--our team-->
        <div class="font-weight-bold mx-auto text-orange sub-top-txt px-3 mt-5">اعضای درمان سو</div>
        <div class="font-weight-bold mt-3 fs35 text-Purple-dark text-center"> اعضای تیم ما</div>
        <div class="row px-3 px-md-5 position-relative">
			<?php
			$args       = array(
				'role__in' => array( 'administrator','editor' )
			);
			$team_users = get_users( $args );
			foreach ( $team_users as $team_user ):
				?>
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="parent-mv-box bg-white border-radios-10 p-4">
                        <div class="team-media team-media-same position-relative text-center">
                            <img src="<?php display_user_image($team_user->ID); ?>"
                                 class="rounded-circle object-cover w-100 team-img-he" alt="">
                        </div>
                        <h4 class="text-Purple-dark font-weight-bold mt-3 fs22 text-center">
							<?php echo $team_user->display_name; ?>
                        </h4>
                        <div class="text-orange-dark mt-2 text-center fs15">
                            کارشناس پرستاری
                        </div>
                        <div class="mt-3 text-center">
                            <a href="<?php echo get_author_posts_url( $team_user->ID ); ?>"
                               class="btn bg-Purple-light fs15 py-2 px-4 text-white">
                                مشاهده پروفایل
                            </a>
                        </div>
                    </div>
                </div>
			<?php
			endforeach;
			?>

            <img src="<?php echo FILE_URI; ?>/assets/img/download21.png"
                 class="position-absolute -z-index-1 right-left-animation float-img21" alt="">


        </div>
    </div>

<?php
get_template_part( 'templates/footer' );
get_footer();
