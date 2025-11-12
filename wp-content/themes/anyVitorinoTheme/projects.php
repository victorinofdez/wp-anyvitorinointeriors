<?php
/*
 * Template Name: Projects
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
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-light.png"
                    class="ptr-prel-image tt-logo-light" alt="Logo">
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
            <div class="tt-header-inner">
                <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes can be found in the file "helper.css". -->

                <div class="tt-header-col">

                    <!-- Begin logo 
							================ -->
                    <div class="tt-logo">
                        <a href="<?php echo home_url();?>">
                            <!-- Hint: You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-logo img"). -->
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-light.png"
                                class="tt-logo-light magnetic-item" alt="Logo"> <!-- logo light -->
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
                                        <li><a href="<?php echo get_page_link(get_page_object('BLOG')->ID);?>">Blog</a>
                                        </li>
                                        <li class="active"><a
                                                href="<?php echo get_page_link(get_page_object('PROJECTS')->ID); ?>">Projects</a>
                                        </li>
                                        <li><a
                                                href="<?php echo get_page_link(get_page_object('ARCHIVES')->ID); ?>">Archives</a>
                                        </li>
                                        <li><a
                                                href="<?php echo get_page_link(get_page_object('CONTACT')->ID); ?>">Contact</a>
                                        </li>
                                        <li><a href="<?php echo get_page_link(get_page_object('PRIVATE')->ID); ?>">Private
                                                Zone</a></li>

                                    </ul>
                                    <!-- End menu list -->

                                    <!-- Begin overlay menu social links 
											===================================== -->
                                    <ul class="tt-ol-menu-social">
                                        <li>
                                            <h6 class="tt-ol-menu-social-heading">Social Links:</h6>
                                        </li>
                                        <li><a href="https://www.facebook.com/" target="_blank"
                                                rel="noopener">Facebook</a></li>
                                        <li><a href="https://twitter.com/" target="_blank" rel="noopener">Twitter</a>
                                        </li>
                                        <li><a href="https://www.youtube.com/" target="_blank"
                                                rel="noopener">Youtube</a></li>
                                        <li><a href="https://dribbble.com/" target="_blank" rel="noopener">Dribbble</a>
                                        </li>
                                        <li><a href="https://www.behance.net/" target="_blank"
                                                rel="noopener">Behance</a></li>
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

                        <h1 class="ph-caption-title">
                            <div class="ph-appear">Projects</div>
                            <!-- You can use <br> to break a text line if needed -->
                        </h1>
                        <div class="ph-caption-title-ghost">
                            <div class="ph-appear">Projects</div>
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
            <!--/********************************************************************************************************************************/-->


            <div id="page-content">
                <div class="tt-section">
                    <div class="tt-section-inner tt-wrap max-width-900">
                        <div id="blog-list" class="bli-image-cropped">
                            <?php
                                    $paged = get_query_var('paged') > 1 ? get_query_var('paged') : 1;
                                    $args = array(
                                        'paged' => $paged,
                                        'posts_per_page' => 3,
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
                            <article class="blog-list-item">
                                <a href="<?php the_permalink(); ?>" class="bli-image-wrap" data-cursor="Read<br>More">
                                    <figure class="bli-image">
                                        <?php the_post_thumbnail(); ?>
                                    </figure>
                                </a>
                                <div class="bli-info">
                                    <div class="tt-bci-categories">
                                        <?php 
                                                	do_shortcode("[vfh_show_categories id=".get_the_ID()."]");
                                                ?>
                                    </div>
                                    <h2 class="bli-title"><a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a></h2>
                                    <div class="bli-meta">
                                        <span class="published">
                                            <?php the_time('j F, Y'); ?>
                                        </span>
                                        <span class="ph-meta-posted-by">| &nbsp; by:&nbsp;
                                            <?php the_author_posts_link();?> &nbsp; |
                                        </span>
                                        <span class="ph-meta-posted-by">
                                            <?php echo get_num_visits( get_the_ID() ) ?>
                                        </span>
                                    </div>
                                    <div class="bli-desc">
                                        <?php do_shortcode("[vfh_show_main_fields id=".get_the_ID()."]");?>
                                        <?php the_excerpt();?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="bli-read-more tt-btn tt-btn-primary">
                                        <div data-hover="Read More">Read More</div>
                                        <span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </article>
                            <?php
                                        endwhile;
                                    else:
                                        echo "No hay posts publicados";
                                    endif;
                                    wp_reset_postdata();
                                    ?>
                        </div>
                    </div>
                </div>
            </div>




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
            <!-- End tt-pagination -->

        </div> <!-- /.tt-section-inner -->
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
						<footer id="tt-footer" style="">
						<div class="tt-footer-inner">

							<!-- Begin footer column 
							========================= -->
							<div class="footer-col tt-align-center-left">
								<div class="footer-col-inner">

									<a href="#" class="tt-btn tt-btn-link scroll-to-top">
										<span class="tt-btn-icon"><i class="fas fa-arrow-up" aria-hidden="true"></i></span>
										<div data-hover="Back to Top">Back to Top</div>
									</a>

								</div> <!-- /.footer-col-inner -->
							</div>
							<!-- Begin footer column -->

							<!-- Begin footer column 
							========================= -->
							<div class="footer-col tt-align-center order-m-last">
								<div class="footer-col-inner">

									<div class="tt-copyright text-gray">
										<a href="#" target="_blank" rel="noopener" class="tt-btn tt-btn-link">
											<span class="tt-btn-icon"><i class="far fa-copyright" aria-hidden="true"></i></span>
											<div data-hover="vito.dev">vito.dev</div>
										</a>
									</div>

								</div> <!-- /.footer-col-inner -->
							</div>
							<!-- Begin footer column -->

							<!-- Begin footer column 
							========================= -->
							<div class="footer-col tt-align-center-right">
								<div class="footer-col-inner">

									<div class="footer-social">
										<div class="footer-social-text"><span>Follow</span><i class="fas fa-share-alt" aria-hidden="true"></i></div>
										<div class="social-buttons">
											<ul>
												<li><div class="magnetic-wrap"><a href="https://www.facebook.com/" class="magnetic-item not-hide-cursor" target="_blank" rel="noopener"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></div></li>
												<li><div class="magnetic-wrap"><a href="https://twitter.com/" class="magnetic-item not-hide-cursor" target="_blank" rel="noopener"><i class="fab fa-twitter" aria-hidden="true"></i></a></div></li>
												<li><div class="magnetic-wrap"><a href="https://www.youtube.com/" class="magnetic-item not-hide-cursor" target="_blank" rel="noopener"><i class="fab fa-youtube" aria-hidden="true"></i></a></div></li>
												<li><div class="magnetic-wrap"><a href="https://dribbble.com/" class="magnetic-item not-hide-cursor" target="_blank" rel="noopener"><i class="fab fa-dribbble" aria-hidden="true"></i></a></div></li>
												<li><div class="magnetic-wrap"><a href="https://www.behance.net/" class="magnetic-item not-hide-cursor" target="_blank" rel="noopener"><i class="fab fa-behance" aria-hidden="true"></i></a></div></li>
											</ul>
										</div> <!-- /.social-buttons -->
									</div> <!-- /.footer-social -->

								</div> <!-- /.footer-col-inner -->
							</div>
							<!-- Begin footer column -->

						</div> <!-- /.tt-section-inner -->
					</footer>
						
        <!-- End tt-section -->

    </div>
    <!-- End tt-section -->





    <!-- End page content -->


    <?php
get_footer();
?>