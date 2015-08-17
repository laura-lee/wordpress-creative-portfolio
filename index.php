<?php //index.php is the last resort template, if no other templates match ?>
<div class="wrapper">
	<?php get_header(); ?>
	<section class="hero-section" style="background-image: linear-gradient(rgba(136, 206, 250, 0.3), rgba(136, 206, 250, 0.3)), url(<?php header_image(); ?>)">


	
		<div class="intro">
		<h2>
			<?php 
				get_currentuserinfo();

				echo ($current_user->user_firstname . " " . $current_user->user_lastname);
			?>
		</h2>
		<p>
			<?php 
				the_author_meta("description", $current_user->ID);
			 ?>

			 <a href="#blog-section" class="portfolio-link">See my latest work <span class="triangle">&#9655;</span></a>
		</p>
		</div>
	</section>
		<div class="main">
		  <div class="container">

		    <div class="content content-blog" id="blog-section">
				<?php  dynamic_sidebar( 'custom-widget-area' ); ?>
		    		<?php get_template_part( 'loop', 'index' );	?>
		    </div> <!--/.content -->
		  </div> <!-- /.container -->
		</div> <!-- /.main -->
	<?php get_footer(); ?>
</div>