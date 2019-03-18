<?php
/*
Template Name: Operantk9-aboutus

*/

get_header();?>
		
	<h1>Meet The Pack</h1>
	
	<div class="about-container">
		<div class="about">
			<h2>Pack Leader - Warren</h2>
			<ul>
				<li></li>
				<li></li>
			</ul>
		</div>
		<div class="about">
			<h2>Pack Leader - Warren</h2>
			<ul>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>


		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
</div>



<?php get_footer();