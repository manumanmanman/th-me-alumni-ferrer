<?php get_header(); ?>

	<main role="main">
		
		<!-- section news -->
		<section class="container ct-news">
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
							<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->

					<!-- post title -->
					<h3>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h3>
					<!-- /post title -->

				
					
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

						<p><?php $dateStart = get_the_date_start();
							if($dateStart != "")
							echo 'Le: ' . $dateStart ?></p>
						<p><?php 
							$dateEnd = get_the_date_end();
							if($dateEnd != $dateStart)
							echo 'Au: ' . $dateEnd; ?></p>
						

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
