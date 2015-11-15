<?php get_header(); ?>
    <section id="about" class="home-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
              <div class="section-heading">
                  <main role="main">     
                     <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                <div class="content">
                                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                    <?php get_template_part( 'content', get_post_format() ); ?>
                                    <?php endwhile; else: ?>
                                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                                    <?php endif; ?>
                                    <div id="nav-post"><?php posts_nav_link('  ', __('<button class="button">« Neuere Beiträge</button>'), __('<button class="button">Ältere Beiträge »</button>')); ?></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                  </main>
              </div>
             </div>
            </div>
         </section>
          </div>
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>
