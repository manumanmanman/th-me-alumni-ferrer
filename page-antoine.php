<?php get_header(); ?>

	<main role="main">
		
		<!-- section news -->
		<section class="container ct-news">
				<div class="row">
						<div id="accueil" class="button col-12 col-md-1 mt-md-0 mt-2 tri" data-filter="article"><a>All</a></div>
						<div id="art" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="arts-appliques"><a>Arts appliqués</a></div>
						<div id="eco" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="economique-cooremans"><a>Economie</a></div>
						<div id="para" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="paramedical"><a>Paramédicale</a></div>
						<div  id="peda" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="pedagogique-bulls"><a>Pédagogique</a></div>
						<div id="social" class="button col-12 col-md-1 mt-md-0 mt-2 tri" data-filter="social-cooremans"><a>Social</a></div>
						<div id="tech" class="button col-12 col-md-2 mt-md-0 mt-2 tri" data-filter="technique"><a>Technique</a></div>
					</div>
		<div class="row">
			<h2 class="col-12"> News</h2>
			
			<?php query_posts('category_name=actualite');
					 while ( have_posts() ) : the_post(); ?>
				<div class="article col-3 <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(400,400)); // Declare pixel size you need inside the array ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->

					<!-- post title -->
					<h3>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h3>
					<!-- /post title -->

					<!-- post details -->
					<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
					<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
					<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
					<!-- /post details -->

					<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

					<?php edit_post_link(); ?>

				</article>
				</div>
				<!-- /article -->

			  <?php endwhile;
	wp_reset_query();?>

			<?php //get_template_part('pagination'); ?>
			</div> <!-- Row news -->

		</section>
		<!-- /section news -->
		
		
		<!-- section events -->
		<section class="container ct-events">
			<div class="row">
			<h2 class="col-12"> Events</h2>
				<?php query_posts('category_name=evenement');
					 while ( have_posts() ) : the_post(); ?>
					<div class="article col-3  <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->

						<!-- post title -->
						<h3>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h3>
						<!-- /post title -->

						<!-- post details -->
						<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
						<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
						<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
						<!-- /post details -->

						<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

						<?php edit_post_link(); ?>

					</article>
					</div>
					<!-- /article -->

			  <?php endwhile;
				wp_reset_query();?>

			</div> <!-- Row events -->
		</section>
		<!-- /section events -->
		
		<!-- section Galerie -->
		<section class="container ct-galerie">
		<div class="row">
			<h2 class="col-12"> Galeries</h2>
			<?php query_posts('category_name=galerie');
					 while ( have_posts() ) : the_post(); ?>
				<div class="article col-3  <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>">
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->

					<!-- post title -->
					<h3>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h3>
					<!-- /post title -->

					<!-- post details -->
					<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
					<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
					<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
					<!-- /post details -->

					<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

					<?php edit_post_link(); ?>

				</article>
				</div>
				<!-- /article -->

			  <?php endwhile;
	wp_reset_query();?>

			<?php //get_template_part('pagination'); ?>
			</div> <!-- Row news -->

		</section>
		<!-- /section galerie -->
		
	
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
