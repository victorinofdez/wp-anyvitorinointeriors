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
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-light.png" class="ptr-prel-image tt-logo-light" alt="Logo">
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
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-light.png" class="tt-logo-light magnetic-item" alt="Logo"> <!-- logo light -->
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
							
												<li><a href="<?php echo home_url();?>">Home</a></li>
												<li class="active"><a href="<?php echo get_page_link(get_page_object('BLOG')->ID);?>">Blog</a></li>
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
					<div id="page-header" class="ph-cap-lg ph-ghost-scroll ph-image-cropped ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header image 
							============================= -->
							<!-- <div class="ph-image">
								<div class="ph-image-inner">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/page-header/ph-3.jpg" alt="Image">
								</div>
							</div> -->
							<!-- End page header image -->

							<!-- Begin page header caption
							=============================== 
							Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="ph-caption max-width-1000">
								<div class="ph-caption-subtitle">
									<div class="ph-appear">Articles &amp; News</div>
								</div>
								<h1 class="ph-caption-title">
									<div class="ph-appear">Blog</div> <!-- You can use <br> to break a text line if needed -->
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear">Blog</div>
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
<!--/**************************************************************  POST DESTACADO ******************************************************************/-->

                            <?php
                                $args = array(
                                    'posts_per_page' => 1, //Devuelve el ultimo post
                                );
                                $post_destacado = new WP_Query($args);
                        
                                if ($post_destacado->have_posts()):
                                    while ($post_destacado->have_posts()):
                                        $post_destacado->the_post();
                                        $post_destacado_id = $post->ID;
                                        if (has_post_thumbnail()) {
                                            $postIMG = get_the_post_thumbnail_url();
                                        } else {
                                            $postIMG = get_template_directory_uri().'/assets/img/blog/single/blog-post-1.jpg';
                                        }
                        
                    
                            ?>
                            
                            
                                    <article class="blog-list-item postDestacado">

										<!-- Begin blog list item image -->
										<a href="<?php the_permalink(); ?>" class="bli-image-wrap a-postDestacado" data-cursor="Read<br>More">
											<figure class="bli-image img-postDestacado">
												<?php the_post_thumbnail(); ?>
											</figure>
										</a>
										<!-- End blog list item image -->
										
										<!-- Begin blog list item info -->
										<div class="bli-info info-postDestacado">
											<div class="tt-bci-categories">
												<?php the_category(' & '); ?>
											</div>
											
											<h2 class="bli-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<div class="bli-meta"> 
												<span class="published"><?php the_time('j F, Y'); ?></span>
												<span class="posted-by">- by: &nbsp;<?php the_author_posts_link(); ?></span>
											</div>
											<div class="bli-desc"> <!-- 3 lines is optimal! -->
											    <?php the_excerpt(); ?>
											</div>
											<a href="<?php the_permalink(); ?>" class="bli-read-more tt-btn tt-btn-primary">
												<div data-hover="Read More">Read More</div>
												<span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
											</a>
										</div>
										<!-- End blog list item info -->

									</article>



                            <?php
									endwhile;
								else:
									echo "No post has been published yet...";
								endif;
								wp_reset_query();
							?>
<!--/**********************************************************************************************************************************************/-->

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
								
								<!-- Begin blog list
								===================== 
								* Use class "bli-image-cropped" to grop blog list item images (set fixed height).
								* Use class "bli-compact" to enable compact blog list style. Note: If "tt-sidebar" is used, then add more width to "tt-section-inner", for example "max-width-1600".
								-->
								<div id="blog-list" class="bli-image-cropped">


<!-- aqui empieza el bucle-->
                        <?php

                            $paged = get_query_var('paged') > 1 ? get_query_var( 'paged' ) : 1;
                            $args = array(
                                'paged' => $paged, // esto es para que la paginación funcione correctamete
                                'posts_per_page' => 3, // numero de posts que se mostrar en cada página de blog
                                // Vamos a excluir el post destacado
                                'post__not_in' => array($post_destacado_id),
                            );
                            
                            $query = new WP_Query($args);
                            if ($query->have_posts()):
                                while ($query->have_posts()):
                                    $query->the_post();
                                    $post_id = get_the_ID();
                                    
                                    
                                    //Preguntamos si tenemos imagen representativa , y si no tenemos asignamos por defecto
                                    if (has_post_thumbnail()) {
                                        $postIMG = get_the_post_thumbnail_url();
                                    } else {
                                        $postIMG = get_template_directory_uri().'/assets/img/blog/single/blog-post-1.jpg';
                                    }

                        ?>

                                    <article class="blog-list-item">

										<!-- Begin blog list item image -->
										<a href="<?php the_permalink(); ?>" class="bli-image-wrap" data-cursor="Read<br>More">
											<figure class="bli-image">
												<?php the_post_thumbnail(); ?>
											</figure>
										</a>
										<!-- End blog list item image -->
										
										<!-- Begin blog list item info -->
										<div class="bli-info">
											<div class="tt-bci-categories">
												<?php the_category(' & '); ?>
											</div>
											
											<h2 class="bli-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<div class="bli-meta"> 
												<span class="published"><?php the_time('j F, Y'); ?></span>
												<span class="ph-meta-posted-by">| &nbsp; by:&nbsp;<?php the_author_posts_link();?> &nbsp; |</span>
												<span class="ph-meta-posted-by"><?php echo get_num_visits( $post_id ) ?></span>
											</div>
											<div class="bli-desc"> <!-- 3 lines is optimal! -->
											    <?php the_excerpt(); ?>
											</div>
											<a href="<?php the_permalink(); ?>" class="bli-read-more tt-btn tt-btn-primary">
												<div data-hover="Read More">Read More</div>
												<span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
											</a>
										</div>
										<!-- End blog list item info -->

<!-- aqui acaba el bucle-->
                        <?php
                                endwhile;
                            else:
                                echo "No post has been published yet...";
                            endif;
                            
                            wp_reset_postdata(); // reseteamos el loop y lo dejamos preparado para la siguiente consulta
                        ?>
                        

								</div>
								<!-- End blog list -->

						<?php
							get_sidebar();// si queremos invocar a otra plantilla sidebar diferente si tenemos más tendríamos que 
		                    // crear el archivo por ejemplo sidebar-single.php y en la funcion poner por parametro la terminación de este archivo es decir
		                    // get_sidebar('single');
							
						?>
							<!-- Begin tt-pagination 
							=========================
							* Use class "tt-pagin-center" to align center.
							-->
							<div class="tt-pagination anim-fadeinup">
							    <?php
							    $big = 999999999; // need an unlikely integer
							    $pages = paginate_links(array(
							        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
							        'format' => '?paged=%#%',
							        'current' => max(1, get_query_var('paged')),
							        'total' => $query->max_num_pages, // Aquí está el cambio
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
					
<?php get_footer(); ?>