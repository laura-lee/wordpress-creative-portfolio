
<div class="wrapper">

  	<!-- Template Name: Contact Page.  -->
    <?php get_header();  ?>

  

  <div class="main">
    <div class="container contact-page">


      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2 class="contact-title"><?php the_title(); ?></h2>
        <?php  dynamic_sidebar( 'third-widget-area' ); ?>
        
        <?php the_content(); ?>
        <div class="social-media-widgets">
           <?php  dynamic_sidebar( 'primary-widget-area' ); ?>
        </div>
      <?php endwhile; // end the loop?>
    </div> <!-- /.container -->

  <!-- <div class="social-media-widgets">
  </div> -->

  </div> <!-- /.main -->
<?php get_footer(); ?>
</div>
