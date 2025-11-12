<?php
/**
 * Template Name: Private
 * 
 */
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
							<nav class="tt-overlay-menu tt-ol-menu-count">
								<div class="tt-ol-menu-ghost">Explore</div>
								<div class="tt-ol-menu-holder">
									<div class="tt-ol-menu-inner tt-wrap">
										<div class="tt-ol-menu-content">
							
											<!-- Begin menu list -->
											<ul class="tt-ol-menu-list">
							
												<li><a href="<?php echo home_url();?>">Home</a></li>
												<li><a href="<?php echo get_page_link(get_page_object('BLOG')->ID);?>">Blog</a></li>
												<li><a href="<?php echo get_page_link(get_page_object('PROJECTS')->ID); ?>">Projects</a></li>
												<li><a href="<?php echo get_page_link(get_page_object('ARCHIVES')->ID); ?>">Archives</a></li>
												<li><a href="<?php echo get_page_link(get_page_object('CONTACT')->ID); ?>">Contact</a></li>
												<li class="active"><a href="<?php echo get_page_link(get_page_object('PRIVATE')->ID); ?>">Private Zone</a></li>
												
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
					<div id="page-header" class="ph-cap-lg ph-ghost-scroll ph-image-cropped ph-image-cover-2 ph-content-parallax">
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
							<div class="ph-caption">
								<h1 class="ph-caption-title">
									<div class="ph-appear">Login</div>
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear">Private zone</div>
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
						    <div class="form-login">
						    <?php
                                // Comprobamos si el usuario no está logueado para visualizar el formulario de login personalizado
                                if (!is_user_logged_in()) {
                                    ?>
                                    <!-- Begin custom login form -->
                                    <form class="tt-form-filled tt-form-private" action="<?php echo esc_url(site_url('wp-login.php', 'login_post')); ?>" method="post">
                                        <div class="tt-form-group">
                                            <label>Name</label>
                                            <input class="tt-form-control form-private" id="user_login" name="log" type="text" placeholder="Enter your name">
                                        </div>
                                
                                        <div class="tt-form-group">
                                            <label>Password</label>
                                            <input class="tt-form-control form-private" id="user_pass" name="pwd" type="password" placeholder="Enter password">
                                        </div>
                                
                                        <div class="tt-form-group">
                                            <label>Remember Me</label>
                                            <input class="tt-form-control form-private" id="rememberme" name="rememberme" type="checkbox">
                                        </div>
                                
                                        <div class="tt-form-group">
                                            <button type="submit" class="tt-btn tt-btn-primary">
                                                <!-- <span class="tt-btn-icon"><i class="fas fa-paper-plane"></i></span> -->
                                                <div data-hover="Submit">Submit</div>
                                            </button>
                                            <input type="hidden" name="redirect_to" value="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
                                        </div>
                                    </form>
                                    <!-- End custom login form -->
                                <?php
                                } else {
                                    // Si está logueado, saludamos y visualizamos los botones para ir al admin-area
                                    ?>
                                    <div class="cardlogin">
                                        <?php
                                        $user = wp_get_current_user();
                                        $user_name = $user->display_name;
                                        $rol = get_author_role($user->ID);
                                        echo '<h4>Hello <span>' . $user_name . '</span>!</h4>';
                                    ?> 
                                    	</br> 
                                    <?php
                                        echo '<h6>' . $rol . '</h6>';
                                        do_shortcode('[vfh_show_message id="'.$user->ID.'"]');
                                        do_shortcode('[saludo name="hola"]');
                                        ?>
                                    <?php
                                        // Visualizamos el botón que nos dirige al admin-area
                                        wp_register('', '');
                                        echo '</br>';
                                        echo '</br>';
                                        // Visualizamos el botón de log out
                                        wp_loginout(get_permalink());
                                        echo '</br>';
                                        echo '</br>';
                                    ?>
                                    </div>
                                    <?php
                                }
                            ?>
                            </div>
					    </div>
					</div>
					<!-- End page content -->
					


<?php
get_footer();
?>