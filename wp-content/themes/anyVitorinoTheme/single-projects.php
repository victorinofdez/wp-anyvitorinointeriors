<?php
    get_header();
    the_post();
    $post_id = $post->ID;
    $tags = get_the_tags($post_id);
    add_num_visits($post_id);
    
    //require_once('header.php'); esto es enganchar el header con php puro pero WP no quiere php puro
?>

		<!-- *************************************
		*********** Begin body inner ************* 
		************************************** -->
		<main id="body-inner">

			<!-- Begin page transition (do not remove!!!) 
			=========================== -->
			<div id="page-transition">
				<div class="ptr-overlay"></div>
				<div class="ptr-preloader">
					<div class="ptr-prel-content">
						<!-- Hint: You may need to change the img height and opacity to match your logo type. You can do this from the "theme.css" file (find: ".ptr-prel-image"). -->
						<img src="<?php echo get_template_directory_uri();?>/assets/img/logo-light.png" class="ptr-prel-image tt-logo-light" alt="Logo"></img>
					</div> <!-- /.ptr-prel-content -->
				</div> <!-- /.ptr-preloader -->
			</div>
			<!-- End page transition -->

			<!-- Begin magic cursor 
			======================== -->
			<div id="magic-cursor">
				<div id="ball"></div>
			</div>
			<!-- End magic cursor --> 


			<!-- *****************************************
			*********** Begin scroll container *********** 
			****************************************** -->
			<div id="scroll-container"> 
				
				<!-- ===================
				///// Begin header /////
				========================
				* Use class "tt-header-fixed" to set header to fixed position.
				-->
				<header id="tt-header" class="tt-header-fixed">
					<div class="tt-header-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes can be found in the file "helper.css". -->

						<div class="tt-header-col">

							<!-- Begin logo 
							================ -->
							<div class="tt-logo"> 
								<a href="<?php echo home_url();?>">
									<!-- Hint: You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-logo img"). -->
									<img src="<?php echo get_template_directory_uri();?>/assets/img/logo-light.png" class="tt-logo-light magnetic-item" alt="Logo"></img> <!-- logo light -->
								</a>
							</div>
							<!-- End logo -->

						</div> <!-- /.tt-header-col -->

						<div class="tt-header-col">

							<!-- Begin overlay menu toggle button -->
							<div id="tt-ol-menu-toggle-btn-wrap">
								<div class="tt-ol-menu-toggle-btn-text-wrap hide-cursor">
									<div class="tt-ol-menu-toggle-btn-text">
										<span class="text-menu" data-hover="Open">Menu</span>
										<span class="text-close">Close</span>
									</div> <!-- /.tt-ol-menu-toggle-btn-text -->
								</div> <!-- /.tt-ol-menu-toggle-btn-text-wrap -->
								<div class="tt-ol-menu-toggle-btn-holder">
									<a href="#" class="tt-ol-menu-toggle-btn magnetic-item"><span></span></a>
								</div> <!-- /.tt-ol-menu-toggle-btn-holder -->
							</div>
							<!-- End overlay menu toggle button -->

							<!-- Begin overlay menu 
							======================== 
							* Use class "tt-ol-menu-count" to enable menu counter.
							-->
							<?php
                                get_template_part('nav');   
                            ?>
							<!-- End overlay menu -->

						</div> <!-- /.header-col -->
					</div> <!-- /.header-inner -->
				</header>
				<!-- End header -->

				
				<!-- *************************************
				*********** Begin content wrap *********** 
				************************************** -->
				<div id="content-wrap">

					
					<!-- ========================
					///// Begin page header /////
					============================= 
					* Use class "ph-full" to enable fullscreen size (no effect on smaller screens!).
					* Use class "ph-cap-sm", "ph-cap-lg", "ph-cap-xlg" or "ph-cap-xxlg" to set caption size (no class = default size).
					* Use class "ph-center" to enable content center position.
					* Use class "ph-image-cropped" to crop image (if image is used). It uses fixed image dimensions (no effect with class "ph-bg-image"!).
					* Use class "ph-bg-image" to enable page header background image. Note: "ph-caption-title-ghost" will be disabled if you enable this option!
					* Use class "ph-bg-image-is-light" if needed, it makes the elements dark and more visible if you use a very light background image (effect only with class "ph-bg-image").
					* Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5").
					* Use class "ph-content-parallax" to enable content parallax.
					* Use class "ph-stroke" to enable caption title stroke style.
					* Use class "ph-ghost-scroll" to enable the scroll effect to caption title ghost (no effect with class "ph-center"!).
					-->
					<div id="page-header" class="ph-cap-sm ph-bg-image ph-ghost-scroll ph-image-cover-6 ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header image 
							============================= -->
							<div class="ph-image">
								<div class="ph-image-inner">
									<img src="<?php the_post_thumbnail(); ?>" alt="Image"></img>
								</div>
							</div>
							<!-- End page header image -->

							<!-- Begin page header caption
							=============================== 
							Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="ph-caption max-width-1000">
								<div class="ph-categories ph-appear">
									<?php the_category(' / '); ?>
									<!-- <a href="blog-archive.html" class="ph-category">Uncategorized</a> -->
								</div>
								<h1 class="ph-caption-title">
									<div class="ph-appear"><?php the_title(); ?></div> <!-- You can use <br> to break a text line if needed -->
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear">Blog</div>
								</div>
								<div class="ph-meta">
									<div class="ph-appear">
										<span class="ph-meta-published"><?php the_time('j F, Y'); ?></span>
										<span class="ph-meta-posted-by">| &nbsp; by:&nbsp;<?php the_author_posts_link();?> &nbsp; |</span>
										<span class="ph-meta-posted-by"><?php echo get_num_visits( $post_id ) ?></span>
									</div>
								</div> <!-- /.ph-meta -->
							</div>
							<!-- End page header caption -->

						</div> <!-- /.page-header-inner -->

						<!-- Begin scroll down (you can change "data-offset" to set scroll top offset) 
						======================= -->
						<div class="tt-scroll-down">
							<a href="#page-content" class="tt-sd-inner ph-appear" data-offset="0">
								<div class="tt-sd-arrow">
									<div class="tt-sd-arrow-inner"></div>
								</div>
								<div class="tt-sd-text">Scroll</div>
							</a>
						</div>
						<!-- End scroll down -->

						<!-- Begin page header share (share buttons are for design purposes only!) 
						============================= -->
						<div class="ph-share ph-appear">
							<div class="ph-share-inner">
								<div class="ph-share-trigger">
									<div class="ph-share-text">Share</div>
									<div class="ph-share-icon"><i class="fas fa-share"></i></div>
								</div> <!-- /.ph-share-trigger -->

								<div class="social-buttons">
									<ul>
										<li><a href="#" class="magnetic-item" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="magnetic-item" title="Share on Twitter"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="magnetic-item" title="Share on Pinterest"><i class="fab fa-pinterest"></i></a></li>
									</ul>
								</div> <!-- /.social-buttons -->
							</div> <!-- /.ph-share-inner -->
						</div>
						<!-- End page header share -->
						
					</div>
					<!-- End page header -->

					
					<!-- *************************************
					*********** Begin page content *********** 
					************************************** -->
					<div id="page-content">


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section">
							<div class="tt-section-inner tt-wrap max-width-900">

								<!-- Begin blog post 
								===================== -->
								<article class="tt-blog-post lightgallery">

									<!-- Begin blog post content -->
									<div class="tt-blog-post-content">
										<?php do_shortcode("[vfh_show_all_fields id=".$post->ID."]");?>
										<?php the_content(); ?>
									</div>
									<!-- End blog post content -->

									<!-- Begin blog post tags -->
									
									<?php
										if ($tags) {
									        echo '<div class="tt-blog-post-tags"><ul><li><span>Tags:</span></li>';
									        foreach ($tags as $tag) {
									            echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
									        }
									        echo '</ul></div>';
									    }
									?>
									<!--<div class="tt-blog-post-tags">-->
									<!--    <ul>-->
									<!--        <li><span>Tags:</span></li>-->
									<!--        <?php the_tags('<li><a href="#">', '</a></li><li><a href="#">', '</a></li>'); ?>-->
									<!--    </ul>-->
									<!--</div>-->
									<!-- End blog post tags -->

									<!-- Begin blog post share (Note: for design purposes only!) 
									=========================== 
									* Use class "bss-fixed-bottom" to enable post share fixed bottom position (effect only on small screens!!!).
									-->
									<div class="tt-blog-post-share">
										<div class="tt-bps-text">Share:</div>
										<div class="social-buttons">
											<ul>
												<li><a href="#" class="magnetic-item" rel="noopener" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#" class="magnetic-item" rel="noopener" title="Share on Twitter"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#" class="magnetic-item" rel="noopener" title="Share on Pinterest"><i class="fab fa-pinterest"></i></a></li>
											</ul>
										</div> <!-- /.social-buttons -->
									</div>
									<!-- End blog post share -->

								</article> 
								<!-- End blog post -->


								<!-- Begin blog post nav -->
								<div class="tt-blog-post-nav">
								    <div class="tt-bp-nav-col tt-bp-nav-left">
								        <div class="tt-bp-nav-text"><span><i class="fas fa-angle-left"></i></span> Prew Project</div>
								        <h4 class="tt-bp-nav-title">
								            <?php 
								            if (get_previous_post_link()) {
								                previous_post_link('%link'); 
								            } else {
								                echo 'No previous projects...';
								            }
								            ?>
								        </h4>
								    </div>
								    <div class="tt-bp-nav-col tt-bp-nav-right">
								        <div class="tt-bp-nav-text">Next Project <span><i class="fas fa-angle-right"></i></span></div>
								        <h4 class="tt-bp-nav-title">
								            <?php 
								            if (get_next_post_link()) {
								                next_post_link('%link'); 
								            } else {
								                echo 'No next posts...';
								            }
								            ?>
								        </h4>
								    </div>
								</div>
								<!-- End blog post nav -->


								<!-- Begin post comments 
								========================= -->
								<?php comments_template(); ?>
								<!-- End post comments -->
                                
                             
								
        								

                                        
                                        
        								<?php
        									get_sidebar();								
        								?>
        							
        
        							</div> <!-- /.tt-section-inner -->
							
								
								
								<!-- End blog carousel -->

							</div> <!-- /.tt-section-inner -->
				
						<!-- End tt-section -->
								
						</div>
						<!-- End tt-section -->
        								<!------------------------------------------------------------->
        									<div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
							<div class="tt-section-inner tt-wrap max-width-1600">

								<!-- Begin tt-Heading 
								====================== 
								* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
								* Use class "tt-heading-stroke" to enable stroke style.
								* Use class "tt-heading-center" to align tt-Heading to center.
								* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
								-->
								<div class="tt-heading tt-heading-xlg margin-bottom-7-p anim-fadeinup max-width-1250 margin-auto">
									<h3 class="tt-heading-subtitle"></h3>
									<h2 class="tt-heading-title">Related Projects</h2> <!-- You can use <br> to break a text line if needed -->
									<a href="blog-classic.html" class="tt-btn tt-btn-link">
										<div data-hover="Browse All News">Browse All News</div>
										<span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
									</a>
								</div>
								<!-- End tt-Heading -->

								<!-- ==========================
								///// Begin blog carousel /////
								===============================
								* Use class "tt-blc-shifted" to enable shifted style (no effect on smaller screens!).
								* Use class "tt-blc-hide-navigation" to hide navigation.
								* Available data attributes:
										data-speed="800"......................(milliseconds)
										data-autoplay="5000"..................(milliseconds. Note: disabled after user first interactions)
										data-simulate-touch="true"............(true/false)
										data-pagination-type="bullets"........(bullets/fraction/progressbar)
								-->
								<div class="tt-blog-carousel anim-fadeinup" data-speed="800" data-simulate-touch="true" data-pagination-type="bullets">

									<!-- Begin swiper container -->
									<div class="swiper">

										<!-- Begin swiper wrapper (required) -->
										<div class="swiper-wrapper">


										<!--AQUI EMPIEZA EL LOOP -->
							
							<?php
								$postImg = null;
								$args = array(
									'post_type' => 'projects',
									'posts_per_page' => 5,
									'post__not_in'=> array($post_id),
                                    'category__in'=> $cats,
								);
								$query = new WP_Query($args);
								if($query->have_posts()):
									while($query->have_posts()):
										$query->the_post();
										//Preguntamos si tenemos imagen representativa , y si no tenemos asignamos por defecto
										if (has_post_thumbnail()){
											$postIMG = get_the_post_thumbnail_url();
										} else {
											$postIMG= get_template_directory_uri().'/assets/img/blog/single/blog-post-1.jpg';
										}
							?>
							



											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">

												<!-- Begin blog carousel item 
												============================== -->
												<div class="tt-blog-carousel-item">
													<a href="<?php the_permalink();?>" class="tt-bci-image-wrap" data-cursor="Read<br>More">
														<figure class="tt-bci-image">
															<img class="swiper-lazy" src="<?php echo $postIMG ;?>" data-src="<?php echo $postIMG ;?>" alt="Image">
														</figure> <!-- /.tt-bci-image -->
													</a> <!-- /.tt-bci-image-wrap -->

													<div class="tt-bci-info">
														<div class="tt-bci-categories">
															<?php the_category(' & '); ?>
															<!-- <a href="blog-archive.html">Uncategorized</a> -->
														</div>
														<h2 class="tt-bci-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
														<div class="tt-bci-meta"> 
															<span class="published"><?php the_time('j F, Y'); ?></span>
															<span class="posted-by">- by&nbsp;<?php the_author_posts_link();?></span>
															</br>
															<span class="posted-by"><?php the_tags(''); ?></span>
														     
														</div> <!-- /.tt-bci-meta -->
													</div> <!-- /.tt-bci-inf -->
												</div>
												<!-- End blog carousel item -->

											</div>
											<!-- End swiper slide -->
											
											
											
											
											
										<!--AQUI TERMINA EL LOOP -->	
											
							<?php
									endwhile;
								else:
									echo "No projects has been published yet...";
								endif;
								wp_reset_query();
							?>

										</div>
										<!-- End swiper wrapper -->

									</div>
									<!-- End swiper container -->


									<!-- Begin blog carousel navigation (arrows) 
									============================================= -->
									<div class="tt-blc-nav-prev">
										<div class="tt-blc-nav-arrow magnetic-item"><i class="tt-arrow-left"></i></div>
									</div>
									<div class="tt-blc-nav-next">
										<div class="tt-blc-nav-arrow magnetic-item"><i class="tt-arrow-right"></i></div>
									</div>
									<!-- End blog carousel navigation -->

									<!-- Blog carousel pagination -->
									<div class="tt-blc-pagination hide-cursor"></div>

								</div>
								<!-- End blog carousel -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->
        								
        								
        								<!------------------------------------------------------------->

						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-bottom-xlg-150">
							<div class="tt-section-inner tt-wrap">

								<!-- Begin page nav 
								==================== 
								* Use class "tt-pn-center" to align page nav to center.
								* Use class "tt-pn-stroke" to enable title stroke style.
								-->
								<div class="tt-page-nav tt-pn-stroke">
									<a href="<?php echo get_page_link(get_page_object('PROJECTS')->ID); ?>" class="tt-pn-link anim-fadeinup" data-cursor="<i class='fas fa-arrow-right'></i>">
										<div class="tt-pn-title">Projects</div>
										<div class="tt-pn-hover-title">Projects</div>
									</a> <!-- /.tt-pn-link -->
									<div class="tt-pn-subtitle anim-fadeinup">Selected Projects</div>
								</div>
								<!-- End page nav -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


					</div>
					<!-- End page content -->
<?php
    get_footer();
?>