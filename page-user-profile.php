<?php
get_header();
get_template_part( 'templates/top-menu' );
?>

    <?php get_template_part('templates/response-box'); ?>
    <div class="container mt-5">
        <div class="p-desc p-3 p-md-5  border-radios-10 position-relative">
            <div class="row">
                <div class="col-12">
                    <div class="position-relative">
                        <img src="<?php echo FILE_URI; ?>/assets/img/download.webp"
                             class="w-100 border-radios-10 object-cover p-h-t" alt="">
                        <img src="<?php display_user_image( get_current_user_id() ); ?>"
                             class="position-absolute rounded-circle profile-img object-cover wh-pro"
                             alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-5 fs28 font-weight-bold text-Purple-dark pt-5 mr-5">
						<?php echo( wp_get_current_user()->display_name ); ?>
                    </div>
                    <div class="mt-4 text-secondary d-inline-block mr-5">
                        <span>  ایمیل :</span>
                        <span class="border-left pl-3"><?php echo( wp_get_current_user()->user_email ); ?></span>
                        <span class="pr-3"> تخصص :</span>
                        <span class="border-left pl-3">کارشناس پرستاری</span>
                    </div>
                    <button class="btn btn-primary float-left mt-2 px-4 py-2">دنبال کردن</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 font-weight-bold fs22 text-Purple-dark p-4">
                <img src="<?php echo FILE_URI; ?>/assets/img/upload-profile.png" class="ml-2" width="70" height="70"
                     alt="">
                آپلود تصویر کاربری
            </div>
            <div class="col-12 mt-2">
                <form action="<?php echo FILE_URI . '/inc/upload-profile.php' ?>"
                      class="dropzone dropzone-custom p-desc d-flex align-items-center border-radios-10"
                      id="dropzonewidgetuser">
                    <div class="dz-message m-0" data-dz-message><span class="text-secondary fs16">
                    تصویر پروفایل خود را بکشید و در اینجا رها کنید
                    </div>
                </form>
                <div class="text-left">
                    <button class="btn px-4 py-2 btn-primary mt-4 save-profile-image">ثبت تصویر</button>
                </div>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-12 font-weight-bold fs22 text-Purple-dark p-4">
                <img src="<?php echo FILE_URI; ?>/assets/img/saved.png" class="" width="80" height="80" alt="">
                پست های ذخیره شده
            </div>
			<?php
			if ( ! empty( get_user_meta( get_current_user_id(), 'saved_posts', true ) ) ):
				$save_posts = get_user_meta( get_current_user_id(), 'saved_posts', true );
				$number = 1;
				foreach ( $save_posts as $save_post ):
					?>
                    <div class="col-12 mt-3">
                        <div class="p-4 w-100 border-radios-10 text-Purple-light p-desc d-flex">
                            <a href="<?php echo get_permalink( $save_post ) ?>">
                                <img src="<?php echo get_the_post_thumbnail_url( $save_post ); ?>"
                                     class="border-radios-10 object-cover"
                                     width="100" height="100"
                                     title=" <?php echo get_the_title( $save_post ); ?>"
                                     alt="<?php echo get_the_title( $save_post ); ?>">
                            </a>


                            <div class="d-block mr-4 mt-1">
                                <a href="<?php echo get_permalink( $save_post ) ?>"
                                   class="font-weight-bold fs22 text-Purple-dark">
									<?php echo get_the_title( $save_post ); ?>
                                </a>

                                <div class="mt-2 mt-md-4">
                                    <a href="<?php echo get_permalink( $save_post ) ?>" class="fs14 font-weight-bold">
                                        برای خواندن کلیک کنید
                                        <svg width="16" height="11" viewBox="0 0 16 11" fill="none"
                                             xmlns="http://www.w3.org/2000/svg" class="mr-2 -ver-1">
                                            <path opacity="0.4"
                                                  d="M11.1898 4.38459L14.3778 4.10265C15.0932 4.10265 15.6733 4.68836 15.6733 5.41077C15.6733 6.13318 15.0932 6.71889 14.3778 6.71889L11.1898 6.43695C10.6285 6.43695 10.1735 5.97749 10.1735 5.41077C10.1735 4.84309 10.6285 4.38459 11.1898 4.38459"
                                                  fill="currentColor"></path>
                                            <path d="M0.484342 4.43642C0.534169 4.38611 0.720315 4.17347 0.895179 3.9969C1.91522 2.89098 4.57861 1.08258 5.97189 0.529142C6.18342 0.440858 6.71835 0.252899 7.00509 0.239609C7.27867 0.239609 7.54003 0.303211 7.78916 0.428517C8.10034 0.604136 8.34854 0.881329 8.4858 1.20788C8.57323 1.43382 8.71049 2.11256 8.71049 2.1249C8.84681 2.86629 8.92108 4.07189 8.92108 5.4047C8.92108 6.67295 8.84681 7.82918 8.73493 8.58292C8.72271 8.59621 8.58545 9.43823 8.43597 9.72681C8.16239 10.2546 7.62746 10.5812 7.05492 10.5812H7.00509C6.63186 10.5688 5.84779 10.2413 5.84779 10.2299C4.52879 9.6765 1.92838 7.95544 0.882957 6.81154C0.882957 6.81154 0.587756 6.51726 0.459899 6.33405C0.260591 6.07015 0.160937 5.74359 0.160937 5.41704C0.160937 5.05251 0.272812 4.71361 0.484342 4.43642"
                                                  fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="mr-auto mt-2 d-none d-md-block">
                                <svg width="40" height="40" fill="#3f45ca" viewBox="0 0 10 12"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="currentColor"
                                          d="M2.51974 10.651L2.51972 10.651L2.51551 10.654C2.00961 11.009 1.31115 10.6877 1.26272 10.0631C1.20578 9.32899 1.12994 7.98392 1.12995 6.02793V5.99265V5.99264C1.12994 5.21616 1.13036 4.53967 1.18575 3.97518C1.24191 3.40288 1.35849 2.89041 1.62915 2.47298C2.19514 1.60008 3.28533 1.34809 4.99817 1.34104C6.71301 1.33397 7.80474 1.58477 8.37131 2.46321C8.64158 2.88225 8.75804 3.39711 8.81416 3.97134C8.86955 4.538 8.86997 5.21625 8.86995 5.993V6.02794C8.86995 7.98392 8.7941 9.32899 8.73716 10.0631C8.68873 10.6877 7.99029 11.009 7.48439 10.654L7.48441 10.654L7.48016 10.651C7.03638 10.3475 6.6257 10.0207 6.30567 9.76593L6.29989 9.76133C6.15447 9.64555 6.02249 9.54047 5.91897 9.46373C5.7247 9.31973 5.56248 9.2214 5.41218 9.16087C5.24859 9.095 5.11648 9.08089 4.99995 9.08089C4.88342 9.08089 4.75131 9.095 4.58772 9.16088C4.43742 9.2214 4.2752 9.31973 4.08093 9.46373C3.97737 9.54049 3.8453 9.64565 3.69982 9.76147L3.69423 9.76592C3.3742 10.0207 2.96352 10.3475 2.51974 10.651Z"
                                          stroke-width="0.86" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path stroke="currentColor"
                                          d="M5.86 3.06262C6.29 3.06262 6.505 3.06099 6.8275 3.38265C7.15 3.70432 7.15 4.78095 7.15 5.21094"
                                          stroke-width="0.86" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <div class="fs15 text-secondary">شماره
									<?php echo $number; ?>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
					$number ++;
				endforeach;
			endif;
			?>
        </div>
    </div>
<?php
get_template_part( 'templates/footer' );
get_footer();