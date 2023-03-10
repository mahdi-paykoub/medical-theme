<!--last posts-->
<div class="s-comment-p py-4">
    <div class="font-weight-bold text-Purple-dark mr-2 mr-md-3 comment-count position-relative pb-3">
        پست های اخیر
    </div>
    <?php
    $newest = array(
        'post_type' => array('post'),
        'post_status' => 'publish',
        'posts_per_page' => 3
    );
    $new_posts = new WP_Query($newest);
    if ($new_posts->have_posts()) :
        while ($new_posts->have_posts()) : $new_posts->the_post();
            ?>
            <div class="mt-4 d-flex">
                <a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'small_for_sidebar'); ?>"
                         class="object-cover border-radios-10 mr-2 mr-md-3" width="130"
                         height="100" alt="<?php echo get_the_title(); ?>"
                         title="<?php echo get_the_title(); ?>">
                </a>
                <div class="px-2">
                    <a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
                        <div class="font-weight-bold fs15 text-Purple-dark">
                            <?php echo get_the_title(); ?>
                        </div>
                    </a>

                    <div class="mt-3 mt-lg-1">
                        <svg class="ml-1 text-orange-dark -ver-7" width="21" height="21"
                             viewBox="0 0 24 24"
                             fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63449 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z"
                                  stroke="currentColor" stroke-width="1.8"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M15.391 14.0178L12 11.9948V7.63379" stroke="currentColor"
                                  stroke-width="1.8"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="fs14 text-orange-dark -ver-1"><?php echo get_the_date(); ?></span>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</div>
<!--tags-->
<div class="s-comment-p mt-4 py-4">
    <div class="font-weight-bold text-Purple-dark mr-2 mr-md-3 comment-count position-relative pb-3">
        برچسب ها
    </div>
    <div class="mt-4 px-2">
        <?php
        $tags = wp_get_post_tags(get_the_ID());
        if ($tags) :
            foreach ($tags as $tag) :
                ?>
                <a href="<?php echo get_tag_link($tag); ?>"
                   class="bg-Purple-light p-2 px-3 fs14 d-inline-block text-white border-radios-10 mt-2"><?php echo $tag->name; ?></a>
            <?php endforeach;
        else:
            ?>
            <div class="w-100 p-3 fs14 alert alert-info">تگی وجود ندارد</div>
        <?php
        endif;
        ?>
    </div>
</div>