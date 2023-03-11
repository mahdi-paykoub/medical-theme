<?php
get_header();
get_template_part('templates/single-header', null, array('تماس با ما'));
?>

    <!--contact us-->
    <div class="container pb-5 mt-5 pt-4">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <div class="contact-box-p a-p-t-b p-4 a-feature a-feature-second border-radios-10">
                    <div class="mr-4 mt-3">
                        <img src="<?php echo FILE_URI; ?>/assets/img/open.png" height="50" width="50" alt="">
                    </div>
                    <div class="font-weight-bold mt-3 text-Purple-dark">
                      آدرس ایمیل
                    </div>
                    <div class="mt-3">
                        <?php
                        echo get_cmb2_values('social_media', 'email_address');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <div class="contact-box-p a-p-t-b p-4 b-feature a-feature-second border-radios-10">
                    <div class="mr-4 mt-3">
                        <img src="<?php echo FILE_URI; ?>/assets/img/whatsapp (1).png" height="50" width="50" alt="">
                    </div>
                    <div class="font-weight-bold mt-3 text-Purple-dark">
                        شماره واتساپ
                    </div>
                    <div class="mt-3">
                        <?php
                        echo get_cmb2_values('social_media', 'whats_app_number');
                        ?>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <div class="contact-box-p a-p-t-b p-4 c-feature a-feature-second border-radios-10">
                    <div class="mr-4 mt-3">
                        <img src="<?php echo FILE_URI; ?>/assets/img/telegram (6).png" height="50" width="50" alt="">
                    </div>
                    <div class="font-weight-bold mt-3 text-Purple-dark">
                        آدرس تلگرامی
                    </div>
                    <div class="mt-3">+001 123 456 790</div>
                </div>
            </div>
        </div>
        <div class="p-desc p-4 w-100 border-radios-10 mt-5">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="mt-3">
                        <label for="" class="fs15 text-secondary mr-2">نام :</label>
                        <input type="text" name="user-name"
                               class="comment-replay-inp user-name h60px w-100 border-radios-10"
                               placeholder="نام خود را وارد نمایید ...">
                    </div>
                    <div class="mt-3">
                        <label for="" class="fs15 text-secondary mr-2">ایمیل :</label>
                        <input type="email" name="user-email"
                               class="comment-replay-inp user-email h60px w-100 border-radios-10" placeholder="ایمیل">
                    </div>
                    <div class="mt-3">
                        <label for="" class="fs15 text-secondary mr-2">شماره موبایل :</label>
                        <input type="text" name="user-mobile"
                               class="comment-replay-inp user-mobile h60px w-100 border-radios-10"
                               placeholder="شماره موبایل">
                    </div>
                    <div class="mt-3">
                        <label for="" class="fs15 text-secondary mr-2">پیام شما :</label>
                        <textarea name="user-text" id="" cols="30" rows="4" class="w-100 border-radios-10 p-4 user-text"
                                  placeholder="پیام شما..."></textarea>
                    </div>
                    <!--response-->
                    <div class="mt-3 d-none response-box-parent">
                        <div class="alert fs15 py-3">

                        </div>
                    </div>
                    <div class="mt-4 mb-5">
                        <button class="btn bg-orange-dark text-white w-100 py-2 border-radios-10 send-contact-us">
                            ارسال پیام
                        </button>
                    </div>

                </div>
                <div class="col-12 col-lg-6 mt-4">
                    <div class="c-b-img w-100 h-100 border-radios-10 py-5">
                        <?php
                        if ( is_active_sidebar( 'contact_us_widget_form_left' ) ) {
                            dynamic_sidebar( 'contact_us_widget_form_left' );
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_template_part('templates/footer');
get_footer();
