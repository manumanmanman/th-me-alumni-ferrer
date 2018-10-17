<?php get_header(); ?>

	<main role="main">
		<!-- section events -->
		<section class="container ct-events">

		<section class="container ct-gallery">
			<div class="row">
			<h2> Galerie </h2>
				<?php
					echo do_shortcode('[ngg src="albums" ids="8" display="basic_compact_album"]');
				?>
			</div> <!-- Row gallery -->
		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
