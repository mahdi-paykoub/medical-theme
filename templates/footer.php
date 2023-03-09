<!--footer-->
<footer class="footer-back-img position-relative -z-index-0 mt-5">
    <div class="container footer-content-p">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mt-4 px-4">
                <img src="<?php echo FILE_URI; ?>/assets/img/14.png" alt="" title="">
                <p class="fs15 mt-3 text-justify fw500 lh-2">
					<?php echo get_cmb2_values( 'general_options', 'header_text_3' ); ?>

                </p>
                <div class="mt-4">
					<?php
					if ( get_cmb2_values( 'social_media', 'telegram_url' ) ):
						?>
                        <a href="<?php echo get_cmb2_values( 'social_media', 'telegram_url' ) ?>"
                           title="ادرس تلگرام">
                            <img src="<?php echo FILE_URI; ?>/assets/img/telegram%20(1).png" class="w50px" alt="ادرس تلگرام"
                                 title="ادرس تلگرام">
                        </a>
					<?php endif; ?>

					<?php
					if ( get_cmb2_values( 'social_media', 'instagram_url' ) ):
						?>
                        <a href="<?php echo get_cmb2_values( 'social_media', 'instagram_url' ); ?>"
                           title="ادرس اینستاگرام">
                            <img src="<?php echo FILE_URI; ?>/assets/img/ig.webp" class="mr-3 w50px" alt="ادرس اینستاگرام"
                                 title="ادرس اینستاگرام">
                        </a>

					<?php endif; ?>



					<?php
					if ( get_cmb2_values( 'social_media', 'twitter_url' ) ):
						?>
                        <a href="<?php echo get_cmb2_values( 'social_media', 'twitter_url' ); ?>"
                           title="ادرس توییتر">
                            <img src="<?php echo FILE_URI; ?>/assets/img/tw.webp" class="mr-3 w50px"
                                 alt="ادرس توییتر"
                                 title="ادرس توییتر">
                        </a>
					<?php endif; ?>

	                <?php
	                if ( get_cmb2_values( 'social_media', 'facebook_url' ) ):
		                ?>
                        <a href="<?php echo get_cmb2_values( 'social_media', 'facebook_url' ); ?>"
                           title="ادرس فیسبوک">
                            <img src="<?php echo FILE_URI; ?>/assets/img/tw.webp" class="mr-3 w50px"
                                 alt="ادرس فیسبوک"
                                 title="ادرس فیسبوک">
                        </a>
	                <?php endif; ?>
                </div>
            </div>
            <div class="col-6  col-lg-3 mt-4  px-4">
                <h3 class="text-Purple-dark font-weight-bold fs22 comment-count position-relative pb-4">لینکهای
                    مفید </h3>
                <div class="footer-li-p mt-4">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'bottom-footer-right-menu'
					) );
					?>
                </div>
            </div>
            <div class="col-6 col-lg-3 mt-4 px-4">
                <h3 class="text-Purple-dark font-weight-bold fs22 comment-count position-relative pb-4">بخش های
                    سایت</h3>
                <div class="footer-li-p mt-4">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'bottom-footer-left-menu'
					) );
					?>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mt-4 px-4">
                <h3 class="text-Purple-dark font-weight-bold fs22 comment-count position-relative pb-4">عضویت در
                    خبرنامه</h3>
                <div class="mt-4">
                    <div class="fs14">
                        برای اطلاع از آخرین مقالات ایمیل خود را وراد نمایید...
                    </div>
                    <input type="text" class="register-get-news w-100 pr-2 border-0 border-radios-10 mt-3"
                           placeholder="آدرس ایمیل">
                    <a href="" title=""
                       class="d-block fs14 w-100 mt-3 text-center border-radios-10 send-btn-e-new text-white">ثبت
                        ایمیل</a>

                </div>
            </div>
            <div class="col-9 border-top mx-auto mt-5"></div>
            <div class="text-center w-100 text-secondary mt-3">
                Copyright © 2022 Design & Developed by
                <span class="text-orange-dark">mahdi paykoub</span>
            </div>

        </div>
        <img src="<?php echo FILE_URI; ?>/assets/img/download7.png"
             class="position-absolute float-img10 rotation-animation d-none d-md-block"
             alt=""
             title="">
        <img src="<?php echo FILE_URI; ?>/assets/img/download13.png"
             class="position-absolute float-img11 right-left-animation d-none d-md-block"
             alt="" title="">
        <img src="<?php echo FILE_URI; ?>/assets/img/download13.png"
             class="position-absolute float-img12 right-left-animation d-none d-md-block"
             alt="" title="">
    </div>
</footer>