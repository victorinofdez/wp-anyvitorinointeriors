<?php
    get_header();
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
						<img src="<?php bloginfo('template_directory');?>/assets/img/logo-light.png" class="ptr-prel-image tt-logo-light" alt="Logo">
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
									<img src="<?php bloginfo('template_directory');?>/assets/img/logo-light.png" class="tt-logo-light magnetic-item" alt="Logo"> <!-- logo light -->
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
							
                            
                            <nav class="tt-overlay-menu tt-ol-menu-count">
								<div class="tt-ol-menu-ghost">Explore</div>
								<div class="tt-ol-menu-holder">
									<div class="tt-ol-menu-inner tt-wrap">
										<div class="tt-ol-menu-content">
							
											<!-- Begin menu list -->
											<ul class="tt-ol-menu-list">
							
												<li class="active"><a href="<?php echo home_url();?>">Home</a></li>
												<li><a href="<?php echo get_page_link(get_page_object('BLOG')->ID);?>">Blog</a></li>
												<li><a href="<?php echo get_page_link(get_page_object('PROJECTS')->ID); ?>">Projects</a></li>
												<li><a href="<?php echo get_page_link(get_page_object('ARCHIVES')->ID); ?>">Archives</a></li>
												<li><a href="<?php echo get_page_link(get_page_object('CONTACT')->ID); ?>">Contact</a></li>
												<li><a href="<?php echo get_page_link(get_page_object('PRIVATE')->ID); ?>">Private Zone</a></li>
												
											</ul>
											<!-- End menu list -->
							
											<!-- Begin overlay menu social links 
											===================================== -->
											<ul class="tt-ol-menu-social">
												<li><h6 class="tt-ol-menu-social-heading">Social Links:</h6></li>
												<li><a href="https://www.facebook.com/" target="_blank" rel="noopener">Facebook</a></li>
												<li><a href="https://twitter.com/" target="_blank" rel="noopener">Twitter</a></li>
												<li><a href="https://www.youtube.com/" target="_blank" rel="noopener">Youtube</a></li>
												<li><a href="https://dribbble.com/" target="_blank" rel="noopener">Dribbble</a></li>
												<li><a href="https://www.behance.net/" target="_blank" rel="noopener">Behance</a></li>
											</ul>
											<!-- End overlay menu social links -->
							
										</div> <!-- /.tt-ol-menu-content -->
									</div> <!-- /.tt-ol-menu-inner -->
								</div> <!-- /.tt-ol-menu-holder -->
							</nav> 
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
					<div id="page-header" class="ph-full ph-cap-lg ph-ghost-scroll ph-image-cropped ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header image 
							============================= -->
							<!-- <div class="ph-image">
								<div class="ph-image-inner">
									<img src="<?php bloginfo('template_directory');?>/assets/img/page-header/ph-1.jpg" alt="Image">
								</div>
							</div> -->
							<!-- End page header image -->

							<!-- Begin page header caption
							=============================== 
							Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="ph-caption">
								<!-- <div class="ph-caption-subtitle">
									<div class="ph-appear">Subtitle</div>
								</div> -->
								<h1 class="ph-caption-title">
									<div class="ph-appear">We are AnyVitorino<br> interiors <span class="hide-from-sm">→</span> <em class="text-stroke-light">focused</em><br> interior designs</div> <!-- You can use <br> to break a text line if needed -->
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear">AnyVitorino</div>
								</div>
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
						<div class="tt-section">
							<div class="tt-section-inner">

								<!-- Begin portfolio grid (works combined with tt-Ggrid!)
								========================== 
								* Use class "pgi-hover" to enable portfolio grid item hover effect (behavior depends on "ttgr-gap-*" classes below!).
								* Use class "pgi-cap-hover" to enable portfolio grid item caption hover effect (effect only with class "pgi-cap-inside"! Also no effect on mobile devices!).
								* Use class "pgi-cap-center" to position portfolio grid item caption to center.
								* Use class "pgi-cap-inside" to position portfolio grid item caption to inside.
								--> 
								<div id="portfolio-grid" class="pgi-hover">

									<!-- Begin tt-Grid
									=================== 
									* Use class "ttgr-layout-2", "ttgr-layout-3", "ttgr-layout-4" to set grid layout (columns). No class = one column.
									* Use class "ttgr-layout-1-2", "ttgr-layout-2-1", "ttgr-layout-2-3", "ttgr-layout-3-2", "ttgr-layout-3-4" or "ttgr-layout-4-3" to set grid mixed layout (columns).
									* Use class "ttgr-layout-creative-1" or "ttgr-layout-creative-2" to set grid creative mixed layout (no effect with classes "ttgr-portrait", "ttgr-portrait-half", "ttgr-not-cropped" and "ttgr-shifted").
									* Use class "ttgr-portrait" or "ttgr-portrait-half" to enable portrait mode (no effect with classes "ttgr-layout-creative-1", "ttgr-layout-creative-2" and "ttgr-not-cropped").
									* Use class "ttgr-gap-1", "ttgr-gap-2", "ttgr-gap-3", "ttgr-gap-4", "ttgr-gap-5" or "ttgr-gap-6" to add space between items.
									* Use class "ttgr-not-cropped" to enable not cropped mode (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
									* Use class "ttgr-shifted" to enable shifted layout (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
									-->
									<div class="tt-grid ttgr-layout-creative-2 ttgr-gap-4">

										<!-- Begin tt-Grid items wrap 
										============================== -->
										<div class="tt-grid-items-wrap isotope-items-wrap">
											
											 <?php
			                                    $paged = get_query_var('paged') > 1 ? get_query_var('paged') : 1;
			                                    $args = array(
			                                        'paged' => $paged,
			                                        'posts_per_page' => 4,
			                                        'post_type' => array('projects'),
			                                    );
			                                    $query = new WP_Query($args);
			                                    if ($query->have_posts()):
			                                        while ($query->have_posts()):
			                                            $query->the_post();
			                                            if (has_post_thumbnail()) {
			                                                $postIMG = get_the_post_thumbnail_url();
			                                            } else {
			                                                $postIMG = get_template_directory_uri().'/assets/img/blog/single/blog-post-1.jpg';
			                                            }
		                                    ?>

											<!-- Begin tt-Grid item
											======================== -->
											
											<div class="tt-grid-item isotope-item people">
												<div class="ttgr-item-inner">

													<!-- Begin portfolio grid item 
													===============================
													* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"! Also no effect on small screens!).
													-->
													<div class="portfolio-grid-item">
														<a href="<?php the_permalink(); ?>" class="pgi-image-wrap" data-cursor="View<br>Project">
															<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
															<div class="pgi-image-holder">
																<div class="pgi-image-inner anim-zoomin">
																	<figure class="pgi-image ttgr-height">
																		<?php the_post_thumbnail(); ?>
																	</figure> <!-- /.pgi-image -->
																</div> <!-- /.pgi-image-inner -->
															</div> <!-- /.pgi-image-holder -->
														</a> <!-- /.pgi-image-wrap -->

														<div class="pgi-caption">
															<div class="pgi-caption-inner">
																<h2 class="pgi-title">
																	<a href="single-project-1.html"><?php the_title(); ?></a>
																</h2>
																<div class="pgi-categories-wrap">
																	<div class="pgi-category"><?php the_time('j F, Y'); ?></div>
																	<!-- <div class="pgi-category">Varia</div> -->
																</div> <!-- /.pli-categories-wrap -->
															</div> <!-- /.pgi-caption-inner -->
														</div> <!-- /.pgi-caption -->
													</div>
													<!-- End portfolio grid item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

										
											<?php
			                                        endwhile;
			                                    else:
			                                        echo "No Projects publish yet...";
			                                    endif;
			                                    wp_reset_postdata();
		                                    ?>
											

										

										</div>
										<!-- End tt-Grid items wrap  -->

									</div>
									<!-- End tt-Grid -->

								</div>
								<!-- End portfolio grid -->


								<div class="text-center anim-fadeinup">

									<!-- Begin scrolling button (See all works)
									============================ -->
									<a href="portfolio-grid-creative.html" class="tt-scrolling-btn all-works-btn" data-cursor="All<br>Works">
										<div class="scr-btn-inner ph-appear">
											<div class="scr-btn-icon"><i class="fas fa-arrow-right"></i></div>
											<div class="scr-btn-spinner">
												<svg viewbox="0 0 500 500">
													<defs>
														<path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250" id="textcircle"></path>
													</defs>
													<!-- If you change the text, you probably need to adjust the CSS so that it fits correctly. Find ".scr-btn-text" in file "theme.css" and adjust it for your needs. -->
													<text dy="30" class="scr-btn-text">
														<textpath xlink:href="#textcircle">See All Works - See All Works -</textpath>
													</text>
												</svg>
											</div>
										</div> <!-- /.sdc-inner -->
									</a>
									<!-- End scrolling button -->

								</div> <!-- /.text-center -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-100 padding-bottom-xlg-150">
							<div class="tt-section-inner tt-wrap max-width-1700">

								<div class="tt-row margin-left-lg-3-p margin-right-lg-3-p">
									<div class="tt-col-xl-4">

										<!-- Begin tt-Heading 
										====================== 
										* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
										* Use class "tt-heading-stroke" to enable stroke style.
										* Use class "tt-heading-center" to align tt-Heading to center.
										* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
										-->
										<div class="tt-heading tt-heading-xlg anim-fadeinup">
											<h3 class="tt-heading-subtitle">Our Services</h3>
											<h2 class="tt-heading-title">Luxury Interior Design</h2> <!-- You can use <br> to break a text line if needed -->
										</div>
										<!-- End tt-Heading -->

										<div class="max-width-600 margin-bottom-60 anim-fadeinup">
											<h5>When passion, courage, and craftsmanship converge, extraordinary transformations take place.</h5>
										</div>

									</div> <!-- /.tt-col -->

									<div class="tt-col-xl-1">
									</div> <!-- /.tt-col -->

									<div class="tt-col-xl-7">

										<!-- Begin accordion 
										===================== 
										* Use class "tt-ac-sm", "tt-ac-lg", "tt-ac-xlg" or "tt-ac-xxlg" to set accordion size.
										* Use class "tt-ac-borders" to enable borders.
										* Note: Add class "is-open" to the "tt-accordion-content" to make this content open by default.
										-->
										<div class="tt-accordion tt-ac-borders">
											<div class="tt-accordion-item anim-fadeinup">
												<div class="tt-accordion-heading">
													<div class="tt-ac-head cursor-alter">
														<h3 class="tt-ac-head-title">Interior Design Expertise</h3>
														<!-- <div class="tt-accordion-subtext">Mauris mauris ante</div> -->
													</div>

													<div class="tt-accordion-caret-wrap">
														<div class="tt-accordion-caret-inner magnetic-item">
															<div class="tt-accordion-caret"></div>
														</div>
													</div> <!-- /.tt-accordion-caret-wrap -->
												</div> <!-- /.tt-accordion-heading -->
												<div class="tt-accordion-content max-width-800">
													<p>Blending timeless elegance with contemporary charm, we bring a sincere dedication to creating spaces that captivate. Our meticulous approach to design ensures harmonious environments that stand the test of time. From conceptualization to realization, we guarantee a seamless journey in transforming spaces into expressions of refined luxury.</p>
												</div> <!-- /.tt-accordion-content -->
											</div> <!-- /.tt-accordion-item -->

											<div class="tt-accordion-item anim-fadeinup">
												<div class="tt-accordion-heading">
													<div class="tt-ac-head cursor-alter">
														<h3 class="tt-ac-head-title">Strategic Design Approach</h3>
														<!-- <div class="tt-accordion-subtext">Vivamus nisi</div> -->
													</div>

													<div class="tt-accordion-caret-wrap">
														<div class="tt-accordion-caret-inner magnetic-item">
															<div class="tt-accordion-caret"></div>
														</div>
													</div> <!-- /.tt-accordion-caret-wrap -->
												</div> <!-- /.tt-accordion-heading -->
												<div class="tt-accordion-content max-width-800">
													<p>Unveiling the possibilities, we navigate the intersection of innovation and sophistication in every project. Our digital strategy is not just a plan; it's a journey to transform spaces into narratives of unparalleled luxury. We believe in elevating every detail to create environments that leave a lasting impression. From initial concept to final execution, we weave a seamless story of refinement and excellence.</p>
												</div> <!-- /.tt-accordion-content -->
											</div> <!-- /.tt-accordion-item -->

											<div class="tt-accordion-item anim-fadeinup">
												<div class="tt-accordion-heading">
													<div class="tt-ac-head cursor-alter">
														<h3 class="tt-ac-head-title">Distinctive Branding & Identity</h3>
														<!-- <div class="tt-accordion-subtext">Nam min proin eget</div> -->
													</div>

													<div class="tt-accordion-caret-wrap">
														<div class="tt-accordion-caret-inner magnetic-item">
															<div class="tt-accordion-caret"></div>
														</div>
													</div> <!-- /.tt-accordion-caret-wrap -->
												</div> <!-- /.tt-accordion-heading -->
												<div class="tt-accordion-content max-width-800">
													<p>Elevating the essence of your space, we embark on a journey to redefine luxury through our unique branding and identity solutions. Just as every room has its story, we craft a narrative that resonates with sophistication and individuality. From the initial spark of inspiration to the final strokes of design, we ensure that every detail contributes to a captivating and memorable brand experience.</p>
												</div> <!-- /.tt-accordion-content -->
											</div> <!-- /.tt-accordion-item -->

											<div class="tt-accordion-item anim-fadeinup">
												<div class="tt-accordion-heading">
													<div class="tt-ac-head cursor-alter">
														<h3 class="tt-ac-head-title">Tailored Content Creation</h3>
														<!-- <div class="tt-accordion-subtext">Condimentum sit amet</div> -->
													</div>

													<div class="tt-accordion-caret-wrap">
														<div class="tt-accordion-caret-inner magnetic-item">
															<div class="tt-accordion-caret"></div>
														</div>
													</div> <!-- /.tt-accordion-caret-wrap -->
												</div> <!-- /.tt-accordion-heading -->
												<div class="tt-accordion-content max-width-800">
													<p>In the realm of tranquility and purpose, we extend our expertise to curate content that speaks volumes. Beyond mere visuals, our content production is a symphony of meaning and aesthetics. We believe in creating narratives that resonate, infusing joy into every detail. With meticulous attention to detail, we craft content that mirrors the essence of your space, capturing not just images but emotions, ensuring a timeless imprint on every observer.</p>
												</div> <!-- /.tt-accordion-content -->
											</div> <!-- /.tt-accordion-item -->

										</div>
										<!-- End accordion -->

									</div> <!-- /.tt-col -->
								</div> <!-- /.tt-row -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->




						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
							<div class="tt-section-inner tt-wrap">

								<!-- Begin logo wall 
								=====================
								* Use class "cl-col-2", "cl-col-3" or "cl-col-4" to change columns.
								* Hint: for better results make sure all your images are in the same dimensions!
								-->
								<ul class="tt-logo-wall anim-fadeinup">
									<li>
										<a href="https://.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php bloginfo('template_directory');?>/assets/img/clients/pngwing.com.png" class="lv-client-light" alt="Client">
											
										</a>
									</li>
									<li>
										<a href="https://.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php bloginfo('template_directory');?>/assets/img/clients/img1.png" class="lv-client-light" alt="Client">
							
										</a>
									</li>
									<li>
										<a href="https://.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php bloginfo('template_directory');?>/assets/img/clients/img2.png" class="lv-client-light" alt="Client">
										
										</a>
									</li>
									<li>
										<a href="https://.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php bloginfo('template_directory');?>/assets/img/clients/img3.png" class="lv-client-light" alt="Client">
										
										</a>
									</li>
									<li>
										<a href="https://.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php bloginfo('template_directory');?>/assets/img/clients/img4.png" class="lv-client-light" alt="Client">
										
										</a>
									</li>
									<li>
										<a href="https://.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php bloginfo('template_directory');?>/assets/img/clients/img5.png" class="lv-client-light" alt="Client">
										
										</a>
									</li>
									<li>
										<a href="https://.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php bloginfo('template_directory');?>/assets/img/clients/img6.png" class="lv-client-light" alt="Client">
										
										</a>
									</li>
									<li>
										<a href="https://.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php bloginfo('template_directory');?>/assets/img/clients/img7.png" class="lv-client-light" alt="Client">
										
										</a>
									</li>
									<li>
										<a href="https://.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php bloginfo('template_directory');?>/assets/img/clients/img8.png" class="lv-client-light" alt="Client">
										
										</a>
									</li>
									<li>
										<a href="https://.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php bloginfo('template_directory');?>/assets/img/clients/img9.png" class="lv-client-light" alt="Client">
										
										</a>
									</li>
								

									<!-- Use the below example if you want a list without links -->
									<!-- <li><img src="<?php bloginfo('template_directory');?>/assets/img/clients/client-1.png" alt="Client"></li> -->
								</ul>
								<!-- End logo wall -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150 bg-white-accent-3">
							<div class="tt-section-inner tt-wrap max-width-1600">

								<!-- Begin tt-Heading 
								====================== 
								* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
								* Use class "tt-heading-stroke" to enable stroke style.
								* Use class "tt-heading-center" to align tt-Heading to center.
								* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
								-->
								<div class="tt-heading tt-heading-xlg margin-bottom-7-p anim-fadeinup max-width-1250 margin-auto">
									<h3 class="tt-heading-subtitle">Latest News</h3>
									<h2 class="tt-heading-title">From the Blog</h2> <!-- You can use <br> to break a text line if needed -->
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
									'posts_per_page' => 5,
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
									echo "No post has been published yet...";
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


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-150">
							<div class="tt-section-inner tt-wrap max-width-700">

								<!-- Begin tt-Heading 
								====================== 
								* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
								* Use class "tt-heading-stroke" to enable stroke style.
								* Use class "tt-heading-center" to align tt-Heading to center.
								* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
								-->
								<div class="tt-heading tt-heading-xxlg margin-bottom-8-p anim-fadeinup">
									<h3 class="tt-heading-subtitle">Get in Touch</h3>
									<h2 class="tt-heading-title">Let's Work<br> Together!</h2> <!-- You can use <br> to break a text line if needed -->
								</div>
								<!-- End tt-Heading -->

								<!-- Begin form 
								================ 
								* Use class "tt-form-filled" or "tt-form-minimal" to change form style.
								* Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
								-->
								<form id="tt-contact-form" class="tt-form-filled anim-fadeinup">

									<!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
									<input type="hidden" name="project_name" value="yourwebsiteaddress.com"> <!-- Change value to your site name -->
									<input type="hidden" name="admin_email" value="your@email.com"> <!-- Change value to your valid email address (where a message will be sent) -->
									<input type="hidden" name="form_subject" value="Message from yourwebsiteaddress.com"> <!-- Change value to your own message subject -->
									<!-- End Hidden Required Fields -->

									<div class="tt-row">
										<div class="tt-col-md-6">

											<div class="tt-form-group">
												<label>Your Name <span class="required">*</span></label>
												<input class="tt-form-control" type="text" name="Name" placeholder="" required="">
											</div>

										</div> <!-- /.tt-col -->

										<div class="tt-col-md-6">

											<div class="tt-form-group">
												<label>Email address <span class="required">*</span></label>
												<input class="tt-form-control" type="email" name="Email" placeholder="" required="">
											</div>

										</div> <!-- /.tt-col -->
									</div> <!-- /.tt-row -->

									<div class="tt-form-group">
										<label>Subject <span class="required">*</span></label>
										<input class="tt-form-control" type="text" name="Subject" placeholder="" required="">
									</div>

									<!-- <div class="tt-form-group">
										<label>Select an option <span class="required">*</span></label>
										<select class="tt-form-control" name="option" required>
											<option value="" disabled selected>Please choose an option</option>
											<option value="Say Hello">Say hello</option>
											<option value="New Project">New project</option>
											<option value="Feedback">Feedback</option>
											<option value="Other">Other</option>
										</select>
									</div> -->

									<div class="tt-form-group">
										<label>Your Message <span class="required">*</span></label>
										<textarea class="tt-form-control" rows="5" name="Message" placeholder="" required=""></textarea>
									</div>

									<small class="tt-form-text"><em>Fields marked with an asterisk (*) are required!</em></small>

									<button type="submit" class="tt-btn tt-btn-primary margin-top-30">
										<div data-hover="Send Message">Send Message</div>
										<span class="tt-btn-icon"><i class="fas fa-paper-plane"></i></span>
									</button>
								</form>
								<!-- End form -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


					</div>
					<!-- End page content -->

<?php
    get_footer();
?>
					