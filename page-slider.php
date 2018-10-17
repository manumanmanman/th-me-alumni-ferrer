

	<?php get_header(); ?>
	


<main role="main">
		<!-- section -->
		<section id="slider" class="container-fluid">

			<div  id="carouselExampleIndicators" class="carousel" data-ride="carousel" data-interval="3000">					
      	

        
       <?php /*?> <!--    <li>
               <img src="<?php echo get_post_meta($post->ID, 'slider', true) ?>" />
               <div>
                  <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                  <?php the_excerpt(); ?>
				  <?php the_post_thumbnail( $size = 'post-thumbnail', $attr = '' );?>
               </div>
            </li>--><?php */?>
         
				


<?php /*?><!--<div class="carousel-inner">
	<?php query_posts('category_name=slider');
         while ( have_posts() ) : the_post(); ?>
    <div class="carousel-item active">
		
     <?php the_post_thumbnail( $size = 'post-thumbnail', $attr = '' );?>
		<div class="carousel-caption d-none d-sm-block">
   			<h1><?php the_title(); ?></h1>
    		<p><?php the_excerpt(); ?></p>
  		</div>	
		
    </div>--><?php */?>
<div class="carousel-inner ">
	
	<?php query_posts('category_name=slider');
         while ( have_posts() ) : the_post(); ?>
    <div class="carousel-item">
		<a href="<?php echo get_permalink(); ?>">
      <?php the_post_thumbnail( $size = 'post-thumbnail', $attr = '' );?>
<div class="carousel-caption d-none d-sm-block">
    <h5><?php the_title(); ?></h5>
    <p><?php //the_excerpt(); ?></p>
	<p> <?php 
foreach((get_the_category()) as $cat) { 
echo $cat->cat_name . ' '; 
} ?> </p>
  </div>
		</a>
    </div>
  <?php endwhile;
	wp_reset_query();?>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  </div>
				
         
  

  </section>
		<!-- /section -->
	</main>
<script>

	
	
</script>
<?php get_sidebar(); ?>

<?php get_footer(); ?>

</body>
</html>


