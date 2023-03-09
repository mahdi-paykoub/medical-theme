<?php
get_header();
get_template_part( 'templates/top-menu' );

?>
	<!--new article-->
	<div class="w-100 position-relative mt-5">
		<img src="<?php echo FILE_URI; ?>/assets/img/download10.png"
		     class="position-absolute float-img6 rotation-animation up-down-animation" alt="">
		<img src="<?php echo FILE_URI; ?>/assets/img/download5.png"
		     class="position-absolute float-img23 up-down-animation" alt="">
		<img src="<?php echo FILE_URI; ?>/assets/img/download9.png"
		     class="position-absolute float-img5 up-down-animation" alt="">

		<div class="container">
			<div class="row mt-4">
				<div class="col-12 mb-2">
                <span class="fs28 font-weight-bold text-Purple-dark">
                    <img src="<?php echo FILE_URI; ?>/assets/img/readit.png" width="60" alt="">
                    آرشیو مقالات
                </span>
				</div>
				<div class="col-12 mt-4">
					<div class="box-select-type-p p-desc p-3 border-radios-10">
						<button class="border-0 cursor-pointer border-radios-10 btn-for-t">
							<svg class="-ver-4 ml-2 text-white" width="17" height="20" viewBox="0 0 17 20" fill="none"
							     xmlns="http://www.w3.org/2000/svg">
								<path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
								      d="M5.42574 14.39H10.8119C11.2178 14.39 11.5545 14.05 11.5545 13.64C11.5545 13.23 11.2178 12.9 10.8119 12.9H5.42574C5.0198 12.9 4.68317 13.23 4.68317 13.64C4.68317 14.05 5.0198 14.39 5.42574 14.39ZM8.77228 7.9H5.42574C5.0198 7.9 4.68317 8.24 4.68317 8.65C4.68317 9.06 5.0198 9.39 5.42574 9.39H8.77228C9.17822 9.39 9.51485 9.06 9.51485 8.65C9.51485 8.24 9.17822 7.9 8.77228 7.9ZM15.8381 7.02561C16.0708 7.02292 16.3242 7.02 16.5545 7.02C16.802 7.02 17 7.22 17 7.47V15.51C17 17.99 15.0099 20 12.5545 20H4.67327C2.09901 20 0 17.89 0 15.29V4.51C0 2.03 2 0 4.46535 0H9.75247C10.0099 0 10.2079 0.21 10.2079 0.46V3.68C10.2079 5.51 11.703 7.01 13.5149 7.02C13.9381 7.02 14.3112 7.02316 14.6377 7.02593C14.8917 7.02809 15.1175 7.03 15.3168 7.03C15.4578 7.03 15.6405 7.02789 15.8381 7.02561ZM16.1111 5.566C15.2972 5.569 14.3378 5.566 13.6477 5.559C12.5527 5.559 11.6507 4.648 11.6507 3.542V0.906C11.6507 0.475 12.1685 0.261 12.4646 0.572C13.0004 1.13476 13.7368 1.90834 14.4699 2.67837C15.2009 3.44632 15.9286 4.21074 16.4507 4.759C16.7398 5.062 16.5279 5.565 16.1111 5.566Z"></path>
							</svg>
							جدیدترین
							<span class="fs14">191</span>
						</button>
						<button class="border-0 cursor-pointer border-radios-10 mr-md-4 text-secondary bg-transparent out-l-n mt-4 my-md-0">
							<svg class="-ver-4 ml-2" width="20" height="20" fill="none" viewBox="0 0 13 11"
							     xmlns="http://www.w3.org/2000/svg">
								<path class="stroke-current transition duration-200 text-red-450 group-hover:text-white"
								      d="M3.95035 1.229C4.81955 1.229 5.61243 1.66166 6.21284 2.15457C6.81326 1.66166 7.60614 1.229 8.47534 1.229C10.3497 1.229 11.8691 2.62275 11.8691 4.34192C11.8691 7.80824 7.92382 9.82702 6.62321 10.3984C6.36123 10.5134 6.06445 10.5134 5.80248 10.3984C4.50187 9.827 0.556602 7.80816 0.556602 4.34184C0.556602 2.62267 2.07603 1.229 3.95035 1.229Z"
								      stroke="currentColor" stroke-width="0.761705"></path>
							</svg>
							محبوب ترین
							<span class="fs14">191</span>
						</button>
						<button class="border-radios-10 cursor-pointer border-0 mr-md-4 text-secondary bg-transparent out-l-n mt-4 my-md-0">
							<svg class="-ver-4 ml-2" width="20" height="20" viewBox="0 0 20 20" fill="none"
							     xmlns="http://www.w3.org/2000/svg">
								<path fill="currentColor"
								      d="M11.4498 8.3782C12.6463 9.099 13.2446 9.4594 13.2446 10C13.2446 10.5406 12.6463 10.901 11.4498 11.6218L10.1036 12.4327C8.90703 13.1535 8.30873 13.5139 7.86001 13.2436C7.4113 12.9733 7.4113 12.2525 7.4113 10.8109V9.1891C7.4113 7.74751 7.4113 7.02671 7.86001 6.75641C8.30873 6.48611 8.90702 6.84651 10.1036 7.56731L11.4498 8.3782Z"></path>
								<path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
								      d="M10 20C1.765 20 0 18.235 0 10C0 1.765 1.765 0 10 0C18.235 0 20 1.765 20 10C20 18.235 18.235 20 10 20ZM12.3932 12.9992C12.9177 12.6835 13.4613 12.3563 13.859 12.0269C14.2997 11.6619 14.9113 11.0118 14.9113 10C14.9113 8.98824 14.2997 8.33809 13.859 7.97312C13.4613 7.64368 12.9178 7.31652 12.3933 7.00085L10.8787 6.08847C10.3559 5.77327 9.81146 5.44505 9.33646 5.24928C8.82012 5.03647 7.91194 4.77944 7.00002 5.32876C6.11465 5.86209 5.89412 6.75913 5.81734 7.29873C5.74423 7.81251 5.74442 8.45685 5.74461 9.09275V10.9072C5.74442 11.5431 5.74423 12.1875 5.81734 12.7013C5.89412 13.2409 6.11465 14.1379 7.00002 14.6712C7.91194 15.2206 8.82012 14.9635 9.33646 14.7507C9.81146 14.5549 10.3559 14.2267 10.8787 13.9115L12.3932 12.9992Z"></path>
							</svg>
							پربازدیدترین
							<span class="fs14">191</span>
						</button>

					</div>
				</div>
				<?php
				$newest    = array(
					'post_type'      => array( 'post' ),
					'post_status'    => 'publish',
					'order'          => 'DESC',
				);
				$new_posts = new WP_Query( $newest );
				if ( $new_posts->have_posts() ) :
					while ( $new_posts->have_posts() ) : $new_posts->the_post();
						?>
						<div class="col-12 col-md-6 col-lg-4 mt-4">
							<?php get_template_part('templates/post-swiper'); ?>
						</div>
					<?php
					endwhile;
				endif;
				?>

			</div>


			<!--pagination-->
			<div class="row my-5 py-4">
				<div class="col-12">
					<div class="pagination d-flex justify-content-center">
						<ul>
							<li><a href="">قبلی</a></li>
							<li class="bg-pagination-active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">4</a></li>
							<li><a href="">4</a></li>
							<li><a href="">4</a></li>
							<li><a href="">بعدی</a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();