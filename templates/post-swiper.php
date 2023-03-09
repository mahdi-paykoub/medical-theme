<div class="parent-mv-box bg-white border-radios-10 p-4">
    <a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="border-radios-10 object-cover wp-he-img" width="100%"
             alt="<?php the_title(); ?>"
             title="<?php the_title(); ?>">
    </a>
    <!--date & category-->
    <div class="mt-3">
        <svg class="text-orange-dark -ver-4" width="18" height="18" viewBox="0 0 24 24"
             fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12.1792 23.9333C2.54046 23.9333 0.474609 21.8674 0.474609 12.2287C0.474609 2.59002 2.54046 0.52417 12.1792 0.52417C21.8178 0.52417 23.8837 2.59002 23.8837 12.2287C23.8837 21.8674 21.8178 23.9333 12.1792 23.9333ZM11.2038 6.37644C11.2038 5.83773 11.6405 5.40106 12.1792 5.40106C12.7178 5.40106 13.1545 5.83773 13.1545 6.37644V11.2533H18.0314C18.5701 11.2533 19.0068 11.69 19.0068 12.2287C19.0068 12.7674 18.5701 13.2041 18.0314 13.2041H12.1792C11.6405 13.2041 11.2038 12.7674 11.2038 12.2287V6.37644Z"
                  fill="currentColor"></path>
        </svg>
        <span class="mr-1 fs15 text-orange-dark"><?php echo get_the_date();?></span>

        <svg class="mr-4 text-orange-dark -ver-4" width="18" height="17"
             viewBox="0 0 23 22"
             fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M11.7915 11.0486C11.292 11.0486 10.887 11.4535 10.887 11.9531C10.887 12.4526 11.2919 12.8575 11.7915 12.8575L15.4209 12.8575C15.9205 12.8575 16.3254 12.4526 16.3254 11.9531C16.3254 11.4535 15.9205 11.0486 15.4209 11.0486L11.7915 11.0486ZM8.16228 14.6788C7.66276 14.6788 7.25781 15.0838 7.25781 15.5833C7.25781 16.0828 7.66276 16.4878 8.16228 16.4878L15.4212 16.4878C15.9207 16.4878 16.3257 16.0828 16.3257 15.5833C16.3257 15.0838 15.9207 14.6788 15.4212 14.6788L8.16228 14.6788Z"
                  fill="currentColor"></path>
            <path d="M16.3021 4.92382C15.3306 4.83267 14.2064 4.79518 12.9123 4.79518C4.92001 4.79518 3.00712 6.22507 2.07443 12.8965C1.93217 13.9141 1.84681 14.8097 1.83266 15.597M16.3021 4.92382C21.3305 5.39564 22.2667 7.30528 21.4851 12.8965C20.5524 19.568 18.6395 20.9979 10.6472 20.9979C3.87388 20.9979 1.75406 19.9709 1.83266 15.597M16.3021 4.92382C16.3021 4.92382 16.4398 4.09117 16.3021 2.99488C15.963 0.294405 4.81796 0.647123 3.63956 2.99488C1.83233 6.59543 1.83266 15.597 1.83266 15.597"
                  stroke="currentColor" stroke-width="1.80894" stroke-linecap="round"
                  stroke-linejoin="round"></path>
        </svg>

        <span class="mr-1 text-orange-dark fs15"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></span>
    </div>
    <!--title-->
    <h5 class="mt-3 pl-2">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
           class="font-weight-bold text-Purple-dark w-space lh-1-6 fs22">
			<?php echo get_the_title(); ?>
        </a>
    </h5>
    <div class="text-justify fs14 pl-2">
		<?php echo get_the_excerpt(); ?>
    </div>
</div>