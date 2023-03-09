<span class="cast-like-i mr-2 border-radios-5 d-flex py-1 px-2 cursor-pointer">
                                        <svg width="17" height="17"
                                             class="w-4 h-4 mb-0.5 ml-0.5 like <?php is_liked( get_the_ID() ); ?>"
                                             fill="none"
                                             viewBox="0 0 13 11" data-postid="<?php echo get_the_ID(); ?>"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path class="stroke-current transition duration-200 text-red-450 group-hover:text-white"
                                                  d="M3.95035 1.229C4.81955 1.229 5.61243 1.66166 6.21284 2.15457C6.81326 1.66166 7.60614 1.229 8.47534 1.229C10.3497 1.229 11.8691 2.62275 11.8691 4.34192C11.8691 7.80824 7.92382 9.82702 6.62321 10.3984C6.36123 10.5134 6.06445 10.5134 5.80248 10.3984C4.50187 9.827 0.556602 7.80816 0.556602 4.34184C0.556602 2.62267 2.07603 1.229 3.95035 1.229Z"
                                                  stroke="currentColor" stroke-width="0.761705"></path>
                                        </svg>
    <span class="fs12 text-secondary mr-1 mt-1px"><?php echo get_post_likes( get_the_ID() ); ?></span>
</span>