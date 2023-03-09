<?php
get_header();
if ( ! is_user_logged_in() ):
	?>
    <div class="bg-color-login w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-5">
                    <div class="p-login-box bg-white my-4">
                        <div class="text-center pt-5">
                            <a href="<?php echo home_url(); ?>">
                                <img src="<?php echo FILE_URI; ?>/assets/img/14.png" alt="">
                            </a>
                        </div>
                        <div class="px-3 px-md-5 mt-5">
                            <input type="text" class="comment-replay-inp h60px w-100 border-radios-10 user-name"
                                   placeholder="نام کاربری">
                        </div>
                        <div class="px-3 px-md-5 mt-3">
                            <input type="password" class="comment-replay-inp h60px w-100 border-radios-10 user-pass"
                                   placeholder="رمزعبور">
                        </div>
                        <div class="px-3 px-md-5 mt-3">
                            <input type="email" class="comment-replay-inp h60px w-100 border-radios-10 user-email"
                                   placeholder="ایمیل">
                        </div>
                        <!--response-->
                        <div class="px-3 px-md-5 mt-3 d-none response-box-parent">
                            <div class="alert fs15 py-3">

                            </div>
                        </div>
                        <div class="px-3 px-md-5 mt-4">
                            <button class="w-100 btn bg-Purple-light text-white border-radios-10 py-3 send-register">ثبت
                                نام
                            </button>
                            <button class="w-100 btn btn-light mt-3 border-radios-10 py-3">
                                <svg class="-ver-4" width="25" height="19" viewBox="0 0 25 19" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.52391 18.8209H6.34174V9.54903L0.887695 5.4585V17.1847C0.887695 18.0901 1.62126 18.8209 2.52391 18.8209Z"
                                          fill="#4285F4"></path>
                                    <path d="M19.4297 18.8209H23.2475C24.1529 18.8209 24.8837 18.0873 24.8837 17.1847V5.4585L19.4297 9.54903"
                                          fill="#34A853"></path>
                                    <path d="M19.4297 2.45921V9.54947L24.8837 5.45894V3.27732C24.8837 1.25387 22.5739 0.100341 20.9568 1.31386"
                                          fill="#FBBC04"></path>
                                    <path d="M6.34766 9.54924V2.45898L12.8925 7.36762L19.4374 2.45898V9.54924L12.8925 14.4579"
                                          fill="#EA4335"></path>
                                    <path d="M0.886719 3.27732V5.45894L6.34076 9.54947V2.45921L4.81363 1.31386C3.19378 0.100341 0.886719 1.25387 0.886719 3.27732Z"
                                          fill="#C5221F"></path>
                                </svg>
                                <span class="mr-2">ثبت نام با گوگل</span>
                            </button>
                        </div>
                        <div class="px-3 px-md-5 mt-5 text-center">
                            <span class="text-dark fs16">قبلا ثبت نام کردی؟</span>
                        </div>
                        <div class="px-3 px-md-5 mt-3">
                            <a href="<?php echo home_url() . '/index.php/login' ?>"
                               class="w-100 btn bg-orange-dark text-white border-radios-10 py-3">ورود</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
else:
	?>
    <div class="bg-color-login w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-5 mt-5">
                    <div class="alert alert-info px-5 py-3">

                        <svg class="-ver-8 ml-2" width="23" height="23" viewBox="0 0 23 23" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.15" cx="13.8062" cy="13.2944" r="9.19385" fill="#0090b0"></circle>
                            <path d="M0.785 8C0.785 9.62908 0.873314 10.8846 1.08987 11.859C1.30444 12.8245 1.63433 13.4652 2.08458 13.9154C2.53483 14.3657 3.17551 14.6956 4.14099 14.9101C5.11539 15.1267 6.37092 15.215 8 15.215C9.62908 15.215 10.8846 15.1267 11.859 14.9101C12.8245 14.6956 13.4652 14.3657 13.9154 13.9154C14.3657 13.4652 14.6956 12.8245 14.9101 11.859C15.1267 10.8846 15.215 9.62908 15.215 8C15.215 6.37092 15.1267 5.11539 14.9101 4.14099C14.6956 3.17551 14.3657 2.53483 13.9154 2.08458C13.4652 1.63433 12.8245 1.30444 11.859 1.08987C10.8846 0.873315 9.62908 0.785 8 0.785C6.37092 0.785 5.11539 0.873315 4.14099 1.08987C3.17551 1.30444 2.53483 1.63433 2.08458 2.08458C1.63433 2.53483 1.30444 3.17551 1.08987 4.14099C0.873314 5.11539 0.785 6.37092 0.785 8Z"
                                  stroke="#0090b0" stroke-width="1.57" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M7.99996 4.6665V11.3332M11.3333 7.33317V11.3332M4.66663 8.6665V11.3332"
                                  stroke="#0090b0" stroke-width="1.57" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                        </svg>
                        شما عضو سایت هستید.
                        <a class="text-info fs15 mr-1" href="<?php echo home_url(); ?>"> (صفحه اصلی)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
endif;
get_footer();