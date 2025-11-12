	<!-- Begin sliding sidebar 
								=========================== 
								* Use class "tt-ss-right" to align sidebar to right.
								-->
								
								<div class="tt-sliding-sidebar-wrap">
									<div class="tt-sliding-sidebar">
										<div class="tt-sliding-sidebar-inner">

											<!-- Begin sidebar widget -->
											<div class="sidebar-widget sidebar-search">
												<h3 class="sidebar-heading">Search</h3>
												
												<!-- Begin form (Note: for design purposes only!) 
												================ 
												* Use class "tt-form-filled" or "tt-form-minimal" to change form style.
												* Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
												-->
												<form method="get" class="search-box" action="<?php echo home_url('/') ?>">
													<div class="tt-form-btn-inside">
														<input class="tt-form-control" type="text" value="" name="s" id="s" class="form-control" placeholder="Type something & hit enter" required="">
														<button type="submit"><i class="fas fa-search"></i></button>
													</div>
												</form>
												<!-- End form -->

											</div> 
											<!-- End sidebar widget -->

											<!-- Begin sidebar widget -->
											<div class="sidebar-widget sidebar-categories">
												<h3 class="sidebar-heading">Categories</h3>
												<ul class="list-unstyled">
												    <?php
                                                      $categorias = wp_list_categories('title_li=&show_count=1&echo=0');
                                                      $categorias = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="mybadge  pull-right">\\1</span></a>', $categorias);
                                                      // preg_replace reemplaza->(en un ancla que contenga"('0-9...') lo cambia por esto ^
                                                      echo $categorias;
                                                    ?>
												</ul>
											</div>
											<!-- End sidebar widget -->
											
											<!-- Begin sidebar widget -->
											<div class="sidebar-widget sidebar-categories">
                                                <h3 class="sidebar-heading">Tag cloud & Calendar</h3>
                                                <ul class="list-unstyled">
                                                    <?php 
                                                      if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets') ): // Preguntamos si hay widget en el área de widgets
                                                    ?>    
                                                      <p class="nno-widget">Sorry, no widget installed for this theme...!</p>
                                                    <?php 
                                                      endif; 

	                                                    $tags = get_tags();
	                                                    if ($tags) {
	                                                        echo '<div class="sidebar-tags tt-blog-post-tags"><ul>';
	                                                        foreach ($tags as $tag) {
	                                                            echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
	                                                        }
	                                                        echo '</ul></div>';
	                                                    } else {
	                                                        echo '<li class="cat-item"><p class="nno-widget">No hay etiquetas disponibles...!</p></li>';
	                                                    }
                                                    ?>
                                                </ul>
                                            </div>
											<!-- End sidebar widget -->

											<!-- Begin sidebar widget -->
											
											<div class="sidebar-widget sidebar-post-list">
												<!-- Can be "Recent Posts" or "Popular Posts" etc. -->
												<h3 class="sidebar-heading">Popular Posts</h3>
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
														<div class="sidebar-post-data">
															<h5 class="sidebar-post-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
															<!-- <span class="sidebar-post-author">By: <a href="">John Doe</a></span> -->
															<span class="sidebar-post-date"><?php the_time('j F, Y');?></span>
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
											<!-- End sidebar widget -->
											<!-- Begin sidebar widget -->
											<div class="sidebar-widget sidebar-categories">
                                                <h3 class="sidebar-heading">Authors</h3>
                                                <ul class="list-unstyled">
                                                    <?php
                                                        $args = array(
                                                            'optioncount' => 1,         // Visualiza el post publicados por ese autor
                                                            'echo' => 0,                // Nos devuelve la lista de autores en lugar de visualizarla
                                                            'hide_empty' => false,      // Se publican los autores sin posts
                                                            'orderby' => 'post_count',  // Ordena los autores segun el numero de post publicados
                                                            'order' => 'DESC',          // En orden de mayor numero de posts publicados a menor numero de post publicados
                                                        );
                                                        $authors = wp_list_authors($args);
                                                        $authors = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="mybadge  pull-right">\\1</span></a>', $authors);
                                                        $authors = str_replace('<a ', '<li class="cat-item"><a ', $authors);
                                                        $authors = str_replace('</a>', '</a></li>', $authors);
                                                        echo $authors;
                                                    ?>
                                                </ul>
                                            </div>
											<!-- End sidebar widget -->

											<!-- Begin sidebar widget -->
											<!--<div class="sidebar-widget sidebar-comments-list">-->
											<!--	<h3 class="sidebar-heading">Recent Comments</h3>-->
											<!--	<ul class="list-unstyled">-->
											<!--		<li class="sidebar-comment">-->
											<!--			<div class="sidebar-comment-meta">-->
											<!--				<div class="sidebar-comment-data">-->
											<!--					<span class="sidebar-comment-author"><a href="">John Doe</a></span>-->
											<!--					<span class="sidebar-comment-date">May 14, 2022</span>-->
											<!--				</div>-->
											<!--			</div>-->
											<!--			<div class="sidebar-comment-text">-->
											<!--				<a href="">Aliquet praesent tempor ac dolor aliquet. Risus mi vitae hendrerit orci vitae amet lacus tertis ...</a>-->
											<!--			</div>-->
											<!--		</li>-->

											<!--		<li class="sidebar-comment">-->
											<!--			<div class="sidebar-comment-meta">-->
											<!--				<div class="sidebar-comment-data">-->
											<!--					<span class="sidebar-comment-author"><a href="">David Bradley</a></span>-->
											<!--					<span class="sidebar-comment-date">May 14, 2022</span>-->
											<!--				</div>-->
											<!--			</div>-->
											<!--			<div class="sidebar-comment-text">-->
											<!--				<a href="">Laculis molestie rhoncus. Amet maecenas ut orci id dui. Et dui morbi. Non mauris nautis trettis ...</a>-->
											<!--			</div>-->
											<!--		</li>-->

											<!--		<li class="sidebar-comment">-->
											<!--			<div class="sidebar-comment-meta">-->
											<!--				<div class="sidebar-comment-data">-->
											<!--					<span class="sidebar-comment-author"><a href="">Kate Dixon</a></span>-->
											<!--					<span class="sidebar-comment-date">May 14, 2022</span>-->
											<!--				</div>-->
											<!--			</div>-->
											<!--			<div class="sidebar-comment-text">-->
											<!--				<a href="">Feugiat fringilla sequi. Anunc adipiscing nisl lorem morbi tincidunt gravida vistrim nocktac fitset ...</a>-->
											<!--			</div>-->
											<!--		</li>-->
											<!--	</ul>-->
											<!--</div>-->
											<!-- End sidebar widget -->

											<!-- Begin sidebar widget -->
											<!--<div class="sidebar-widget sidebar-tags">-->
											<!--	<h3 class="sidebar-heading">Tags</h3>-->
											<!--	<div class="sidebar-tags-list">-->
											<!--		<ul>-->
											<!--			<li><a href="blog-archive.html">#portfolio</a></li>-->
											<!--			<li><a href="blog-archive.html">#multipurpose</a></li>-->
											<!--			<li><a href="blog-archive.html">#minimal</a></li>-->
											<!--			<li><a href="blog-archive.html">#agency</a></li>-->
											<!--			<li><a href="blog-archive.html">#creatives</a></li>-->
											<!--			<li><a href="blog-archive.html">#freelancers</a></li>-->
											<!--			<li><a href="blog-archive.html">#design</a></li>-->
											<!--			<li><a href="blog-archive.html">#bootstrap</a></li>-->
											<!--			<li><a href="blog-archive.html">#responsive</a></li>-->
											<!--			<li><a href="blog-archive.html">#simple</a></li>-->
											<!--			<li><a href="blog-archive.html">#creative</a></li>-->
											<!--			<li><a href="blog-archive.html">#blog</a></li>-->
											<!--			<li><a href="blog-archive.html">#wordpress</a></li>-->
											<!--			<li><a href="blog-archive.html">#black &amp; white</a></li>-->
											<!--		</ul>-->
											<!--	</div> <!-- /.sidebar-tags-list -->
											<!--</div>-->
											<!-- End sidebar widget -->

											<!-- Begin sidebar widget -->
											<div class="sidebar-widget sidebar-meta">
												<h3 class="sidebar-heading">Pages</h3>
												<ul class="list-unstyled">
												    <?php 
                                                      $pages = get_pages();
                                                      foreach($pages as $page) {
                                                          if(!in_array($page->post_title, array('HOME', 'BLOG', 'PROJECTS', 'ARCHIVES', 'CONTACT'))) {
                                                              $excludeArray[] = $page->ID;
                                                          }
                                                      }
                                                      $args = array(
                                                          'exclude' => implode(',', $excludeArray), // implode convierte un array a un string pasando por parametro ('elemento para separar', un array)
                                                          'title_li' => '',                         // esto borra el título que pone por defecto en este caso Páginas
                                                      );
                                                      wp_list_pages($args);
                                                  ?>
												</ul>
											</div>
											<!-- End sidebar widget -->

										</div> <!-- /.tt-sliding-sidebar-inner -->
									</div> <!-- /.tt-sliding-sidebar -->

									<!-- Begin sliding sidebar trigger -->
									<div class="tt-sliding-sidebar-trigger hide-cursor">
										<span class="tt-ss-icon"><i class="fas fa-bars"></i></span>
										<span class="tt-ss-icon-close"><i class="fas fa-times"></i></span>
									</div>
									<!-- End sliding sidebar trigger -->

									<!-- Close overlay -->
									<div class="tt-sliding-sidebar-close cursor-close"></div>

								</div> 
								<!-- End sliding sidebar -->
