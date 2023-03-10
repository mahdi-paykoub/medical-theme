<?php
get_header();
//get_template_part( 'templates/response-box' );
if (have_posts()):
    while (have_posts()): the_post();
        $P_name = get_the_title();
        get_template_part('templates/single-header', null, array($P_name, 2));
        set_post_view(get_the_ID());
        ?>
        <!--content-->
        <div class="container mt-5 pt-5">
            <!--content-->
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="video-last-load">
                        <?php get_template_part('templates/video-part'); ?>
                    </div>
                    <div class="mt-4">
                        <img src="<?php echo FILE_URI; ?>/assets/img/download31.jpg" class="rounded-circle object-cover"
                             height="50" width="50" alt="">

                        <span class="author-p"><?php the_author_posts_link(); ?></span>
                        <svg class="ml-1 mr-4 text-orange-dark -ver-8" width="24" height="24" viewBox="0 0 24 24"
                             fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63449 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z"
                                  stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M15.391 14.0178L12 11.9948V7.63379" stroke="currentColor" stroke-width="1.8"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="fs13 text-orange-dark font-weight-bold -ver-1"><?php echo get_the_date(); ?></span>


                        <span class="fs13 mr-auto text-orange-dark font-weight-bold -ver-1 float-left mt-3">زمان مطالعه:
                            <?php echo is_postmeta_empty('post_read_time'); ?>
                            دقیقه</span>
                    </div>

                    <?php
                    if (!empty(get_post_meta($post->ID, 'voice_file', true))):
                        $voice_file = get_post_meta($post->ID, 'voice_file', true)
                        ?>
                        <div class="row mt-5 px-4 px-md-3">
                            <div class="d-flex">
                                <svg class="-ver-7 ml-2" width="20" height="22" viewBox="0 0 20 22" fill="none">
                                    <ellipse opacity="0.15" rx="9.35499" ry="8.68976"
                                             transform="matrix(0.999965 -0.00839685 0.00973181 0.999953 10.5608 12.9399)"
                                             fill="#3f45ca"></ellipse>
                                    <path d="M2.20588 5.48534C2.20588 3.13448 2.57353 0 5.88234 0C9.19116 0 9.55881 3.13448 9.55881 5.48534C9.55881 7.8362 9.19116 10.9707 5.88234 10.9707C2.57352 10.9707 2.20588 7.8362 2.20588 5.48534Z"
                                          fill="#3f45ca"></path>
                                    <path d="M0.735293 6.85668C0.329202 6.85668 0 7.16366 0 7.54235C0 9.71338 1.60766 12.6347 5.14806 12.9915C5.14739 13.0035 5.14705 13.0155 5.14705 13.0277V13.7134H3.67646C3.27037 13.7134 2.94117 14.0203 2.94117 14.399C2.94117 14.7777 3.27037 15.0847 3.67646 15.0847H8.08822C8.49431 15.0847 8.82351 14.7777 8.82351 14.399C8.82351 14.0203 8.49431 13.7134 8.08822 13.7134H6.61764V13.0277C6.61764 13.0155 6.61729 13.0035 6.61663 12.9915C10.157 12.6347 11.7647 9.71337 11.7647 7.54235C11.7647 7.16366 11.4355 6.85668 11.0294 6.85668C10.6233 6.85668 10.2941 7.16366 10.2941 7.54235C10.2941 9.34052 8.88807 11.6564 5.88234 11.6564C2.87662 11.6564 1.47059 9.34052 1.47059 7.54235C1.47059 7.16366 1.14138 6.85668 0.735293 6.85668Z"
                                          fill="#3f45ca"></path>
                                </svg>
                                <span class="fs15 text-dark cursor-pointer" title="نسخه صوتی">  نسخه صوتی</span>
                            </div>
                            <audio class="w-100 mt-4" controls>
                                <source src="<?php echo $voice_file; ?>" type="audio/mp3">
                                مرورگر شما از فایل صوتی پشتیبانی نمیکند
                            </audio>

                        </div>
                    <?php endif; ?>

                    <div class="s-main-content px-2 px-md-0 mt-5">
                        <?php the_content(); ?>
                    </div>
                    <!--rate-->
                    <!--share-->
                    <div class="row mt-5 border-top border-top border-bottom py-4">
                        <div class="col-12 col-md-6 pr-4 pr-md-2">
                            <div class="d-flex align-items-center">
                                <span class="fs14 pr-2 pr-md-0">اشتراک گذاری:</span>
                                <?php include get_template_directory() . '/inc/share-twitter.php'; ?>
                                <a href="<?php echo $link; ?>">
                                    <div class="d-flex p-2 bg-Purple-light border-radios-10 mr-2">
                                        <svg class="text-white"
                                             width="19" height="19" viewBox="0 0 24 19" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.92323 18.5503C16.2597 18.5503 20.8207 11.6419 20.8207 5.65282C20.8207 5.45861 20.8164 5.26008 20.8078 5.06586C21.695 4.42422 22.4607 3.62945 23.0689 2.7189C22.2425 3.08655 21.3652 3.32665 20.4668 3.43102C21.4128 2.86402 22.121 1.97328 22.4603 0.923938C21.5704 1.45132 20.5973 1.82333 19.5825 2.02405C18.8988 1.29756 17.9948 0.816536 17.0103 0.65535C16.0257 0.494165 15.0155 0.661795 14.1358 1.13232C13.2561 1.60285 12.5559 2.35007 12.1435 3.25845C11.7311 4.16684 11.6294 5.18579 11.8541 6.15778C10.0522 6.06736 8.28947 5.59928 6.6801 4.78388C5.07073 3.96849 3.65068 2.82399 2.51201 1.42458C1.93328 2.42238 1.75618 3.60311 2.01672 4.72679C2.27726 5.85048 2.95588 6.8328 3.91466 7.47411C3.19487 7.45126 2.49084 7.25746 1.86075 6.90874V6.96484C1.8601 8.01196 2.2221 9.02699 2.88521 9.83739C3.54832 10.6478 4.47162 11.2035 5.49815 11.4102C4.83137 11.5926 4.13156 11.6192 3.45287 11.4879C3.74253 12.3884 4.30612 13.176 5.06497 13.7408C5.82382 14.3056 6.74008 14.6194 7.68586 14.6384C6.0802 15.8997 4.09675 16.5838 2.05496 16.5806C1.69286 16.58 1.33113 16.5578 0.97168 16.5141C3.04592 17.8448 5.45882 18.5516 7.92323 18.5503Z"
                                                  fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </a>
                                <a href="https://t.me/share/url?url={<?php the_permalink(); ?>}&text={<?php the_title(); ?>}">
                                    <div class="d-flex p-2 bg-Purple-light border-radios-10 mr-2">
                                        <svg class="text-white"
                                             width="19" height="19" viewBox="0 0 18 19" fill=""
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.1812 1.43782C17.7318 1.99732 17.8964 2.77587 17.9588 3.34141C18.0285 3.97263 18.0045 4.69678 17.9256 5.4424C17.7668 6.94177 17.3632 8.72911 16.8229 10.4495C16.2832 12.1676 15.5849 13.89 14.8061 15.2427C14.4181 15.9167 13.9837 16.5454 13.505 17.0413C13.0477 17.5152 12.4168 18.0068 11.6219 18.1408L11.6176 18.1415C11.468 18.1663 11.3222 18.1718 11.2707 18.1737L11.2609 18.1741C10.7419 18.1952 10.2937 18.0121 9.98772 17.8478C9.66058 17.6721 9.35359 17.4401 9.07985 17.1969C8.5311 16.7094 7.99629 16.0696 7.5611 15.4022C7.32265 15.0366 7.09674 14.6361 6.91208 14.2216C6.63817 13.6067 6.80539 12.908 7.21969 12.377L9.73332 9.41514C9.862 9.26352 9.85262 9.03887 9.71176 8.89843C9.5709 8.75799 9.34558 8.74865 9.19351 8.87694L6.22286 11.3831C5.65663 11.8222 4.90778 11.9923 4.26019 11.6847C3.84611 11.488 3.44689 11.2509 3.08219 11.0001C2.39352 10.5265 1.73368 9.93895 1.24978 9.32648C1.00835 9.0209 0.780261 8.67087 0.624908 8.2922C0.474791 7.92628 0.345162 7.41644 0.467579 6.85874L0.467781 6.85782C0.635068 6.09628 1.13641 5.49328 1.61157 5.05408C2.11193 4.59159 2.74107 4.167 3.41658 3.78435C4.77199 3.01656 6.48839 2.32034 8.19992 1.77943C9.91233 1.23824 11.6895 0.830547 13.18 0.669997C13.921 0.590182 14.6431 0.565528 15.2739 0.636933C15.8403 0.701053 16.6237 0.871296 17.1812 1.43782Z"
                                                  fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="d-flex p-2 bg-Purple-light border-radios-10 mr-2">
                                        <svg fill="currentColor" class="text-white" xmlns="http://www.w3.org/2000/svg"
                                             width="19"
                                             height="19" viewBox="0 0 24 24">
                                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 text-left mt-4 mt-md-0">
                            <div class="short-link-box postion-relative">
                                <input class="fs14 border p-2  text-secondary pl-4 " type="text" value="<?php the_permalink(); ?>">
                                <svg class="-ver-4 position-absolute" width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.1251 9.37753C11.1735 9.03246 11.2048 8.65154 11.2224 8.23142C11.342 8.16599 11.4325 8.09594 11.5044 8.02404C11.6726 7.85578 11.8308 7.58558 11.9433 7.07954C12.0583 6.56181 12.1108 5.86547 12.1108 4.91155C12.1108 3.00521 11.8476 2.22592 11.4625 1.84091C11.0775 1.45589 10.2983 1.19269 8.3919 1.19269C7.43799 1.19269 6.74164 1.24514 6.22392 1.3602C5.71788 1.47266 5.44768 1.63081 5.27942 1.79907C5.20752 1.87097 5.13746 1.96148 5.07203 2.08106C5.36761 2.06867 5.68259 2.06306 6.01814 2.06306C10.3187 2.06306 11.2404 2.98479 11.2404 7.2853C11.2404 11.5858 10.3187 12.5075 6.01814 12.5075C1.71762 12.5075 0.795898 11.5858 0.795898 7.2853C0.795898 3.79726 1.40225 2.53194 3.92593 2.17833C4.4152 0.577466 5.64584 0.164062 8.3919 0.164062C12.1899 0.164062 13.1394 1.11356 13.1394 4.91155C13.1394 7.65762 12.726 8.88826 11.1251 9.37753Z"
                                          fill="currentColor" fill-opacity="0.56"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!--related posts-->
                    <div class="row mt-5">
                        <div class="col-12 fs28 font-weight-bold text-Purple-dark">
                            پست های مشابه
                        </div>

                        <?php
                        $related_posts = array(
                            'post_status' => 'publish',
                            'post_type' => 'post',
                            'category__in' => wp_get_post_categories(get_the_ID()),
                            'post__not_in' => array(get_the_ID()),
                            'posts_per_page' => 3,
                            'orderby' => 'date',
                        );
                        $get_related_posts = new WP_Query($related_posts);
                        if ($get_related_posts->have_posts()) :
                            while ($get_related_posts->have_posts()) : $get_related_posts->the_post();
                                ?>
                                <div class="col-12 col-md-4 mt-4">
                                    <?php get_template_part('templates/post-box') ?>
                                </div>

                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>

                    </div>
                    <!--comments-->
                    <?php echo comments_template(); ?>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="sticky-top pb-5">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>

        <!--fixed reactions-->
        <div class="bg-white position-fixed s-fixed-bottom pb-2 pt-3 px-4 border-radios-10 d-flex">
            <a href="#comments_scroll">

                <svg class="text-secondary cursor-pointer" width="20" height="20" viewBox="0 0 25 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">

                    <path stroke="currentColor"
                          d="M12.877 1C15.3295 1 17.2387 1.11137 18.732 1.39866C20.2202 1.68498 21.2207 2.13251 21.9215 2.75018C23.3136 3.97734 23.877 6.19513 23.877 10.6667C23.877 13.5482 23.6182 15.6685 22.9217 17.0498C22.5874 17.7127 22.164 18.1797 21.6313 18.4903C21.0928 18.8042 20.371 19 19.3772 19C18.096 19 17.1345 19.2877 16.3825 19.7971C15.6486 20.2944 15.2059 20.9455 14.8766 21.4637C14.8268 21.542 14.7802 21.6161 14.736 21.6862C14.4599 22.1245 14.2813 22.4082 14.0332 22.6307C13.8121 22.8291 13.5032 23 12.8772 23C12.2513 23 11.9424 22.8291 11.7213 22.6307C11.4732 22.4081 11.2946 22.1245 11.0185 21.6862C10.9743 21.6161 10.9277 21.542 10.8778 21.4636C10.5485 20.9454 10.1058 20.2944 9.37185 19.7971C8.61993 19.2877 7.65835 19 6.3772 19C5.3887 19 4.66913 18.7993 4.13083 18.4789C3.59659 18.1609 3.17049 17.6832 2.83402 17.0102C2.13502 15.612 1.87695 13.488 1.87695 10.6667C1.87695 6.25195 2.4387 4.02841 3.83557 2.78674C4.53837 2.16203 5.54048 1.70608 7.02679 1.41246C8.5185 1.11777 10.4265 1 12.877 1Z"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path stroke="#6c757d" d="M13.877 9H17.877" stroke-width="1.8"
                          stroke-linecap="round" stroke-linejoin="round"></path>
                    <path stroke="#6c757d" d="M7.87598 13H17.876" stroke-width="1.8"
                          stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>

            </a>

            <span class="fs14 mr-2 text-secondary border-left pl-2"><?php echo get_comments_number(get_the_ID()); ?></span>
            <svg class="text-secondary cursor-pointer mr-2 like <?php is_liked(get_the_ID()); ?>"
                 data-postid="<?php echo get_the_ID(); ?>" width="19" height="19" fill="none"
                 viewBox="0 0 13 11"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke="currentColor"
                      d="M3.95035 1.229C4.81955 1.229 5.61243 1.66166 6.21284 2.15457C6.81326 1.66166 7.60614 1.229 8.47534 1.229C10.3497 1.229 11.8691 2.62275 11.8691 4.34192C11.8691 7.80824 7.92382 9.82702 6.62321 10.3984C6.36123 10.5134 6.06445 10.5134 5.80248 10.3984C4.50187 9.827 0.556602 7.80816 0.556602 4.34184C0.556602 2.62267 2.07603 1.229 3.95035 1.229Z"
                      stroke-width="0.761705"></path>
            </svg>
            <span class="fs14 mr-2 text-secondary border-left pl-2"><?php echo get_post_likes(get_the_ID()); ?></span>
            <?php $user_save_class = is_user_logged_in() ? 'save-post' : 'save-post-guest'; ?>
            <svg class="text-secondary cursor-pointer mr-2 <?php echo $user_save_class . ' ';
            is_saved(get_the_ID()) ?>" width="17"
                 height="17" fill="none" viewBox="0 0 10 12"
                 data-postid="<?php echo get_the_ID(); ?>">
                <path stroke="currentColor"
                      d="M2.51974 10.651L2.51972 10.651L2.51551 10.654C2.00961 11.009 1.31115 10.6877 1.26272 10.0631C1.20578 9.32899 1.12994 7.98392 1.12995 6.02793V5.99265V5.99264C1.12994 5.21616 1.13036 4.53967 1.18575 3.97518C1.24191 3.40288 1.35849 2.89041 1.62915 2.47298C2.19514 1.60008 3.28533 1.34809 4.99817 1.34104C6.71301 1.33397 7.80474 1.58477 8.37131 2.46321C8.64158 2.88225 8.75804 3.39711 8.81416 3.97134C8.86955 4.538 8.86997 5.21625 8.86995 5.993V6.02794C8.86995 7.98392 8.7941 9.32899 8.73716 10.0631C8.68873 10.6877 7.99029 11.009 7.48439 10.654L7.48441 10.654L7.48016 10.651C7.03638 10.3475 6.6257 10.0207 6.30567 9.76593L6.29989 9.76133C6.15447 9.64555 6.02249 9.54047 5.91897 9.46373C5.7247 9.31973 5.56248 9.2214 5.41218 9.16087C5.24859 9.095 5.11648 9.08089 4.99995 9.08089C4.88342 9.08089 4.75131 9.095 4.58772 9.16088C4.43742 9.2214 4.2752 9.31973 4.08093 9.46373C3.97737 9.54049 3.8453 9.64565 3.69982 9.76147L3.69423 9.76592C3.3742 10.0207 2.96352 10.3475 2.51974 10.651Z"
                      stroke-width="0.86" stroke-linecap="round" stroke-linejoin="round"></path>
                <path stroke="currentColor"
                      d="M5.86 3.06262C6.29 3.06262 6.505 3.06099 6.8275 3.38265C7.15 3.70432 7.15 4.78095 7.15 5.21094"
                      stroke-width="0.86" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </div>
    <?php
    endwhile;
endif;
wp_reset_postdata();

get_template_part('templates/footer');
get_footer();
