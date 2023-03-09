<?php
if ( post_password_required() ) {
	return;
}
?>
<div class="row mt-5 mb-5 border-top">
    <div class="col-6 pt-5" id="comments_scroll">
        <h4 class="fs28 font-weight-bold text-Purple-dark comment-count position-relative pb-3">
            <span class="fs22"><?php echo( get_comment_count( get_the_ID() )['approved'] ); ?></span>
            دیدگاه و
            پرسش</h4>
    </div>
    <div class="col-6 text-left pt-5">
        <a href="#send_comment_scroll">
            <button class="btn btn-outline-primary fs15">افزودن پرسش جدید
                <svg class="mr-1 -ver-8" width="25" height="25" viewBox="0 0 25 25" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke="currentColor" opacity="0.5"
                          d="M4.75 12.5C4.75 14.2328 4.84383 15.5741 5.07592 16.6184C5.30612 17.6543 5.66226 18.3514 6.15542 18.8446C6.64859 19.3377 7.34575 19.6939 8.38157 19.9241C9.4259 20.1562 10.7672 20.25 12.5 20.25C14.2328 20.25 15.5741 20.1562 16.6184 19.9241C17.6543 19.6939 18.3514 19.3377 18.8446 18.8446C19.3377 18.3514 19.6939 17.6543 19.9241 16.6184C20.1562 15.5741 20.25 14.2328 20.25 12.5C20.25 10.7672 20.1562 9.4259 19.9241 8.38157C19.6939 7.34575 19.3377 6.64859 18.8446 6.15542C18.3514 5.66226 17.6543 5.30613 16.6184 5.07592C15.5741 4.84383 14.2328 4.75 12.5 4.75C10.7672 4.75 9.4259 4.84383 8.38157 5.07592C7.34575 5.30613 6.64859 5.66226 6.15542 6.15542C5.66226 6.64859 5.30612 7.34575 5.07592 8.38157C4.84383 9.4259 4.75 10.7672 4.75 12.5Z"
                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path stroke="currentColor" opacity="0.5"
                          d="M7.01992 17.9803C8.24521 19.2055 9.25998 20.0876 10.1626 20.662C11.0578 21.2316 11.8026 21.4728 12.5 21.4728C13.1974 21.4728 13.9422 21.2316 14.8374 20.662C15.74 20.0876 16.7548 19.2055 17.9801 17.9803C19.2054 16.755 20.0874 15.7402 20.6618 14.8376C21.2314 13.9424 21.4726 13.1976 21.4726 12.5002C21.4726 11.8027 21.2314 11.058 20.6618 10.1627C20.0874 9.26017 19.2054 8.24539 17.9801 7.0201C16.7548 5.79482 15.74 4.91274 14.8374 4.33839C13.9422 3.76874 13.1974 3.5276 12.5 3.5276C11.8026 3.5276 11.0578 3.76874 10.1626 4.33839C9.25998 4.91274 8.24521 5.79482 7.01992 7.0201C5.79463 8.24539 4.91255 9.26017 4.33821 10.1627C3.76856 11.058 3.52741 11.8027 3.52741 12.5002C3.52741 13.1976 3.76856 13.9424 4.33821 14.8376C4.91255 15.7402 5.79463 16.755 7.01992 17.9803Z"
                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path stroke="currentColor"
                          d="M9.66699 12.4997H12.5003M15.3337 12.4997H12.5003M12.5003 12.4997V9.66634V15.333"
                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
        </a>
    </div>
	<?php
	$comments = get_comments( array(
		'post_id' => get_the_ID(),
		'parent'  => 0
	) );

	if ( $comments ):
		foreach ( $comments as $comment ):
			?>
            <div class="col-12">
                <div class="s-comment-p p-2 pb-4 mt-4 border-radios-10">
                    <div class="comment-author mt-3 mr-3 d-flex">
                        <img src="<?php echo FILE_URI; ?>/assets/img/download31.jpg"
                             class="border-radios-10" alt="<?php echo comment_author(); ?>"
                             title="<?php echo comment_author(); ?>" height="70" width="70">
                        <div class="">
                            <div class=" font-weight-bold text-Purple-dark mr-3 mt-1">
								<?php echo comment_author(); ?>
                            </div>
                            <div class="fs14 mt-2 mr-3 text-Purple-light">
								<?php echo comment_date(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 text-dark fs15 text-justify lh-2 px-3">
						<?php
						echo $comment->comment_content;
						?>
                    </div>
                </div>
            </div>
			<?php
			$comment_childs = get_comments( array(
				'parent'       => get_comment_ID(),
				'hierarchical' => true,
			) );
			if ( $comment_childs ):
				foreach ( $comment_childs as $comment_child ):
					?>
                    <div class="col-11 mr-auto">
                        <div class="s-comment-p p-2 pb-4 mt-4 border-radios-10">
                            <div class="comment-author mt-3 mr-3 d-flex">
                                <img src="<?php echo FILE_URI; ?>/assets/img/download31.jpg"
                                     class="border-radios-10" title="<?php echo comment_author(); ?>"
                                     alt="<?php echo comment_author(); ?>" height="70" width="70">
                                <div class="">
                                    <div class=" font-weight-bold text-Purple-dark mr-3 mt-1">
										<?php echo comment_author(); ?>
                                    </div>
                                    <div class="fs14 mt-2 mr-3 text-Purple-light">
										<?php echo get_comment_date(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 text-dark fs15 text-justify lh-2 px-3">
								<?php
								echo $comment->comment_content;
								?>
                            </div>
                        </div>
                    </div>
				<?php
				endforeach;
			endif;
			?>

		<?php endforeach; ?>
        <div class="col-12 mt-4">
            <button class="btn btn-primary bg-Purple-light fs15 px-4 py-2">مشاهده نظرات بیشتر ...</button>
        </div>
	<?php else: ?>
        <div class="mt-5 text-center w-100">
            <div class="text-center">
                <svg width="54" height="54" viewBox="0 0 54 54" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M27 0C49.2345 0 54 4.00008 54 24C54 37.0001 51.7506 45 41.6256 45C36.2147 45 34.6052 47.5703 33.1064 49.9638C31.8006 52.0491 30.5789 54.0001 27.0006 54C23.4225 53.9999 22.2007 52.049 20.8949 49.9638C19.3961 47.5703 17.7865 45 12.3756 45C2.25055 45 0 36.7442 0 24C0 4.23601 4.7655 0 27 0ZM49.5 24C49.5 13.878 48.1565 9.89799 45.8623 7.87579C44.6944 6.84628 42.8722 5.95738 39.7488 5.35647C36.6026 4.75117 32.4778 4.5 27 4.5C21.5316 4.5 17.4124 4.76523 14.2732 5.38537C11.1583 6.00072 9.32897 6.90538 8.1517 7.95184C5.83648 10.0098 4.5 14.0158 4.5 24C4.5 30.3241 5.09867 34.632 6.41592 37.2668C7.01586 38.4668 7.70279 39.1862 8.47207 39.6441C9.25959 40.1128 10.4585 40.5 12.3756 40.5C15.6095 40.5 18.2372 41.232 20.3756 42.6808C22.433 44.0748 23.6339 45.8794 24.4009 47.0862L24.7092 47.5722C25.3722 48.6189 25.5918 48.9656 25.9024 49.2444L25.9146 49.256C25.9799 49.3197 26.1644 49.5 27.0007 49.5C27.8371 49.5 28.0216 49.3197 28.0867 49.2561L28.0989 49.2445C28.4096 48.9657 28.6291 48.6191 29.2923 47.572L29.6003 47.0864C30.3672 45.8797 31.5681 44.0749 33.6255 42.6809C35.7638 41.232 38.3916 40.5 41.6256 40.5C43.5662 40.5 44.7756 40.119 45.564 39.6594C46.3265 39.2148 47.0012 38.5197 47.5916 37.3489C48.8981 34.7581 49.5 30.4669 49.5 24Z"
                          fill="#E0E3EA"></path>
                    <path d="M31.5 15.75C30.2573 15.75 29.25 16.7573 29.25 18C29.25 19.2427 30.2573 20.25 31.5 20.25H38.25C39.4927 20.25 40.5 19.2427 40.5 18C40.5 16.7573 39.4927 15.75 38.25 15.75H31.5Z"
                          fill="#A2ACBF"></path>
                    <path d="M15.75 24.75C14.5073 24.75 13.5 25.7573 13.5 27C13.5 28.2427 14.5073 29.25 15.75 29.25H38.25C39.4927 29.25 40.5 28.2427 40.5 27C40.5 25.7573 39.4927 24.75 38.25 24.75H15.75Z"
                          fill="#A2ACBF"></path>
                </svg>
            </div>
            <div><span class="text-secondary font-weight-bold">هنوز دیدگاهی ثبت‌ نشده</span></div>
        </div>
	<?php endif; ?>
    <!--send form comment-->
    <div class="col-12 pt-5" id="send_comment_scroll">
        <div class="s-comment-p p-2 pb-4 px-4">
            <div class="mt-3 fs22 font-weight-bold text-Purple-dark comment-count position-relative pb-3">
                ارسال دیدگاه
            </div>
            <div class="row mt-4">
				<?php if ( is_user_logged_in() ): ?>
                    <div class="col-12 mt-3">
						<?php
						$comments_args = array(
							'fields'               => array(
								'cookies' => ''
							),
							'class_container'      => '',
							'class_submit'         => 'btn btn-primary bg-Purple-light fs15 px-4 py-2 mt-4',
							'comment_field'        => '<input id="comment" name="comment" type="text" class="comment-single w-100 border-radios-10 p-4" placeholder="نظر شما ...">',
							'label_submit'         => 'ارسال دیدگاه',
							'title_reply'          => '',
							'comment_notes_before' => '',
							'comment_notes_after'  => ''
						);
						comment_form( $comments_args, get_the_ID() ); ?>
                    </div>
				<?php else: ?>
                    <div class="col-12">
                        <div class="w-100 p-4 bg-warning border-radios-10 text-white">
                            <div class="row">
                                <div class="col-12 col-md-10 text-md-right text-center">
                                    <svg class="-ver-4 ml-1" width="21" height="22" viewBox="0 0 21 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor"
                                              d="M0 17.4167C0 21.191 1.77971 22 10.0833 22C18.387 22 20.1667 21.191 20.1667 17.4167C20.1667 13.6423 18.387 12.8333 10.0833 12.8333C1.77971 12.8333 0 13.6423 0 17.4167Z"></path>
                                        <path fill="currentColor"
                                              d="M4.58333 5.5C4.58333 8.53757 7.04577 11 10.0833 11C13.1209 11 15.5833 8.53757 15.5833 5.5C15.5833 2.46243 13.1209 0 10.0833 0C7.04577 0 4.58333 2.46243 4.58333 5.5Z"></path>
                                    </svg>
                                    برای ارسال دیدگاه لازم است وارد شوید
                                </div>
                                <div class="col-12 col-md-2 text-md-left text-center mt-4 mt-md-0">
                                    <a href="<?php echo home_url(); ?>/index.php/login" class="text-white mr-auto">
                                        ورود
                                        <svg class="-ver-1 mr-1" width="18" height="12" viewBox="0 0 18 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" opacity="0.4"
                                                  d="M12.7975 4.80957L16.4967 4.48242C17.3269 4.48242 18 5.16206 18 6.00032C18 6.83858 17.3269 7.51822 16.4967 7.51822L12.7975 7.19107C12.1463 7.19107 11.6183 6.65793 11.6183 6.00032C11.6183 5.34161 12.1463 4.80957 12.7975 4.80957Z"></path>
                                            <path fill="currentColor"
                                                  d="M0.37534 4.86984C0.433157 4.81146 0.649155 4.56471 0.852061 4.35983C2.03568 3.07656 5.12619 0.978153 6.7429 0.335965C6.98835 0.233523 7.60907 0.0154213 7.94179 0C8.25924 0 8.56251 0.0738021 8.8516 0.219203C9.21269 0.422985 9.50068 0.74463 9.65995 1.12355C9.76141 1.38572 9.92068 2.17331 9.92068 2.18763C10.0789 3.04792 10.165 4.44685 10.165 5.99339C10.165 7.46503 10.0789 8.80668 9.94904 9.68129C9.93486 9.69671 9.77559 10.6738 9.60214 11.0086C9.28469 11.6211 8.66397 12 7.99961 12H7.94179C7.50871 11.9857 6.5989 11.6057 6.5989 11.5924C5.06837 10.9502 2.05096 8.95319 0.837879 7.62585C0.837879 7.62585 0.495338 7.28438 0.346976 7.07178C0.115706 6.76556 7.15256e-05 6.38663 7.15256e-05 6.00771C7.15256e-05 5.58473 0.129888 5.19148 0.37534 4.86984Z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
</div>