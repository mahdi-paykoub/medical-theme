<div class="p-3 border-radios-10 bg-white related-post-p">
    <a href="<?php the_permalink(); ?>">
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID() , 'size_for_swiper_index'); ?>" class="border-radios-10 object-cover" width="100%"
             alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
        <div class="font-weight-bold text-Purple-dark mt-2"><?php the_title(); ?></div>
    </a>

    <div class="d-flex mt-3 bt-1">
        <div class="d-flex mt-3">
            <!--save template 1-->
			<?php get_template_part( 'templates/save-template-1' ); ?>
            <!--like template 1-->
			<?php get_template_part( 'templates/like-template-1' ); ?>
        </div>
        <div class="mr-auto mt-3">
            <svg class="ml-1 text-primary -ver-1" width="13" height="13" viewBox="0 0 10 10" fill="none"
                 stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path class="fill-current transition duration-200 text-blue-700 group-hover:text-white"
                      fill-rule="evenodd" clip-rule="evenodd" stroke-width="0.433333"
                      d="M5.00525 4.99988C4.77513 4.99988 4.58858 5.18643 4.58858 5.41654C4.58858 5.64666 4.77513 5.83321 5.00525 5.83321L6.67725 5.83321C6.90737 5.83321 7.09392 5.64666 7.09392 5.41654C7.09392 5.18643 6.90737 4.99988 6.67725 4.99988H5.00525ZM3.3335 6.67224C3.10338 6.67224 2.91683 6.85879 2.91683 7.08891C2.91683 7.31903 3.10338 7.50557 3.3335 7.50557L6.6775 7.50557C6.90762 7.50557 7.09416 7.31903 7.09416 7.08891C7.09416 6.85879 6.90762 6.67224 6.6775 6.67224L3.3335 6.67224Z"></path>
                <path class="stroke-current transition duration-200 text-blue-700 group-hover:text-white"
                      d="M7.08323 2.17834C6.6357 2.13634 6.1178 2.11907 5.52165 2.11907C1.83979 2.11907 0.958571 2.77779 0.528906 5.85116C0.46337 6.31993 0.424047 6.73253 0.41753 7.09518M7.08323 2.17834C9.3997 2.39569 9.83099 3.27541 9.47089 5.85116C9.04123 8.92452 8.16001 9.58323 4.47814 9.58323C1.35787 9.58323 0.381319 9.11014 0.41753 7.09518M7.08323 2.17834C7.08323 2.17834 7.14666 1.79476 7.08323 1.28972C6.92699 0.0456842 1.79278 0.208173 1.24992 1.28972C0.417377 2.9484 0.41753 7.09518 0.41753 7.09518"
                      stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span class="fs12 text-primary font-weight-bold">
                <?php $cat = get_the_category();
                echo $cat[0]->cat_name; ?>
            </span>
        </div>
    </div>
</div>