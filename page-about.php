<?php

/*
	Template Name: About Page. 
*/

get_header();  ?>

<div class="main">
  <div class="container">

  this is the sweet home page

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->


	<h2>partyyyyyyyy</h2>

</div> <!-- /.main -->

<?php get_footer(); ?>