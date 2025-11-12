<?php
    $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
    
    // echo $curauth->nickname;
    // echo $curauth->first_name;
    // echo $curauth->last_name;
    // echo get_author_role( $curauth->ID );
    // echo $curauth->description;
	$user_id = $curauth->ID;
    $user_pic = get_user_meta($user_id, 'user_pic', true); // Obtiene la ruta de la foto del usuario.
    get_header();

	$skill1 = get_user_meta($user_id, 'skill1V', true); // Obtiene la ruta de la foto del usuario.
    $skill2 = get_user_meta($user_id, 'skill2V', true); // Obtiene la ruta de la foto del usuario.
    $skill3 = get_user_meta($user_id, 'skill3V', true); // Obtiene la ruta de la foto del usuario.
    $skill4 = get_user_meta($user_id, 'skill4V', true); // Obtiene la ruta de la foto del usuario.
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
								<a href="index.html">
									<!-- Hint: You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-logo img"). -->
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-light.png" class="ptr-prel-image tt-logo-light" alt="Logo">
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
					<div id="page-header" class="ph-full ph-cap-lg ph-ghost-scroll ph-image-cropped ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header image 
							============================= -->
							<div class="ph-image">
								<div class="ph-image-inner">
									<img src="<?php echo $user_pic  ?>" alt="Image">
								</div>
							</div>
							<!-- End page header image -->

							<!-- Begin page header caption
							=============================== 
							Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="ph-caption max-width-1000">
								<div class="ph-caption-subtitle">
									<div class="ph-appear"></div>
								</div>
								<h1 class="ph-caption-title">

									<div class="ph-appear"><?php echo $curauth->first_name; ?></div> <!-- You can use <br> to break a text line if needed -->
									
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear"><?php echo $curauth->last_name; ?></div>
								</div>
								<ul class="social-icons ph-appear ph-caption-subtitle">
								        <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
								        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
								        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
								        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
								        <li><a href="" class="social-icon"> <i class="fa fa-github"></i></a></li>
								</ul>
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
							<div class="tt-section-inner tt-wrap max-width-900">

								<div class="text-xxlg">
									<h2 class="anim-fadeinup">Hello, Friend!</h2>

									<p class="anim-fadeinup"><?php echo $curauth->description;?></p>

								</div>

								<div class="tt-signature anim-fadeinup margin-top-40">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/signature-light.png" class="tt-signature-light" alt="Signature">
								</div>
								</br>
								</br>
								</br>
								</br>
								</br>
								</br>
								</br>
								</br>
								<div class="tt-page-nav tt-pn-stroke tt-pn-center">
									<a href="#" class="tt-pn-link anim-fadeinup" data-cursor="<i class='fas fa-arrow-right'></i>">
										<div class="tt-pn-title">MY SKILLS</div>
										<div class="tt-pn-hover-title">MY SKILLS</div>
									</a> <!-- /.tt-pn-link -->
								</div>
								</br>
								</br>
								
								<div class="container-progressbar">
                                            <div class="item-progressbar">
                                                <h5><?php echo get_user_meta($user_id, 'skill1', true)   ?></h5>
                                                <div class="progress"  style="background-color: #272727;">
                                                    <div class="progress-bar" role="progressbar" style="background-color: #666; width: <?php echo $skill1; ?>%" aria-valuenow="<?php echo $skill1; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            </br>
								
                                            <div class="item-progressbar">
                                                <h5><?php echo get_user_meta($user_id, 'skill2', true)   ?></h5>
                                               <div class="progress"  style="background-color: #272727;">
                                            <div class="progress-bar" role="progressbar" style="background-color: #666; width: <?php echo $skill2; ?>%" aria-valuenow="<?php echo $skill2; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                            </div>
                                            </br>
                                             <div class="item-progressbar">
                                                <h5><?php echo get_user_meta($user_id, 'skill3', true)   ?></h5>
                                               <div class="progress"  style="background-color: #272727;">
                                            <div class="progress-bar" role="progressbar" style="background-color: #666; width: <?php echo $skill3; ?>%" aria-valuenow="<?php echo $skill3; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                            </div>
                                            </br>
                                             <div class="item-progressbar">
                                                <h5><?php echo get_user_meta($user_id, 'skill4', true)   ?></h5>
                                                <div class="progress"  style="background-color: #272727;">
                                            <div class="progress-bar" role="progressbar" style="background-color:#666; width: <?php echo $skill4; ?>%" aria-valuenow="<?php echo $skill4; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                            </div>
                                            
                                            
                                            
                                </div>
                                </br>
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
								<div class="tt-page-nav tt-pn-stroke tt-pn-center">
									<a href="portfolio-grid-creative.html" class="tt-pn-link anim-fadeinup" data-cursor="<i class='fas fa-arrow-right'></i>">
										<div class="tt-pn-title">MY LAST POSTS</div>
										<div class="tt-pn-hover-title">MY LAST POSTS</div>
									</a> <!-- /.tt-pn-link -->
								<div class="tt-pn-subtitle anim-fadeinup">Surf my post</div>
								</br></br>
									<div class="posts">
										<?php
				                               $args = array(
								                    'posts_per_page' => 3,
								                    'author' => $curauth->ID,
								                    );
								                $query = new WP_Query($args);
								                if($query->have_posts()):
								                  while($query->have_posts()):
								                    $query->the_post();
		                                        if (has_post_thumbnail()) {
		                                            $postIMG = get_the_post_thumbnail_url();
		                                        } else {
		                                            $postIMG = get_template_directory_uri().'/assets/img/blog/single/blog-post-1.jpg';
		                                        }
		                        
		                    
		                            	?>
		                            
		                            
		                                    <article class="blog-list-item postDestacado">
		
												<!-- Begin blog list item image -->
												<a href="<?php the_permalink(); ?>" class="bli-image-wrap a-postAuthor" data-cursor="Read<br>More">
													<figure class="bli-image img-postDestacado">
														<?php the_post_thumbnail(); ?>
													</figure>
												</a>
												<!-- End blog list item image -->
												
												<!-- Begin blog list item info -->
												<div class="bli-info info-postAuthor">
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
									<!-- End page nav -->
									</div>
							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


					</div>
					<!-- End page content -->



<?php

    get_footer();

?>