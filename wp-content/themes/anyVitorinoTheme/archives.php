<?php 
/*
*Template Name: Archives
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
												<li><a href="<?php echo get_page_link(get_page_object('BLOG')->ID);?>">Blog</a></li>
												<li><a href="<?php echo get_page_link(get_page_object('PROJECTS')->ID); ?>">Projects</a></li>
												<li class="active"><a href="<?php echo get_page_link(get_page_object('ARCHIVES')->ID); ?>">Archives</a></li>
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
					<div id="page-header" class="ph-cap-lg ph-ghost-scroll ph-image-cropped ph-image-cover-2 ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header image 
							============================= -->
							<!-- <div class="ph-image">
								<div class="ph-image-inner">
									<img src="/assets/img/page-header/ph-3.jpg" alt="Image">
								</div>
							</div> -->
							<!-- End page header image -->

							<!-- Begin page header caption
							=============================== 
							Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="ph-caption">
								<h1 class="ph-caption-title">
									<div class="ph-appear">Archives</div>
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear">Directory Archives</div>
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
						<div class="tt-section">
							<div class="tt-section-inner">

								<!-- Begin portfolio grid (works combined with tt-Ggrid!)
								========================== 
								* Use class "pgi-hover" to enable portfolio grid item hover effect (behavior depends on "ttgr-gap-*" classes below!).
								* Use class "pgi-cap-hover" to enable portfolio grid item caption hover effect (effect only with class "pgi-cap-inside"! Also no effect on mobile devices!).
								* Use class "pgi-cap-center" to position portfolio grid item caption to center.
								* Use class "pgi-cap-inside" to position portfolio grid item caption to inside.
								--> 
								<div id="portfolio-grid" class="pgi-cap-inside pgi-cap-hover">

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
									<div class="tt-grid ttgr-layout-2-1 ttgr-gap-3">

										<!-- Begin tt-Ggrid top content 
										================================ -->
									


										<!-- Begin tt-Grid items wrap 
										============================== -->
										<div class="grid">    
                                          <div class="grid-item sizer">  
                                            <div class="card-body">
                                            	<h3 class="">
	                                              <span class="">
	                                                list post
	                                              </span>
	                                            </h3>
                                              <ul class="last-entries">
                                                  <?php
                                                    $args=array(
                                                        'post_per_page' => 10,//maximo 10 posts
                                                        'meta_key' => 'numvisits',//Vamos a filtrar por el metadato numvisits
                                                        'orderby' => 'meta_value_num',// Ordenamos por el valor numérico del metadato
                                                        'order' => 'DESC',
                                                    );
                                                    $popular = get_posts( $args );
                                                    
                                                    if( empty($popular)){
                                                      echo'No posts published yet';
                                                    }else{
                                                      foreach($popular as $post) {
                                                            echo '<li><a href="'.get_permalink( $post->ID ).'">'.$post->post_title.'</a><span class="badge pull-rigth">'.$post->numvisits.'</span></li>';
                                                        }
                                                    }
                                                  ?>
                                              </ul>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="grid-item sizer">  
                                            <div class="card-body">
                                            	<h3 class="">
	                                              <span class="">
	                                                List Categories
	                                              </span>
	                                            </h3>
                                              <ul class="list-unstyled">
                                                  <?php 
                                                    $categories = wp_list_categories('title_li=&show_count=1&echo=0');
                                                    $categories = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="mybadge  pull-right">\\1</span></a>', $categories);
                                                    echo $categories;
                                                  ?>
                                              </ul>
                                          </div>
                                        </div>
                                        
                                        
                                        <div class="grid-item sizer">  
                                        		
                                            <div class="sidebar-tags tt-blog-post-tags card-body-tags">
                                            	<h3 class="">
	                                              <span class="">
	                                                Blog Tags
	                                              </span>
	                                            </h3>
                                              <ul class="list-unstyled">
                                                  <?php 
                                                    get_list_tags( 15 );
                                                  ?>
                                              </ul>
                                          </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="grid-item sizer">  
                                            <div class="card-body">
                                            	<h3 class="">
	                                              <span class="">
	                                                Authors
	                                              </span>
	                                            </h3>
                                                <ul class="last-entries">
                                                  <?php
                                                  $args = array(
                                                    'hide_empty' => false,
                                                    'optioncount' => 1,
                                                    'echo' => 0
                                                  );
                                
                                                  $authors = wp_list_authors($args);
                                                  $authors = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="mybadge  pull-right">\\1</span></a>', $authors);
                                                  echo $authors;
                                                  wp_list_authors($args);
                                                  ?>
                                                </ul>
                                              </div>
                                        </div>
                                        
                                        
                                         <?php
                                          //Bucle para recorrer los autores
                                          //Necesitamos conseguir todos los autores, pero solo su nombre y su id
                                          $args = array('display_name', 'ID');
                                          $authors = get_users($args); //Devuelve una colección de objetos de todo los autores
                                          foreach ($authors as $author) {
                            
                                        ?>
                                        
                                        
                                        <div class="grid-item sizer">  
                                            <div class="card-body">
                                            	<h3 class="">
	                                              <span class="">
	                                                <?php echo $author->display_name; ?>
	                                              </span>
	                                            </h3>
                                              <ul class="last-entries">
                                                <?php
	                                                $args = array(
	                                                  'author' => $author->ID,
	                                                );
	                                                $post_by_author = get_posts($args); //devuelve una coleccion de posts de ese autor
	                                                if (empty($post_by_author)) {
	                                                  echo 'No posts published yet';
	                                                } else {
	                                                  foreach ($post_by_author as $post) {
	                                                    echo '<li><a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a></li>';
	                                                  }
	                                                }
                                                ?>
                                              </ul>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        
		                                         <?php
		                                        	}
		                                          ?>
                                        
                                        
                                        
                                        <div class="grid-item sizer">  
                                            <div class="card-body">
                                            	<h3 class="">
	                                              <span class="">
	                                                Daily Archives
	                                              </span>
	                                            </h3>
                                            <ul class="last-entries">
                                              <?php
                                              $args = array(
                                                'type' => 'daily', //quiere las fechas por dias
                                                'show_post_count' => true, // Con el número de posts publicados ese dia
                                                'limit' => 30, //Maximo los ultimos 30 dias con post publicados
                                                'echo' => false, //quiero recogr el listado, no visualizarlo
                                              
                                              );
                                              $daily = wp_get_archives($args);
                                              $daily = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="mybadge  pull-right">\\1</span></a>', $daily);
                                              echo $daily;
                                              ?>
                                            </ul>
                                          </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="grid-item sizer">  
                                            <div class="card-body">
                                            	<h3 class="">
	                                              <span class="">
	                                                Monthly Archives
	                                              </span>
	                                            </h3>
                                                <ul class="last-entries">
                                                  <?php
                                                      $args = array(
                                                        'type' => 'monthly', //quiere las fechas por meses
                                                        'show_post_count' => true, // Con el número de posts publicados ese dia
                                                        'limit' => 30, //Maximo los ultimos 30 dias con post publicados
                                                        'echo' => false, //quiero recogr el listado, no visualizarlo
                                                      
                                                      );
                                                      $daily = wp_get_archives($args);
                                                      $daily = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="mybadge  pull-right">\\1</span></a>', $daily);
                                                      echo $daily;
                                                  ?>
                                                </ul>
                                              </div>
                                        </div>
                                        
                                        
                                        
                                       
                                        
                                        
                                         <div class="grid-item sizer">  
                                            <div class="card-body">
                                            	<h3 class="">
	                                              <span class="">
	                                                Yearly Archives
	                                              </span>
	                                            </h3>
                                                <ul class="last-entries">
                                                  <?php
                                                  $args = array(
                                                    'type' => 'yearly', //quiere las fechas por dias
                                                    'show_post_count' => true, // Con el número de posts publicados ese dia
                                                    'limit' => 30, //Maximo los ultimos 30 dias con post publicados
                                                    'echo' => false, //quiero recogr el listado, no visualizarlo
                                                  
                                                  );
                                                  $daily = wp_get_archives($args);
                                                  // $space = wp_space_regexp();
                                                  // $daily = preg_replace('/<\/a>'.$space.' \(([0-9]+)\)/', ' <span class="mybadge  pull-right">\\1</span></a>', $daily);
                                                  echo $daily;
                                                  ?>
                                                </ul>
                                              </div>
                                        </div>
                                        
                                        <div class="grid-item sizer"> 
                                          <div class="card-body">
                                          	
                                          		<h3 class="">
	                                              <span class="">
	                                                Most Popular Posts
	                                              </span>
	                                            </h3>
                                            <ul class="last-entries">
                                              <?php
                                              $args = array(
                                                'post_per_page' => 10, //maximo 10 posts
                                                'meta_key' => 'numvisits', //Vamos a filtrar por el metadato numvisits
                                                'orderby' => 'meta_value_num', // Ordenamos por el valor numérico del metadato
                                                'order' => 'DESC',
                                              );
                                              $popular = get_posts($args);
                            
                                              if (empty($popular)) {
                                                echo 'No posts published yet';
                                              } else {
                                                foreach ($popular as $post) {
                                                  echo '<li><a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a><span class="badge pull-rigth">' . $post->numvisits . '</span></li>';
                                                }
                                              }
                                              ?>
                                            </ul>
                                          </div>
                                        </div>
                                        
                                    
                                    </div>   

								</div>
									<!-- End tt-Grid -->

								</div>
								<!-- End portfolio grid -->


								<!-- Begin tt-pagination (uncomment below code if you want to use pagination)
								========================= 
								* Use class "tt-pagin-center" to align center.
								-->
								<!-- <div class="tt-pagination tt-pagin-center anim-fadeinup">
									<div class="tt-pagin-prev">
										<a href="" class="tt-pagin-item magnetic-item"><i class="fas fa-chevron-left"></i></a>
									</div>
									<div class="tt-pagin-numbers">
										<a href="#" class="tt-pagin-item magnetic-item active">1</a>
										<a href="" class="tt-pagin-item magnetic-item">2</a>
										<a href="" class="tt-pagin-item magnetic-item">3</a>
										<a href="" class="tt-pagin-item magnetic-item">4</a>
									</div>
									<div class="tt-pagin-next">
										<a href="" class="tt-pagin-item tt-pagin-next magnetic-item"><i class="fas fa-chevron-right"></i></a>
									</div>
								</div> -->
								<!-- End tt-pagination -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->
                        
						<?php get_sidebar(); ?>
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
									<a href="contact.html" class="tt-pn-link anim-fadeinup" data-cursor="<i class='fas fa-envelope'></i>">
										<div class="tt-pn-title">Let's talk</div>
										<div class="tt-pn-hover-title">Let's talk</div>
									</a> <!-- /.tt-pn-link -->
									<div class="tt-pn-subtitle anim-fadeinup">Get in Touch</div>
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
