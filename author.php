<?php
get_header();
get_template_part( 'templates/top-menu' );
global $user;

$curauth = ( isset( $_GET['author_name'] ) ) ? get_user_by( 'slug', $author_name ) : get_userdata( intval( $author ) );

?>
    <div class="container mt-5">
        <div class="p-desc p-3 p-md-5  border-radios-10 position-relative">
            <div class="row">
                <div class="col-12">
                    <div class="position-relative ">
                        <img src="<?php echo FILE_URI; ?>/assets/img/460553.jpg"
                             class="w-100 border-radios-10 object-cover p-h-t author-top-img" alt="">
                        <img src="<?php display_user_image($curauth->ID);?>"
                             class="position-absolute rounded-circle profile-img object-cover wh-pro"
                             alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-5 fs28 font-weight-bold text-Purple-dark pt-5 mr-5">
						<?php echo $curauth->display_name; ?>
                    </div>
                    <div class="mt-4 text-secondary d-inline-block mr-5">
                        <span>ایمیل :</span>
                        <span class="border-left pl-3"><?php echo $curauth->user_email; ?></span>
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
            <div class="col-12 fs28 font-weight-bold text-Purple-light pr-2">
                مقالات
            </div>
			<?php
			$newest    = array(
				'post_type'      => array( 'post' ),
				'post_status'    => 'publish',
				'author'         => $curauth->ID,
			);
			$new_posts = new WP_Query( $newest );
			if ( $new_posts->have_posts() ) :
				while ( $new_posts->have_posts() ) : $new_posts->the_post();
					?>
                    <div class="col-12 col-sm-6 col-md-4 mt-4">
						<?php get_template_part( 'templates/post-box' ) ?>
                    </div>
				<?php
				endwhile;
				?>
			<?php
			else:
				?>
                <div class="col-12 bg-secondary p-4 mt-4 border-radios-10 text-white fs22">
                    پستی از طرف این <?php echo $curauth->display_name; ?> منتشر نشده است
                </div>
			<?php
			endif;
            wp_reset_postdata();
			?>

        </div>
        <!--pagination-->
        <div class="row my-5 py-4">
            <div class="col-12">
                <div class="pagination d-flex justify-content-center">
				    <?php
				    pagination_it( $new_posts );
				    ?>
                </div>
            </div>
        </div>
    </div>
<?php

get_template_part('templates/footer');
get_footer();