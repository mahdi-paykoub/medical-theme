<?php
get_header();
get_template_part( 'templates/single-header', null, array( 'صفحه‌ای پیدا نشد' ) );
?>
    <!--content-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="d-flex align-items-center mx-auto justify-content-center">
                    <span class="fs180 font-weight-bold text-Purple-dark">4</span>
                    <img src="<?php echo FILE_URI; ?>/assets/img/error.4b5472f1.gif" class="mx-4" width="170"
                         height="170" alt="404 صفحه ای پیدا نشد">
                    <span class="fs180 font-weight-bold text-Purple-dark">4</span>
                </div>
            </div>
            <div class="col-10 col-md-7 mx-auto text-center">
                <div class="font-weight-bold fs35 text-Purple-dark">
                    صفحه ای که به دنبال آن بودید، یافت نشد.
                </div>
                <div class="mt-4 text-secondary px-0 px-md-5 lh-2">
                    با عرض پوزش از شما، صفحه ای که به دنبال آن هستید ممکن است حذف شده باشد، نام آن تغییر کرده باشد یا به
                    طور موقت در دسترس نباشد.
                </div>
                <a href="<?php echo home_url(); ?>" class="btn bg-Purple-light text-white  mt-5 py-3 px-5 mb-5">بازگشت
                    به خانه</a>
            </div>
        </div>
    </div>
<?php
get_template_part( 'templates/footer' );
get_footer();