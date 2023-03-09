<?php
get_header();
get_template_part( 'templates/single-header', null, array( 'تماس با ما', 1 ) );
?>

    <!--contact us-->
    <div class="container pb-5 mt-5 pt-4">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <div class="contact-box-p a-p-t-b p-4 a-feature a-feature-second border-radios-10">
                    <div class="mr-4 mt-3">
                        <img src="<?php echo FILE_URI; ?>/assets/img/call.png" height="50" width="50" alt="">
                    </div>
                    <div class="font-weight-bold mt-3 text-Purple-dark">
                        شماره تماس
                    </div>
                    <div class="mt-4">+001 123 456 790</div>
                    <div class="mt-1">+001 123 456 790</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <div class="contact-box-p a-p-t-b p-4 b-feature a-feature-second border-radios-10">
                    <div class="mr-4 mt-3">
                        <img src="<?php echo FILE_URI; ?>/assets/img/email.png" height="50" width="50" alt="">
                    </div>
                    <div class="font-weight-bold mt-3 text-Purple-dark">
                        شماره تماس
                    </div>
                    <div class="mt-4">+001 123 456 790</div>
                    <div class="mt-1">+001 123 456 790</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <div class="contact-box-p a-p-t-b p-4 c-feature a-feature-second border-radios-10">
                    <div class="mr-4 mt-3">
                        <img src="<?php echo FILE_URI; ?>/assets/img/location.png" height="50" width="50" alt="">
                    </div>
                    <div class="font-weight-bold mt-3 text-Purple-dark">
                        شماره تماس
                    </div>
                    <div class="mt-4">+001 123 456 790</div>
                    <div class="mt-1">+001 123 456 790</div>
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
                        <div class="row">
                            <div class="col-12">
                                <div class="fs28 font-weight-bold text-white pr-4">
                                    فرم تماس با ما
                                </div>
                                <div class="px-4 text-white mt-2 text-justify lh-2">
                                    اگر خواستار بررسی و تجزیه و تحلیل بیماری هستید که در سایت موجود نیست از طریق این فرم
                                    اعلام نمایید تا همکاران ما نسبت به تولید آن اقدام نمایند. همچنین منتظر انتقادات و
                                    پیشنهاد های شما برای بهبود کیفیت سایت هستیم
                                </div>
                            </div>
                            <div class="col-10 bt-2 mx-auto mt-4"></div>
                            <div class="col-12 text-white">
                                <div class="mt-3 pr-4">
                                    <svg class="ml-2 -ver-8" width="26" height="26" viewBox="0 0 32 29" fill="#fff"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-current text-blue-700 dark:text-blue-450 transition duration-200 group-hover:text-white"
                                              d="M15.979 28.4996C3.17737 28.4996 0.433594 25.9845 0.433594 14.2496C0.433594 11.0245 0.640843 8.49572 1.20718 6.5242C2.65728 7.978 4.48714 9.72621 6.47465 11.2834C9.29349 13.4919 12.7074 15.5451 15.979 15.5451C19.2507 15.5451 22.6646 13.4919 25.4835 11.2834C27.471 9.72621 29.3008 7.978 30.7509 6.5242C31.3173 8.49572 31.5245 11.0245 31.5245 14.2496C31.5245 25.9845 28.7807 28.4996 15.979 28.4996Z"></path>
                                        <path class="fill-current text-blue-700 dark:text-blue-450 transition duration-200 group-hover:text-white"
                                              d="M29.6219 3.98071C28.104 5.52774 26.0906 7.51629 23.8856 9.24387C21.108 11.42 18.3038 12.9542 15.979 12.9542C13.6543 12.9542 10.8501 11.42 8.07254 9.24387C5.86751 7.51629 3.85413 5.52774 2.33618 3.98071C4.39367 0.870955 8.44417 -0.000366211 15.979 -0.000366211C23.5139 -0.000366211 27.5644 0.870955 29.6219 3.98071Z"></path>
                                    </svg>
                                    <span class="fs16"> ایمیل:</span>
                                </div>
                                <div class="mt-3 pr-4">
                                    mahdippdeve@gmail.com
                                </div>
                            </div>
                            <div class="col-10 bt-2 mx-auto mt-4"></div>
                            <div class="col-12 text-white">
                                <div class="mt-3 pr-4">
                                    <svg class="ml-2 -ver-8" width="25" height="25" viewBox="0 0 29 29" fill="#fff"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-current text-blue-700 dark:text-blue-450 transition duration-200 group-hover:text-white"
                                              d="M27.6063 1.36634C28.4988 2.27333 28.7658 3.53542 28.8669 4.45219C28.9798 5.47544 28.941 6.64933 28.813 7.85804C28.5556 10.2886 27.9014 13.186 27.0255 15.9748C26.1507 18.76 25.0187 21.5521 23.7562 23.7449C23.1271 24.8375 22.4229 25.8568 21.647 26.6607C20.9056 27.4288 19.883 28.2257 18.5944 28.4429L18.5873 28.4441C18.3448 28.4842 18.1084 28.4932 18.0251 28.4963L18.0092 28.4969C17.1678 28.5311 16.4412 28.2344 15.9452 27.968C15.4149 27.6831 14.9172 27.3071 14.4735 26.9129C13.5839 26.1225 12.717 25.0854 12.0115 24.0036C11.625 23.4108 11.2587 22.7616 10.9594 22.0896C10.5154 21.0929 10.7864 19.9603 11.458 19.0994L15.5328 14.2981C15.7414 14.0523 15.7262 13.6881 15.4979 13.4605C15.2695 13.2328 14.9043 13.2177 14.6577 13.4256L9.84211 17.4883C8.92423 18.2001 7.7103 18.4758 6.66051 17.9772C5.98926 17.6584 5.34208 17.2741 4.75088 16.8675C3.63451 16.0997 2.56486 15.1472 1.78043 14.1544C1.38906 13.659 1.01931 13.0916 0.767472 12.4777C0.524124 11.8846 0.313986 11.0581 0.512432 10.154L0.51276 10.1525C0.783943 8.91801 1.59665 7.94051 2.36691 7.22854C3.17804 6.47881 4.19792 5.79052 5.29295 5.17022C7.49017 3.92559 10.2726 2.79696 13.0471 1.92011C15.823 1.04281 18.7039 0.381914 21.1202 0.121652C22.3213 -0.0077328 23.4919 -0.0476991 24.5144 0.0680539C25.4326 0.171996 26.7026 0.447971 27.6063 1.36634Z"></path>
                                    </svg>
                                    <span class="fs16"> تلگرام:</span>
                                </div>
                                <div class="mt-3 pr-4">
                                    mahdippdeve@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_template_part( 'templates/footer' );
get_footer();
