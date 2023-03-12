jQuery(document).ready(function () {
    //loader
    $(window).on('load', function () {
        $(".main-medical-loader").fadeOut(10);
    });
    //open side nav
    $('.hamburger').click(function () {
        $(".links-parent").addClass('go-left-sidebar');
    })
    $('.close-btn').click(function () {
        $(".links-parent").removeClass('go-left-sidebar');
    })
    //smooth scroll
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 400);
    });

    //error function
    function error_register_login($msg) {
        $('.response-box-parent').removeClass('d-none')
        $('.response-box-parent div').addClass('alert-danger').text($msg)
    }

    //success function
    function success_register_login($msg) {
        $('.response-box-parent').removeClass('d-none')
        $('.response-box-parent div').removeClass('alert-danger').addClass('alert-success').text($msg)
        window.location.replace(data.home_url);
    }

    //search btn
    $('.ml-3.-ver-7.cursor-pointer.text-secondary.d-none.d-lg-inline').click(function () {
        $('.top-search-p').addClass('visible');
    })
    $('.close-bnt-s').click(function () {
        $('.top-search-p').removeClass('visible');
    })

    var lastScrollTop = 0;
    $(window).scroll(function (event) {
        var st = $(this).scrollTop();
        if (st > lastScrollTop) {
            $('.s-fixed-bottom').addClass('opacity-1')
        } else {
            $('.s-fixed-bottom').removeClass('opacity-1')
        }
        lastScrollTop = st;
    });

    //swiper
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 5,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            "@0.00": {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            "@0.75": {
                slidesPerView: 1,
                spaceBetween: 10,
            },

            "@1.00": {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            "@1.70": {
                slidesPerView: 2.75,
                spaceBetween: 20,
            },
        },
    });
    var swiper2 = new Swiper(".mySwiper2", {
        slidesPerView: 1,
        spaceBetween: 5,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            "@0.00": {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            "@0.75": {
                slidesPerView: 1,
                spaceBetween: 10,
            },

            "@1.25": {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            "@1.70": {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    var swiper3 = new Swiper(".mySwiper3", {
        slidesPerView: 1,
        spaceBetween: 5,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            "@0.00": {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            "@0.75": {
                slidesPerView: 1,
                spaceBetween: 10,
            },

            "@1.00": {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            "@1.70": {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    //contact us
    $(".send-contact-us").click(function (e) {
        e.preventDefault();
        $user_name = $('.user-name').val();
        $user_mobile = $('.user-mobile').val();
        $user_email = $('.user-email').val();
        $user_text = $('.user-text').val();


        $.ajax({
            url: data.ajax_url,
            type: "post",
            data: {
                action: "contact_us_form",
                user_name: $user_name,
                user_mobile: $user_mobile,
                user_email: $user_email,
                user_text: $user_text,
            },
            success: function (response) {
                if (response == -1) {
                    error_register_login('لطفا تمام موارد را تکمیل نمایید')
                } else if (response == -2) {
                    error_register_login('شماره موبایل  وارد شده صحیح نیست')
                } else if (response == -3) {
                    error_register_login('ایمیل  وارد شده صحیح نیست')
                } else if (response == -4) {
                    error_register_login('اندازه نام کاربری بیشتر از حد مجاز است')
                } else if (response == -5) {
                    error_register_login('اندازه پیام بیشتر از حد مجاز است')
                } else if (response == 0) {
                    error_register_login('مشکلی در ارتباط وجود دارد . لطفا دوباره بعدا تلاش نمایید')
                } else if (response == 1) {
                    $('.response-box-parent').removeClass('d-none')
                    $('.response-box-parent div').removeClass('alert-danger').addClass('alert-success').text('پیام شما با موفقیت ارسال شد');
                    /*$user_name = $('.user-name').val('');
                    $user_mobile = $('.user-mobile').val('');
                    $user_email = $('.user-email').val('');
                    $user_text = $('.user-text').val('');*/
                    setTimeout(hide, 3000);

                    /* window.location.replace(data.home_url);*/
                    function hide() {
                        window.location.replace(data.home_url);
                    }
                }
            },
        });
    });

    //register
    $(".send-register").click(function (e) {
        e.preventDefault();
        $user_name = $('.user-name').val();
        $user_pass = $('.user-pass').val();
        $user_email = $('.user-email').val();


        $.ajax({
            url: data.ajax_url,
            type: "post",
            data: {
                action: "register_form",
                user_name: $user_name,
                user_pass: $user_pass,
                user_email: $user_email,
            },
            success: function (response) {
                if (response == -1) {
                    error_register_login('لطفا تمام موارد را تکمیل نمایید')
                } else if (response == -2) {
                    error_register_login('ایمیل انتخاب شده قبلا ثبت شده است')
                } else if (response == -3) {
                    error_register_login('ایمیل انتخاب شده صحیح نیست')
                } else if (response == -4) {
                    error_register_login('اندازه نام کاربری بیشتر از حد مجاز است')
                } else if (response == -5) {
                    error_register_login('نام کاربری قبلا ثبت شده است')
                } else if (response == -6) {
                    error_register_login('رمز عبور باید بیشتر از 4 کارکتر باشد')
                } else if (response == 0) {
                    error_register_login('مشکلی در ثبت نام شما بوجود آمد لطفا بعدا امتحان نمایید')
                } else if (response == 1) {
                    success_register_login('ثبت نام با موفقیت انجام شد')
                }
            },
        });
    });

    //login
    $(".send-login").click(function (e) {
        e.preventDefault();
        $user_name = $('.user-name').val();
        $user_pass = $('.user-pass').val();

        $.ajax({
            url: data.ajax_url,
            type: "post",
            data: {
                action: "login_form",
                user_name: $user_name,
                user_pass: $user_pass,
            },
            success: function (response) {
                if (response == -1) {
                    error_register_login('لطفا تمام موارد را تکمیل نمایید')
                } else if (response == -2 || response == 0) {
                    error_register_login('نام کاربری یا کلمه عبور اشتباه است')
                } else if (response == 1) {
                    success_register_login('ورود با موفقیت انجام شد')
                }
            },
        });
    });

    //like
    $(".like").click(function (e) {
        e.preventDefault();
        $this = $(this);
        $post_id = $this.attr("data-postid");

        $.ajax({
            url: data.ajax_url,
            type: "post",
            data: {
                action: "like_action",
                post_id: $post_id,
            },
            success: function (response) {
                $response = JSON.parse(response)
                if ($response[0] == 'liked') {
                    $this.addClass('liked-style');
                } else if ($response[0] == 'unliked') {
                    $this.removeClass('liked-style');
                }
                $this.next().text($response[1]);
            },
        });
    });

    //response close btn
    $('.response-close-btn').click(function () {
        $('.response-box').fadeOut()
    })

    //save post
    $(".save-post").click(function (e) {
        e.preventDefault();
        $this = $(this);
        $post_id = $this.attr("data-postid");

        $.ajax({
            url: data.ajax_url,
            type: "post",
            data: {
                action: "save_action",
                post_id: $post_id,
            },
            success: function (response) {
                if (response == 1) {
                    $this.addClass('saved-style');
                    $('.response-box-c').removeClass('bg-secondary').addClass('success-box');
                    $('.response-box-c span').text('پست ذخیره شد');
                    $('.response-box').fadeIn(200);
                } else if (response == 2) {
                    $this.addClass('saved-style');
                    $('.response-box-c').removeClass('success-box').addClass('bg-secondary');
                    $('.response-box-c span').text('پست  از ذخیره خارج شد');
                    $('.response-box').fadeIn(200);
                    $this.removeClass('saved-style')
                }
            },
        });
    });

    $('.save-post-guest').click(function () {
        $('.response-box-c').addClass('warning-box');
        $('.response-box-c span').text('برای بوکمارک کردن ابتدا باید وارد سایت شوید');
        $('.response-box').fadeIn(200)
    })

    //image profile menu
    $('.img-top-header-profile').click(function () {
        $('.box-for-top-menu').toggle();
    })
})