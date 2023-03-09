<!--top menu-->
<div class="container-fluid">
    <!--search fixed-->
    <form role="search" id="search-query" method="get" action="<?php echo home_url(); ?>">
        <div class="fixed-top w-100 p-4 bg-white top-search-p align-items-center d-flex text-center">
            <input type="text" name="s" class="w-75 border-0 out-l-n mr-0 mr-md-5" placeholder="دنبال پی میگیردی؟">
            <svg class="mx-auto close-bnt-s cursor-pointer" width="18" height="18" viewBox="0 0 18 18" fill="#6c757d"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M16 2L9 9M9 9L2 16M9 9L16 16M9 9L2 2" stroke="#6c757d" stroke-width="2.88235"
                      stroke-linecap="round"
                      stroke-linejoin="round"></path>
            </svg>
        </div>
    </form>
    <div class="row">
        <div class="col-12">
            <div class="top-menu-box w-100 d-flex mt-3">
                <!--left-->
                <div class="hamburger d-lg-none mr-3 cursor-pointer">
                    <svg width="28" class="text-biscay-700 dark:text-white" height="28" viewBox="0 0 24 18"
                         fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2.5H21.5M2 9H21.5M2 15.5H21.5" stroke="currentColor" stroke-width="3.65625"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <div class="left-menu mr-auto mr-lg-0">
                    <div class="d-flex">
                        <div class="logo-parent">
                            <a href="<?php echo home_url(); ?>" title="">
                                <img src="<?php echo FILE_URI; ?>/assets/img/14.png"
                                     class="" alt="" title="">
                            </a>
                        </div>
                        <div class="links-parent">
                            <!--close btn-->
                            <div class="d-lg-none text-left ml-3 mt-3">
                                <svg class="close-btn cursor-pointer" width="18" height="18" viewBox="0 0 18 18"
                                     fill="none">
                                    <path d="M16 2L9 9M9 9L2 16M9 9L16 16M9 9L2 2" stroke="#353F53"
                                          stroke-width="2.88235" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <!--logo-->
                            <div class="text-center d-lg-none mt-2 logo-parent">
                                <a href="<?php echo home_url(); ?>" title="">
                                    <img src="<?php echo FILE_URI; ?>/assets/img/14.png"
                                         width="70" height="70" alt="" title="">
                                </a>
                            </div>
                            <!--search box-->
                            <div class="parent-sm-search mx-3 my-3 d-lg-none">
                                <form action="" class="my-3">
                                    <input type="text"
                                           class="search-sm-inp border-radios-10 border-0 w-100 fs15 pr-2"
                                           placeholder="دنبال چی میگردی؟">
                                </form>
                            </div>
							<?php
							wp_nav_menu( array(
								'theme_location' => 'to-header-menu'
							) );
							?>
                            <!--<nav>
								<ul>
									<li><a href="" title="asxasxasxasx">بیماری</a></li>
									<li><a href="" title="">بیماری</a></li>
									<li>
										<a href="" title="">بیماری</a>
										<ul>
											<li><a href="" title="">زیر منو</a></li>
											<li><a href="" title="">زیر منو</a></li>
											<li><a href="" title="">زیر منو</a></li>
											<li><a href="" title="">زیر منو</a></li>
											<li><a href="" title="">زیر منو</a></li>
											<li><a href="" title="">زیر منو</a></li>
										</ul>
									</li>
									<li>
										<a href="" title="">بیماری</a>
										<ul>
											<li><a href="" title="">زیر منو</a></li>
											<li><a href="" title="">زیر منو</a></li>
											<li><a href="" title="">زیر منو</a></li>
											<li><a href="" title="">زیر منو</a></li>
											<li><a href="" title="">زیر منو</a></li>
											<li><a href="" title="">زیر منو</a></li>
										</ul>
									</li>
									<li><a href="" title="">بیماری</a></li>
								</ul>
							</nav>-->
                        </div>
                    </div>
                </div>
                <!--right-->
				<?php
				if ( is_user_logged_in() ):
				?>
                <div class="mr-auto mt-4 ml-4">
					<?php
					else:
					?>
                    <div class="mr-auto mt-4-5 ml-4">
						<?php
						endif;
						?>
                        <!--search-->
                        <svg class="ml-3 -ver-7 cursor-pointer text-secondary d-none d-lg-inline" width="20"
                             height="20"
                             viewBox="0 0 16 17" fill="none">
                            <circle cx="7.82495" cy="7.82492" r="6.74142" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></circle>
                            <path d="M12.5137 12.8638L15.1568 15.4999" stroke="currentColor" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>

						<?php
						if ( is_user_logged_in() ):
							?>

                            <img src="<?php display_user_image( get_current_user_id() ); ?>"
                                 class="rounded-circle cursor-pointer border object-cover img-top-header-profile"
                                 width="55"
                                 height="55" alt="">

                            <div class="position-absolute px-4 py-3 box-for-top-menu border-radios-10 border display-none">
                                <div>
                                    <a href="<?php echo home_url() . '/index.php/user-profile' ?>"
                                       class="fs14 text-dark">
                                        <svg class="-ver-8 ml-2" width="22" height="23" viewBox="0 0 22 23" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <circle opacity="0.15" cx="12.8062" cy="13.2944" r="9.19385"
                                                    fill="#E81C4D"></circle>
                                            <path d="M0.785 3.66683C0.785 4.40379 0.825512 4.94242 0.914603 5.34329C1.00171 5.73525 1.12449 5.94578 1.2561 6.0774C1.38771 6.20901 1.59824 6.33178 1.9902 6.41889C2.39108 6.50798 2.92971 6.5485 3.66667 6.5485C4.40363 6.5485 4.94226 6.50798 5.34313 6.41889C5.73509 6.33178 5.94562 6.20901 6.07723 6.0774C6.20885 5.94578 6.33162 5.73525 6.41873 5.34329C6.50782 4.94242 6.54833 4.40379 6.54833 3.66683C6.54833 2.92987 6.50782 2.39124 6.41873 1.99037C6.33162 1.59841 6.20885 1.38788 6.07723 1.25626C5.94562 1.12465 5.73509 1.00188 5.34313 0.914766C4.94226 0.825675 4.40363 0.785163 3.66667 0.785163C2.92971 0.785163 2.39108 0.825675 1.9902 0.914766C1.59824 1.00188 1.38771 1.12465 1.2561 1.25626C1.12449 1.38788 1.00171 1.59841 0.914603 1.99037C0.825512 2.39124 0.785 2.92987 0.785 3.66683Z"
                                                  stroke="#E81C4D" stroke-width="1.57" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                            <path d="M0.785 12.3333C0.785 13.0703 0.825512 13.6089 0.914603 14.0098C1.00171 14.4018 1.12449 14.6123 1.2561 14.7439C1.38771 14.8755 1.59824 14.9983 1.9902 15.0854C2.39108 15.1745 2.92971 15.215 3.66667 15.215C4.40363 15.215 4.94226 15.1745 5.34313 15.0854C5.73509 14.9983 5.94562 14.8755 6.07723 14.7439C6.20885 14.6123 6.33162 14.4018 6.41873 14.0098C6.50782 13.6089 6.54833 13.0703 6.54833 12.3333C6.54833 11.5964 6.50782 11.0577 6.41873 10.6569C6.33162 10.2649 6.20885 10.0544 6.07723 9.92277C5.94562 9.79115 5.73509 9.66838 5.34313 9.58127C4.94226 9.49218 4.40363 9.45167 3.66667 9.45167C2.92971 9.45167 2.39108 9.49218 1.9902 9.58127C1.59824 9.66838 1.38771 9.79115 1.2561 9.92277C1.12449 10.0544 1.00171 10.2649 0.914603 10.6569C0.825512 11.0577 0.785 11.5964 0.785 12.3333Z"
                                                  stroke="#E81C4D" stroke-width="1.57" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                            <path d="M9.45163 12.3333C9.45163 13.0703 9.49214 13.6089 9.58123 14.0098C9.66834 14.4018 9.79111 14.6123 9.92273 14.7439C10.0543 14.8755 10.2649 14.9983 10.6568 15.0854C11.0577 15.1745 11.5963 15.215 12.3333 15.215C13.0702 15.215 13.6089 15.1745 14.0098 15.0854C14.4017 14.9983 14.6122 14.8755 14.7439 14.7439C14.8755 14.6123 14.9982 14.4018 15.0854 14.0098C15.1744 13.6089 15.215 13.0703 15.215 12.3333C15.215 11.5964 15.1744 11.0577 15.0854 10.6569C14.9982 10.2649 14.8755 10.0544 14.7439 9.92277C14.6122 9.79115 14.4017 9.66838 14.0098 9.58127C13.6089 9.49218 13.0702 9.45167 12.3333 9.45167C11.5963 9.45167 11.0577 9.49218 10.6568 9.58127C10.2649 9.66838 10.0543 9.79115 9.92273 9.92277C9.79111 10.0544 9.66834 10.2649 9.58123 10.6569C9.49214 11.0577 9.45163 11.5964 9.45163 12.3333Z"
                                                  stroke="#E81C4D" stroke-width="1.57" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                            <path d="M12.3333 1.3335V3.66683M12.3333 6.00016V3.66683M12.3333 3.66683H14.6667H10"
                                                  stroke="#E81C4D" stroke-width="1.57" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                        </svg>
                                        مشاهده پروفایل
                                    </a>
                                </div>
                                <div class="mt-4">
                                    <a href="<?php echo wp_logout_url( home_url() ); ?>" title="Logout"
                                       class="">
                                        <svg class="-ver-7 ml-2" width="20" height="20" viewBox="0 0 20 20"
                                             fill="#3B82F6" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#3B82F6" opacity="0.4"
                                                  d="M0 4.447C0 1.996 2.03024 0 4.52453 0H9.48564C11.9748 0 14 1.99 14 4.437V15.553C14 18.005 11.9698 20 9.47445 20H4.51537C2.02515 20 0 18.01 0 15.563V14.623V4.447Z"></path>
                                            <path fill="#3B82F6"
                                                  d="M19.7789 9.45504L16.9331 6.54604C16.639 6.24604 16.1657 6.24604 15.8725 6.54804C15.5803 6.85004 15.5813 7.33704 15.8745 7.63704L17.4337 9.23004H15.9387H7.54844C7.13452 9.23004 6.79852 9.57504 6.79852 10C6.79852 10.426 7.13452 10.77 7.54844 10.77H17.4337L15.8745 12.363C15.5813 12.663 15.5803 13.15 15.8725 13.452C16.0196 13.603 16.2114 13.679 16.4043 13.679C16.5952 13.679 16.787 13.603 16.9331 13.454L19.7789 10.546C19.9201 10.401 20 10.205 20 10C20 9.79604 19.9201 9.60004 19.7789 9.45504Z"></path>
                                        </svg>
                                         <span class="font-weight-bold fs14  text-secondary">خروج از حساب</span>
                                    </a>
                                </div>
                            </div>
						<?php else: ?>
                            <a href="<?php echo home_url() . '/index.php/login' ?>" title=""
                               class="fs16 register-login-btn border-radios-10 text-white">
                                <span class="d-none d-lg-inline">ورود|عضویت</span>
                                <svg class="-ver-4 ml-1" width="23" height="15" viewBox="0 0 23 15" fill="#fff">
                                    <path d="M1.16786 6.02753C1.23926 5.95544 1.50598 5.65076 1.75653 5.39776C3.21811 3.81313 7.03437 1.22195 9.03073 0.428959C9.33382 0.302461 10.1003 0.0331419 10.5112 0.0140991C10.9032 0.0140991 11.2776 0.105232 11.6346 0.284778C12.0805 0.536415 12.4361 0.933592 12.6328 1.4015C12.7581 1.72523 12.9548 2.69777 12.9548 2.71545C13.1501 3.77776 13.2565 5.50521 13.2565 7.41493C13.2565 9.23215 13.1501 10.8889 12.9898 11.9689C12.9723 11.9879 12.7756 13.1944 12.5614 13.6079C12.1694 14.3642 11.4029 14.8321 10.5826 14.8321H10.5112C9.97638 14.8144 8.85292 14.3451 8.85292 14.3288C6.96297 13.5358 3.23697 11.0698 1.73902 9.43074C1.73902 9.43074 1.31604 9.00908 1.13284 8.74656C0.84726 8.36843 0.70447 7.90052 0.70447 7.43261C0.70447 6.9103 0.864772 6.42471 1.16786 6.02753"></path>
                                </svg>
                            </a>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>