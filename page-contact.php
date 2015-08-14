<?php get_header();  ?>
<div class="wrapper">

  	<!-- Template Name: Contact Page.  -->

  

  <div class="main">
    <div class="container contact-page">


      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php  dynamic_sidebar( 'third-widget-area' ); ?>
        <div class="social-media-widgets">
    
    <?php  dynamic_sidebar( 'primary-widget-area' ); ?>
  </div>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /.container -->

  <!-- <div class="social-media-widgets">
    
    <?php  dynamic_sidebar( 'primary-widget-area' ); ?>
  </div> -->

  </div> <!-- /.main -->

</div>
<?php get_footer(); ?>