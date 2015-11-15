<?php
/**
 * Anpassung
 */
?>
<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9 col-9">
				<div class="content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<section class="main">
							<article class="post" id="post-<?php the_ID(); ?>">
								<section class="post-content">
        							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        							<p><?php echo the_content(); ?></p>
    							</section>
    						</article>
						</section>
					<?php endwhile; else: ?>
					<p><?php _e('Diese Seite gibt es nicht :('); ?></p>
					<?php endif; ?>
				</div> <!-- /.content -->
			</div> <!-- /.col-lg-9 /.col-md-9 /col-sm-9 /.col-9 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
<?php get_footer(); ?>
