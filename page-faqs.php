<?php
get_header();
get_template_part( 'templates/single-header', null, array( 'سوالات متداول', 1 ) );
?>
    <!--content-->
    <div class="container mt-5 pt-4">
        <!--faq-->
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6">
				<?php
				$faqs_args  = array(
					'post_type'      => 'faqs',
					'post_status'    => 'publish',
					'offset'         => 0,
					'posts_per_page' => get_cmb2_values( 'faq_options', 'offset_count' )
				);
				$faqs_posts = new WP_Query( $faqs_args );
				if ( $faqs_posts->have_posts() ) :
					$counter = 1;
					while ( $faqs_posts->have_posts() ) : $faqs_posts->the_post();
						?>
                        <div class="accordion text-right" id="accordionExample">
                            <div class="card mt-3">
                                <div class="card-header bg-Purple-light faq-box" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-right" type="button"
                                                data-toggle="collapse"
                                                data-target="#collapse<?php echo $counter; ?>" aria-expanded="true"
                                                aria-controls="collapse<?php echo $counter; ?>">
                                            <svg class="ml-2 -ver-8 text-white" width="30" height="30"
                                                 viewBox="0 0 19 19"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect fill="currentColor" opacity="0.4" width="19" height="19"
                                                      rx="6"></rect>
                                                <path fill="currentColor"
                                                      d="M9.5 4.75C8.7574 4.75 8.14227 5.03635 7.7208 5.5105C7.31228 5.97009 7.125 6.56049 7.125 7.125C7.125 8.11777 7.70613 8.80342 8.084 9.24925L8.10422 9.27311C8.55066 9.80024 8.70833 10.0224 8.70833 10.2917C8.70833 10.7289 9.06277 11.0833 9.5 11.0833C9.93723 11.0833 10.2917 10.7289 10.2917 10.2917C10.2917 9.39426 9.73429 8.74298 9.38019 8.32923C9.35663 8.30171 9.33398 8.27524 9.31245 8.24982C8.89774 7.76016 8.70833 7.48237 8.70833 7.125C8.70833 6.89785 8.78494 6.69658 8.9042 6.56241C9.0105 6.44282 9.18705 6.33333 9.5 6.33333C9.81295 6.33333 9.9895 6.44282 10.0958 6.56241C10.2151 6.69658 10.2917 6.89785 10.2917 7.125C10.2917 7.56223 10.6461 7.91667 11.0833 7.91667C11.5206 7.91667 11.875 7.56223 11.875 7.125C11.875 6.56049 11.6877 5.97009 11.2792 5.5105C10.8577 5.03635 10.2426 4.75 9.5 4.75Z"></path>
                                                <path fill="currentColor"
                                                      d="M9.5 11.875C9.06277 11.875 8.70833 12.2294 8.70833 12.6667C8.70833 13.1039 9.06277 13.4583 9.5 13.4583C9.93723 13.4583 10.2917 13.1039 10.2917 12.6667C10.2917 12.2294 9.93723 11.875 9.5 11.875Z"></path>
                                            </svg>
                                            <span class="font-weight-bold text-white">
                                   <?php the_title(); ?>
                                </span>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?php echo $counter; ?>" class="collapse" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="card-body fs15 text-dark bg-light lh-2">
										<?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php
						$counter ++;
					endwhile;
				endif;
				wp_reset_postdata();
				?>
            </div>
            <div class="col-12 col-md-9 col-lg-6">

				<?php

				$faqs_args2  = array(
					'post_type'   => 'faqs',
					'post_status' => 'publish',
					'offset'      => get_cmb2_values( 'faq_options', 'offset_count' ),
				);
				$faqs_posts2 = new WP_Query( $faqs_args2 );
				if ( $faqs_posts2->have_posts() ) :
					$counter = 1 . 'b';
					while ( $faqs_posts2->have_posts() ) : $faqs_posts2->the_post();
						?>
                        <div class="accordion text-right" id="accordionExample">
                            <div class="card mt-3">
                                <div class="card-header bg-Purple-light faq-box" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-right" type="button"
                                                data-toggle="collapse"
                                                data-target="#collapse<?php echo $counter; ?>" aria-expanded="true"
                                                aria-controls="collapse<?php echo $counter; ?>">
                                            <svg class="ml-2 -ver-8 text-white" width="30" height="30"
                                                 viewBox="0 0 19 19"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect fill="currentColor" opacity="0.4" width="19" height="19"
                                                      rx="6"></rect>
                                                <path fill="currentColor"
                                                      d="M9.5 4.75C8.7574 4.75 8.14227 5.03635 7.7208 5.5105C7.31228 5.97009 7.125 6.56049 7.125 7.125C7.125 8.11777 7.70613 8.80342 8.084 9.24925L8.10422 9.27311C8.55066 9.80024 8.70833 10.0224 8.70833 10.2917C8.70833 10.7289 9.06277 11.0833 9.5 11.0833C9.93723 11.0833 10.2917 10.7289 10.2917 10.2917C10.2917 9.39426 9.73429 8.74298 9.38019 8.32923C9.35663 8.30171 9.33398 8.27524 9.31245 8.24982C8.89774 7.76016 8.70833 7.48237 8.70833 7.125C8.70833 6.89785 8.78494 6.69658 8.9042 6.56241C9.0105 6.44282 9.18705 6.33333 9.5 6.33333C9.81295 6.33333 9.9895 6.44282 10.0958 6.56241C10.2151 6.69658 10.2917 6.89785 10.2917 7.125C10.2917 7.56223 10.6461 7.91667 11.0833 7.91667C11.5206 7.91667 11.875 7.56223 11.875 7.125C11.875 6.56049 11.6877 5.97009 11.2792 5.5105C10.8577 5.03635 10.2426 4.75 9.5 4.75Z"></path>
                                                <path fill="currentColor"
                                                      d="M9.5 11.875C9.06277 11.875 8.70833 12.2294 8.70833 12.6667C8.70833 13.1039 9.06277 13.4583 9.5 13.4583C9.93723 13.4583 10.2917 13.1039 10.2917 12.6667C10.2917 12.2294 9.93723 11.875 9.5 11.875Z"></path>
                                            </svg>
                                            <span class="font-weight-bold text-white">
                                   <?php the_title(); ?>
                                </span>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?php echo $counter; ?>" class="collapse" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="card-body fs15 text-dark bg-light lh-2">
										<?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php
						$counter ++;
					endwhile;
				endif;
				wp_reset_postdata();
				?>
            </div>

        </div>
    </div>
   <?php get_template_part('templates/most-view-posts') ?>
    <div class="mt-10"></div>
<?php
get_template_part( 'templates/footer' );
get_footer();