<?php get_header(); ?>


<section>
            <div class="home" id="home">
                <div class="main-container">
                </div>
                <div class="intro">
                    <h3>Hi,there! I'm</h3>
                    <h1>Sayuri</h1>
                    <h6>Web designer <br>Adventurer <br>Action-oriented </h6>
                </div>

                <div class="intro-side">
                    <h1>Infinite Journey</h1>
                </div>    
            </div>    
        </section>    
    </div>

    <section class="about" id="about">
        <div class="box1">
            <div class="title">
                <h1>About me</h1>
            </div>

            <div class="content">
                <h3>Hello! I'm Sayuri Takagaki, <br>Web designer based in Tokyo Japan.</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores reiciendis obcaecati sequi magni. Modi labore quae neque beatae magni iure, sapiente, maiores veritatis quis illo ad sed voluptatem! Numquam possimus minima officia, quas dicta in enim nam quod praesentium veritatis, maiores pariatur repudiandae aperiam sit reprehenderit deleniti illum, placeat iste excepturi a amet! Deserunt amet eum, ea libero adipisci accusantium possimus eius neque ipsum natus molestiae iure doloribus praesentium minus magnam velit voluptatem odit animi excepturi voluptates pariatur sint harum. Quaerat tempore aspernatur earum consequatur iste iure fugit quia alias nisi nulla? Tempore optio, inventore sed sequi temporibus eligendi nostrum!</p>
            </div>

            <div class="pic"></div> 
        </div>       
    </section>

    <section class="work" id="work">
       
        <div class="title">
            <h1>Work</h1>
        </div>

        <div class="portfolio">
            <div class="portfolio-container p1">
                <div class="portfolio-item">
                    <div class="item">
                    <img src="http://source.unsplash.com/1600x900/?nature" alt="">
                    </div>
                    <div class="text">Nature</div>
                </div>    
            </div>   
            
            <div class="portfolio-container p2">
                <div class="portfolio-item">
                    <div class="item">
                        <img src="http://source.unsplash.com/1600x900/?woman" alt="">
                    </div>
                    <div class="text">woman</div>
                </div>    
            </div>   

            <div class="portfolio-container p3">
                <div class="portfolio-item">
                    <div class="item">
                        <img src="http://source.unsplash.com/1600x900/?sport" alt="">
                    </div>
                    <div class="text">Sport</div>
                </div>    
            </div>   

            <div class="portfolio-container p4">
                <div class="portfolio-item">
                    <div class="item">
                        <img src="http://source.unsplash.com/1600x900/?adventure" alt="">
                    </div>
                    <div class="text">Adventure</div>
                </div>   
            </div>   

            <div class="portfolio-container p5">
                <div class="portfolio-item">
                    <div class="item">
                        <img src="http://source.unsplash.com/1600x900/?smile" alt="">
                    </div>
                    <div class="text">Smile</div>
                </div>    
            </div>   

            <div class="portfolio-container p6">
                <div class="portfolio-item">
                    <div class="item">
                        <img src="http://source.unsplash.com/1600x900/?animal" alt="">
                    </div>
                    <div class="text">Animal</div>
                </div>
            </div>   

            <div class="portfolio-container p7">
                <div class="portfolio-item">
                    <div class="item">
                        <img src="http://source.unsplash.com/1600x900/?food" alt="">
                    </div>
                    <div class="text">Food</div>
                </div>    
            </div> 
        </div>  
    </section>

    <section class="contact" id="contact">
        <div class="title">
            <div class="img"></div>
            <h3>I'm ready to roll</h3>
            <h1>GET in TOUCH</h1>
        </div>
        <form action="#">
            <div class="form-container">
                <div class="input">
                    <i class="far fa-user"></i>
                    <input type="text" placeholder="Name">
                </div>

                <div class="input">
                    <i class="far fa-envelope"></i>
                    <input type="email" placeholder="Email">
                </div>

                <div class="input">
                    <i class="far fa-comment-dots"></i>
                    <input type="text" placeholder="Subject">
                </div>

                <div class="input">
                    <i class="far fa-file-alt"></i>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                </div>

                <button>Send</button>
            </div>
        </form>
    </section>

// mine done here 

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline entry-meta vcard">
                                                                        <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
                       								/* the time the post was published */
                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       								/* the author of the post */
                       								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    							); ?>
									</p>

								</header>

								<section class="entry-content cf">
									<?php the_content(); ?>
								</section>

								<footer class="article-footer cf">
									<p class="footer-comment-count">
										<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
									</p>


                 	<?php printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>


								</footer>

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
