<?php get_header(); ?>

    <ul class="jobs-listing">
		<?php if ( have_posts() ): ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-part/single-post', 'item' ) ?>

			<?php endwhile; ?>

		<?php endif; ?>
    </ul>
<?php get_footer(); ?>