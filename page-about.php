<?php

get_header(); ?>

<div class="wrapper">

  	<!-- Template Name: About Page.  -->

  <div class="main">
    <div class="container about-page">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php 
          $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?>
        <img src="<?php echo $featuredImage ?>">
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /.container -->

  </div> <!-- /.main -->
</div>
<?php get_footer(); ?>