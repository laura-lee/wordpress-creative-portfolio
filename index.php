<?php //index.php is the last resort template, if no other templates match ?>
<div class="wrapper">
	<?php get_header(); ?>
	<section class="hero-section">
		<div class="intro">
			<h2>Dale Sturtevant</h2>
			<p>I love cheese, especially caerphilly feta. Fromage when the cheese comes out everybody's 
			happy port-salut stilton cheesecake cut the cheese who moved my cheese squirty cheese.
			Hard cheese.</p>
		</div>
	</section>
		<div class="main">
		  <div class="container">

		    <div class="content">
		    		<?php get_template_part( 'loop', 'index' );	?>
		    </div> <!--/.content -->

		    <?php get_sidebar(); ?>

		  </div> <!-- /.container -->
		</div> <!-- /.main -->
	<?php get_footer(); ?>
</div>