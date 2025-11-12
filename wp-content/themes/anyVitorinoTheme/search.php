<?php
  // Funcion para el header complementado con su percha en header.php
  get_header();
  
  // Codigo para obtener los datos para mostrar los resultados
  
  // Comprobamos si tiene parametros de busqueda la url
  if (isset($_GET['s'])) {
  	if (empty($_GET['s'])) {
  		// Si esta vacía
  		$words = 'All posts';
  	} else {
  		$words = get_search_query(); // devuelve las palabras de la búsqueda del form search
  	}
  }
  
  // comprobamos si ha encontrado algo y si ha encontrado algo cuanto ha encontrado
  if (have_posts()) { // ha encontrado algo
  	$total = $wp_the_query->found_posts; // devuelve el numero de post que tiene el result set de wp
  	if ($total != 1) {
  		$total = $total . ' posts';
  	} else {
  		$total = $total . ' post';
  	}
  } else {
  	$total = 'No posts';
  }

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
						<img src="<?php echo get_template_directory_uri();?>/assets/img/logo-light.png" class="ptr-prel-image tt-logo-light" alt="Logo">
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
									<img src="<?php echo get_template_directory_uri();?>/assets/img/logo-light.png" class="tt-logo-light magnetic-item" alt="Logo"> <!-- logo light -->
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
					<div id="page-header" class="ph-cap-lg ph-ghost-scroll ph-image-cropped ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header image 
							============================= -->
							<!-- <div class="ph-image">
								<div class="ph-image-inner">
									<img src="assets/img/page-header/ph-3.jpg" alt="Image">
								</div>
							</div> -->
							<!-- End page header image -->

							<!-- Begin page header caption
							=============================== 
							Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="ph-caption max-width-1000">
								<div class="ph-caption-subtitle">
									<div class="ph-appear">
								    </div>
								</div>
								<h1 class="ph-caption-title">
									<div class="ph-appear">Search for:
												<?php echo $words; ?>
								    </div> <!-- You can use <br> to break a text line if needed -->
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear">Browsing</div>
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
                			
                			<div class="post-list-search">
                				
                					
                                
                                		<div class="post-list-items sidebar-post-list">
												<!-- Can be "Recent Posts" or "Popular Posts" etc. -->
												<ul class="list-unstyled">
												    <?php 
                                                         // wp_get_archives('type=monthly');// esto me da los post recientes especificando el type"mes, año, etc" 
                                                        $args = array(
                                                            'post_per_page' => 4,     
                                                        );
                                                         $query = new WP_Query($args);
                                                         
                                                         if($query->have_posts()):
                                                            while($query->have_posts()):
                                                                $query->the_post();
                                                                if (has_post_thumbnail()){
                                            								$postIMG = get_the_post_thumbnail_url();
                                            							} else {
                                            								$postIMG= get_template_directory_uri().'/assets/images/shop/slider1.jpg';
                                            							}
                                                    ?>
													<li>
														<!-- Begin blog list item image -->
														<div class="post-single-list">
															<div class="img-list">
																<a href="<?php the_permalink(); ?>" class="bli-image-wrap" data-cursor="Read<br>More">
																	<figure class="bli-image">
																		<?php the_post_thumbnail(); ?>
																	</figure>
																</a>
															</div>
														
															<div class="list-post-data sidebar-post-data">
																<h5 class="sidebar-post-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
																<!-- <span class="sidebar-post-author">By: <a href="">John Doe</a></span> -->
																<span class="sidebar-post-date"><?php the_time('j F, Y');?></span>
															</div>
														</div>
													</li>
													<?php 
                                                            endwhile;
                                                        else:
                                                            $query = "Post no publish yet...";
                                                        endif;
                                                        wp_reset_postdata(); // reseteamos el loop y lo dejamos preparado para la siguiente consulta
                                                    ?>    
												</ul>
											</div>
											
								</div>

									<!-- Begin tt-pagination 
									=========================
									* Use class "tt-pagin-center" to align center.
									-->
									<div class="tt-pagination anim-fadeinup">
									    <?php
									    global $wp_query;
									    $big = 999999999; // need an unlikely integer
									    $pages = paginate_links(array(
									        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
									        'format' => '?paged=%#%',
									        'current' => max(1, get_query_var('paged')),
									        'total' => $wp_query->max_num_pages,
									        'prev_text'    => '<i class="fas fa-chevron-left"></i>',
									        'next_text'    => '<i class="fas fa-chevron-right"></i>',
									        'type'         => 'array',
									        'end_size'     => 1,
									        'mid_size'     => 2,
									    ));
									
									    if ($pages && is_array($pages) && count($pages) > 1) {
									        echo '<div class="tt-pagin-numbers">';
									        foreach ($pages as $page) {
									            echo str_replace('<a', '<a class="tt-pagin-item magnetic-item"', $page);
									        }
									        echo '</div>';
									    }
									    ?>
									</div>
									<!-- End tt-pagination -->

							<?php
								get_sidebar();
							?>

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


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
									<div class="tt-pn-subtitle anim-fadeinup">Selected Works</div>
								</div>
								<!-- End page nav -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


					</div>
					<!-- End page content -->
<?php
  // Funcion para el footer complementado con su percha en footer.php
  get_footer();
?>